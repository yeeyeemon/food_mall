<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable =[
        'name',
        'address',
        'takeaway',
        'delivery',
        'popular',
        'rating',
        'image',
        'banner_image'
        ];
}
