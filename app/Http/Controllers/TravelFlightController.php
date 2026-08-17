<?php

namespace App\Http\Controllers;


class TravelFlightController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.travel', compact(
            'user',
        ));
    }
}