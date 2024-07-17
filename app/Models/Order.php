<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'delivery',
        'terminal',
        'name',
        'surname',
        'email',
        'phone',
        'payment',
        'cost'
    ];
    public $timestamps = false;
}