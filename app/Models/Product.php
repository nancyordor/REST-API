<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //requested by postman in other to read the detailed from api.php
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];
}
