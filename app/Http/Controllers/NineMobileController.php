<?php

namespace App\Http\Controllers;


class NineMobileController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.ninemobile', compact(
            'user',
        ));
    }
}