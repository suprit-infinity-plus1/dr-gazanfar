<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    /**
     * Get all blogs in this category
     */
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_blog_category');
    }

    /**
     * Scope to filter active categories
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
