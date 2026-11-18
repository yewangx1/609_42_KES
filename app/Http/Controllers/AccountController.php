<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('accounts', [
            'accounts' => Account::all()
        ]);
    }

    public function create()
    {
        return view('account_create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'currency' => 'required|max:3',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        Account::create($validated);

        return redirect('/accounts');
    }

    public function show(string $id)
    {
        return view('account', [
            'account' => Account::where('id', $id)->first()
        ]);
    }

    public function edit(string $id)
    {
        return view('account_edit', [
            'account' => Account::where('id', $id)->first(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'currency' => 'required|max:3',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $account = Account::where('id', $id)->first();
        $account->update($validated);

        return redirect('/accounts');
    }

    public function destroy(string $id)
    {
        Account::destroy($id);
        return redirect('/accounts');
    }
}