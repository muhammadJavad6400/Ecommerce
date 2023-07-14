<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'description',
        'primary_image',
        'status',
        'is_active',
        'delivery_amount',
        'delivery_amount_per_product'
    ];

    protected $appends = [
        'quantity_check',
        'sale_check',  // چک کردن قمیت و بازه تخفیف
        'price_check', // چک کردن کمترین قیمت فروش
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getQuantityCheckAttribute()
    {
        return $this->productVariations()->where('quantity', '>', 0)->first() ?? 0;
    }

    public function getSaleCheckAttribute()
    {
        return $this->productVariations()->where('quantity', '>', 0)->where('sale_price', '!=', null)->where('date_on_sale_from', '<', Carbon::now())->where('date_on_sale_to', '>', Carbon::now())->orderBy('sale_price')->first() ?? false;
    }

    public function getPriceCheckAttribute()
    {
        return $this->productVariations()->where('quantity', '>', 0)->orderBy('price')->first() ?? false;
    }

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'فعال' : 'غیرفعال';
    }

    public function scopeFilter($query)
    {
        if (request()->has('variation')) {
            $query->whereHas('productVariations', function ($query) {
                foreach (explode('-', request()->variation) as $index => $variation) {
                    if($index == 0){
                        $query->where('value', $variation);
                    }else{
                        $query->orWhere('value', $variation);
                    }

                }
            });
        }
        dd($query->toSql());
        return $query;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productAttributes()
    {
        return $this->hasMany(ProductAttribute::class);
        // رابطه را با جدولی برقرار میکنیم که مقدار ویژگی های ما در آن قرار گرفته
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariations::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productRates()
    {
        return $this->hasMany(ProductRate::class);
    }
}
