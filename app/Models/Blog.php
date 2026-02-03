<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'seo_title',
        'slug',
        'cover_image',
        'cover_image_alt',
        'content',
        'author',
        'category_id',
        'status',
        'published_at',
        'views',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'schema'
    ];

    protected $casts = [
        'status' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Get the category of this blog
     */
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    /**
     * Get all tags for this blog
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }

    /**
     * Get all FAQs for this blog
     */
    public function faqs()
    {
        return $this->hasMany(BlogFaq::class, 'blog_id');
    }
}
