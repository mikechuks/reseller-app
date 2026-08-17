<?php

namespace App\Http\Controllers;


class GloController extends Controller
{
    public function userDashboard()
    {
        $user = auth()->user();
        return view('user_dashboard.glo', compact(
            'user',
        ));
    }
}