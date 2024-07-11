<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'in_stock',
        'imageUrl',
        'size',
        'weight',
        'discount',
        'color'
    ];
    public $timestamps = false;
}
