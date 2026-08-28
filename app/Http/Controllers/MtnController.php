<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Services\VtuService;
use Illuminate\Http\Request;

class MtnController extends Controller{
        protected VtuService $vtuService;

        public function __construct(VtuService $vtuService)
        {
            $this->vtuService = $vtuService;
        }

        /**
         * Display MTN Airtime page
         */
        public function userDashboard()
        {
            $user = auth()->user();

            // Find Airtime category
            $category = Category::where('name', 'Airtime')->first();

            // Get MTN products
            $products = Product::where('category_id', $category?->id)
                ->where('name', 'like', '%MTN%')
                ->where('status', 'active')
                ->latest()
                ->get();

            return view('user_dashboard.mtn', compact(
                'user',
                'products'
            ));
        }

        /* test authen */
        public function testVtu(VtuService $vtuService){
            return response()->json(
                $vtuService->testAuthentication()
            );
        }

        /* text airtime */
        public function testAirtime(VtuService $vtuService){
            try {

                $result = $vtuService->buyAirtime(
                    '08130285140',
                    'mtn',
                    100
                );

                return response()->json([
                    'success' => true,
                    'message' => 'Airtime API test completed.',
                    'data' => $result,
                ]);

            } catch (\Exception $e) {

                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                ], 500);
            }
        }


        /**
         * Buy MTN Airtime
         */
        public function buyAirtime(Request $request)
        {
            $validated = $request->validate([
                'product_id' => 'required|exists:products,id',
                'phone' => [
                    'required',
                    'string',
                    'regex:/^0[7-9][0-9]{9}$/',
                ],
            ]);

            $product = Product::where('id', $validated['product_id'])
                ->where('name', 'like', '%MTN%')
                ->where('status', 'active')
                ->firstOrFail();

            $amount = $product->price;

            $phone = $validated['phone'];

            try {

                $result = $this->vtuService->buyAirtime(
                    $phone,
                    'mtn',
                    $amount
                );

                return redirect()
                    ->route('mtn-airtime.show')
                    ->with(
                        'success',
                        $result['message'] ?? 'MTN Airtime request submitted successfully.'
                    );

            } catch (\Exception $e) {

                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', $e->getMessage());
            }
        }
}