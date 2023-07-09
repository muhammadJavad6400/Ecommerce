<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariations extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'attribute_id',
        'product_id',
        'value',
        'price', //قیمت قبل تخفیف
        'quantity',
        'sku',
        'sale_price', // قیمت بعد از تخفیف
        'date_on_sale_from',
        'date_on_sale_to',
    ];
}
