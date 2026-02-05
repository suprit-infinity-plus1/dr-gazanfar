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
     * Get the categories of this blog
     */
    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_blog_category');
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
