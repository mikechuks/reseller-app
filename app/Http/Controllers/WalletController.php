<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    /**
     * Display the user's wallet.
     */
    public function index()
    {
        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | Get or create wallet
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
        | Wallet Transactions
        |--------------------------------------------------------------------------
        */

        $transactions = $wallet->transactions()
            ->latest()
            ->paginate(10);


        /*
        |--------------------------------------------------------------------------
        | Wallet Statistics
        |--------------------------------------------------------------------------
        */

        $totalCredits = $wallet->transactions()
            ->where('type', 'credit')
            ->where('status', 'successful')
            ->sum('amount');

        $totalDebits = $wallet->transactions()
            ->where('type', 'debit')
            ->where('status', 'successful')
            ->sum('amount');

        $successfulTransactions = $wallet->transactions()
            ->where('status', 'successful')
            ->count();

        $totalTransactions = $wallet->transactions()->count();


        /*
        |--------------------------------------------------------------------------
        | Return Wallet View
        |--------------------------------------------------------------------------
        */

        return view('user_dashboard.wallet', compact(
            'user',
            'wallet',
            'transactions',
            'totalCredits',
            'totalDebits',
            'successfulTransactions',
            'totalTransactions'
        ));
    }


    /**
     * Display fund wallet page.
     */
    public function fundWallet()
    {
        $user = Auth::user();

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            [
                'balance' => 0,
            ]
        );

        return view('user_dashboard.fund-wallet', compact(
            'user',
            'wallet'
        ));
    }


    /**
     * Display wallet transactions.
     */
    public function transactions()
    {
        $user = Auth::user();

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            [
                'balance' => 0,
            ]
        );

        $transactions = $wallet->transactions()
            ->latest()
            ->paginate(10);

        return view('user_dashboard.transactions', compact(
            'user',
            'wallet',
            'transactions'
        ));
    }
}