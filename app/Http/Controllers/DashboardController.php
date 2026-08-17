<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payment;

class DashboardController extends Controller
{
    /**
     * User dashboard
     */
    public function userDashboard()
    {
        $user = auth()->user();

        // User's orders
        $orders = $user->orders()
            ->latest()
            ->paginate(5);

        // Total amount spent by the user
        $totalSpent = $user->orders()
            ->whereIn('status', ['completed', 'delivered'])
            ->sum('total_amount');

        // Total number of transactions/orders
        $totalTransactions = $user->orders()->count();

        // Successful transactions
        $successfulTransactions = $user->orders()
            ->whereIn('status', ['completed', 'delivered'])
            ->count();

        // Success rate
        $successRate = $totalTransactions > 0
            ? round(($successfulTransactions / $totalTransactions) * 100, 1)
            : 0;

        // Recent transactions
        $recentOrders = $user->orders()
            ->latest()
            ->take(5)
            ->get();

        return view('user_dashboard.index', compact(
            'user',
            'orders',
            'totalSpent',
            'totalTransactions',
            'successfulTransactions',
            'successRate',
            'recentOrders'
        ));
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