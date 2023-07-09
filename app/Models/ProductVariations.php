<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $appends = [
        'is_sale'
    ];

    public function getIsSaleAttribute() // چک میکنیم آیا این متغییر تخفیف دارد یا نه
    {
        return ($this->sale_price != null && $this->date_on_sale_from < Carbon::now() && $this->date_on_sale_to > Carbon::now()) ? true : false;
        // اگر قیمت حراجی داشت قیمت حراجی را برگردان در غیر این صورت فالس را برگردان
    }
}
