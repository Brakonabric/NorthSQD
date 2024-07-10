<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'item_id',
        'cart_id',
        'quantity'
    ];
    public $timestamps = false;
}
