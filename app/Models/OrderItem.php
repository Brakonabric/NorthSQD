<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'item_id',
        'order_id',
        'size',
        'color'
    ];
    public $timestamps = false;
}
