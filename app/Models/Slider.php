<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected  $fillable = [
        'image',
        'title_uz',
        'title_ru',
        'title_en',
        'desc_uz',
        'desc_ru',
        'desc_en',
        'link',
    ];
}
