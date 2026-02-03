<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    /**
     * Get all blogs with this tag
     */
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tag');
    }
}
