<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'item_id',
    ];
    public $timestamps = false;
}
