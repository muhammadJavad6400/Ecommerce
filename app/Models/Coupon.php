<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nmae',
        'code',
        'type',
        'amount',
        'percentage',
        'max_percentage_amount',
        'description',
        'expired_at'
    ];
}
