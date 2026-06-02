<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        protected $fillable = [
        'name',
        'images',
        'number',
        'email',
        'address',
        'location_url',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
    ];
}
