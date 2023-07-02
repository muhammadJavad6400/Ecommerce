<?php

namespace App\Models;

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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'فعال' : 'غیرفعال';
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'product_tag');
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
}
