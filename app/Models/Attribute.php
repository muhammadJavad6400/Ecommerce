<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class , 'attribute_category');
    }

    public function attributeValues()
    {
        return $this->hasMany(ProductAttribute::class)->select('attribute_id', 'value')->distinct();
    }

    public function variationValues()
    {
        return $this->hasMany(ProductVariations::class)->select('attribute_id', 'value')->distinct();
    }
}
