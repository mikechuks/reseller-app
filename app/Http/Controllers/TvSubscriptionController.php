<?php

namespace App\Http\Controllers;


class TvSubscriptionController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.tv_subscription', compact(
            'user',
        ));
    }
}