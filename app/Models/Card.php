<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_card');
    }
}