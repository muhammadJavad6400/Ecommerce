<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'telephone',
        'telephone2',
        'email',
        'longitude',
        'latitude',
        'instagram',
        'Telegram',
    ];
}
