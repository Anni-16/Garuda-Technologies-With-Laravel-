<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\ServiceCategory;

class Service extends Model
{
    protected $fillable = [
        'name',
        'images',
        'category_id',
        'short_description',
        'description',
        'is_featured',
        'service_slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'schema_markup',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
    ];

    protected static function booted()
    {
        static::deleting(function ($service) {
            if ($service->images && Storage::disk('public')->exists($service->images)) {
                Storage::disk('public')->delete($service->images);
            }
        });
    }
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
