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
        'collection',
        'imagePath',
        'weight',
        'discount',
    ];
    public $timestamps = false;
}
