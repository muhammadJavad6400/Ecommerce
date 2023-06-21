<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'province_id',
        'city_id',
        'title',
        'address',
        'cellphone',
        'home_phone',
        'postal_code',
        'longitude',
        'latitude'
    ];
}
