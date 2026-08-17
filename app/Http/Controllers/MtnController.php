<?php

namespace App\Http\Controllers;


class MtnController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.mtn', compact(
            'user',
        ));
    }
}