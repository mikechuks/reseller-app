<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * User dashboard
     */
    public function userDashboard()
    {
        $user = auth()->user();


        /*
        |--------------------------------------------------------------------------
        | User Wallet
        |--------------------------------------------------------------------------
        */

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            [
                'balance' => 0,
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | Wallet Balance
        |--------------------------------------------------------------------------
        */

        $walletBalance = $wallet->balance;


        /*
        |--------------------------------------------------------------------------
        | User's Orders
        |--------------------------------------------------------------------------
        */

        $orders = $user->orders()
            ->latest()
            ->paginate(5);


        /*
        |--------------------------------------------------------------------------
        | Total Amount Spent
        |--------------------------------------------------------------------------
        */

        $totalSpent = $user->orders()
            ->whereIn('status', ['completed', 'delivered'])
            ->sum('total_amount');


        /*
        |--------------------------------------------------------------------------
        | Total Number of Transactions / Orders
        |--------------------------------------------------------------------------
        */

        $totalTransactions = $user->orders()->count();


        /*
        |--------------------------------------------------------------------------
        | Successful Transactions
        |--------------------------------------------------------------------------
        */

        $successfulTransactions = $user->orders()
            ->whereIn('status', ['completed', 'delivered'])
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Success Rate
        |--------------------------------------------------------------------------
        */

        $successRate = $totalTransactions > 0
            ? round(
                ($successfulTransactions / $totalTransactions) * 100,
                1
            )
            : 0;


        /*
        |--------------------------------------------------------------------------
        | Recent Transactions
        |--------------------------------------------------------------------------
        */

        $recentOrders = $user->orders()
            ->latest()
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Wallet Transactions This Month
        |--------------------------------------------------------------------------
        */

        $monthlyTransactions = $wallet->transactions()
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Return Dashboard
        |--------------------------------------------------------------------------
        */

        return view('user_dashboard.index', compact(
            'user',
            'wallet',
            'walletBalance',
            'orders',
            'totalSpent',
            'totalTransactions',
            'successfulTransactions',
            'successRate',
            'recentOrders',
            'monthlyTransactions'
        ));
    }


    /**
     * Sign out user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the current session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'You have been signed out successfully.');
    }


    // /**
    //  * Admin dashboard
    //  */
    // public function adminDashboard()
    // {
    //     $totalUsers = User::count();

    //     $totalProducts = Product::count();

    //     $totalOrders = Order::count();

    //     $totalPayments = Payment::count();

    //     $recentOrders = Order::with('user')
    //         ->latest()
    //         ->take(5)
    //         ->get();

    //     return view('dashboard.admin', compact(
    //         'totalUsers',
    //         'totalProducts',
    //         'totalOrders',
    //         'totalPayments',
    //         'recentOrders'
    //     ));
    // }
}
