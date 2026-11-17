<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show(string $id)
    {
        return view('card', [
            'card' => Card::where('id', $id)->first()
        ]);
    }
}