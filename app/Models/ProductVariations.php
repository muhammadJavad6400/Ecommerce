<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariations extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_id',
        'product_id',
        'value',
        'price',
        'quantity',
        'sku',
        'sale_price',
        'date_on_sale_from',
        'date_on_sale_to',
    ];
}
