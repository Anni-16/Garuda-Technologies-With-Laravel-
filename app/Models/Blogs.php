<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blogs extends Model
{
    protected $fillable = [
        'title',
        'images',
        'blog_type',
        'author',
        'published_at',
        'description',
        'is_featured',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
    ];

     protected $casts = [
        'meta_keywords' => 'array',
    ];

       protected static function booted()
    {
        static::deleting(function ($blog) {
            if ($blog->images && Storage::disk('public')->exists($blog->images)) {
                Storage::disk('public')->delete($blog->images);
            }
        });
    }

     public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_type');
    }
    
     public function authorName()
    {
        return $this->belongsTo(BlogAuthor::class, 'author');
    }
}
