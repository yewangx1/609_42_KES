<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('accounts', [
            'accounts' => Account::all()
        ]);
    }

    public function show(string $id)
    {
        return view('account', [
            'account' => Account::where('id', $id)->first()
        ]);
    }
}