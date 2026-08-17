<?php

namespace App\Http\Controllers;


class AirtelController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.airtel', compact(
            'user',
        ));
    }
}