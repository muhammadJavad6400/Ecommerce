<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    use HasFactory, SoftDeletes;

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
