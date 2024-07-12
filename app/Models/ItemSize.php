<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    protected $fillable = [
        'in_stock',
        'size',
        'color_id'
    ];
    public $timestamps = false;
}
