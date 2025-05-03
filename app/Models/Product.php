<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Name',
        'Qty',
        'Price',
        'Description',
    ];
}
