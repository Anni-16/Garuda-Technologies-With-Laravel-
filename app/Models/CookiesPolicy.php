<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookiesPolicy extends Model
{
    protected $fillable = [
        'name',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
    ];
}
