<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogFaq extends Model
{
    protected $fillable = ['blog_id', 'question', 'answer'];

    /**
     * Get the blog this FAQ belongs to
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
