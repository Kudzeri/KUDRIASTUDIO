<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextVariable extends Model
{
    protected $fillable = [
        'key',
        'text_en',
        'text_es',
        'text_ru',
    ];
}
