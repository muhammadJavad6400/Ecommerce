<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

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
