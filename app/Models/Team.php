<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    protected $fillable = [
        'name',
        'images',
        'position',
        'category_id',
        'slug',
        'is_featured',
    ];

    protected static function booted()
    {
        static::deleting(function ($team) {
            if ($team->images && Storage::disk('public')->exists($team->images)) {
                Storage::disk('public')->delete($team->images);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(TeamCategory::class, 'category_id');
    }
}
