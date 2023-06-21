<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'text',
        'priority',
        'is_active',
        'type',
        'butten_text',
        'butten_link',
        'butten_icon'
    ];
}
