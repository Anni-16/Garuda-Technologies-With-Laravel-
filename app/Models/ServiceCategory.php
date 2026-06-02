<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;

class ServiceCategory extends Model

{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'is_active',
        'category_slug',
    ];
    protected static function booted()
    {
        static::deleting(function ($serviceCategory) {
            if ($serviceCategory->icon && Storage::disk('public')->exists($serviceCategory->icon)) {
                Storage::disk('public')->delete($serviceCategory->icon);
            }
        });
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
