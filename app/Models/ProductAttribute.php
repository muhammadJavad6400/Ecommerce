<?php

namespace App\Models;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'attribute_id',
        'product_id',
        'value',
        'is_active'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
        //اینجا ما در حقیقت نام صاحب هر ویژگی را بدست می آوریم
      // مثلا ممکن است ما رنگ های قرمز، آبی، سرمه ای را داشته باشیم که همه ی این ها متعلق به ویژگی رنگ هستند
    }
}
