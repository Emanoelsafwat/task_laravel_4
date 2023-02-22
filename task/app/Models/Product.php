<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //name, price, count, category, expire_date,
    protected $fillable =[
        'name',
        'price',
        'count',
        'category',
        'expire_date'
    ];
}
