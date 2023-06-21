<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'coupon_id',
        'status',
        'total_amount',
        'delivary_amount',
        'coupon_amount',
        'paying_amount',
        'payment_type',
        'payment_status',
        'description'
    ];
}
