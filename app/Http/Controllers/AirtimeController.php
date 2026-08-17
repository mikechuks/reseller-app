<?php

namespace App\Http\Controllers;


class AirtimeController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.airtimes', compact(
            'user',
        ));
    }
}