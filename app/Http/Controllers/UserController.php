<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => User::all()
        ]);
    }

    public function show(string $id)
    {
        return view('user', [
            'user' => User::where('id', $id)->first()
        ]);
    }
}