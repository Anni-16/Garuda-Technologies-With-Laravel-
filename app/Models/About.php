<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    protected $fillable = [
        'heading_1',
        'images_1',
        'descrpition',
        'heading_2',
        'short_descrpition',
        'images_2',
        'images_3',
        'experience_of_year',
        'our_mission',
        'content_1',
        'our_vision',
        'content_2',
        'heading_3',
        'content_3',
        'images_4',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
    ];

    protected static function booted()
    {
        static::deleting(function ($service) {

            $imageFields = [
                'images_1',
                'images_2',
                'images_3',
                'images_4',
            ];

            foreach ($imageFields as $field) {
                if (!empty($service->$field) && Storage::disk('public')->exists($service->$field)) {
                    Storage::disk('public')->delete($service->$field);
                }
            }
        });
    }
}
