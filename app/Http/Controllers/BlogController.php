<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display all blogs grouped by category
     */
    public function index()
    {
        $categories = BlogCategory::active()
            ->withCount('blogs')
            ->with([
                'blogs' => function ($query) {
                    $query->where('status', true)
                        ->orderBy('published_at', 'desc')
                        ->limit(6);
                }
            ])
            ->get();

        $latestBlogs = Blog::where('status', true)
            ->with(['category', 'tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('blogs', compact('categories', 'latestBlogs'));
    }

    /**
     * Display all blogs in a specific category
     */
    public function allBlogs($slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();

        $blogs = Blog::where('status', true)
            ->where('category_id', $category->id)
            ->with(['tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('all-blogs', compact('category', 'blogs'));
    }

    /**
     * Display single blog details
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', true)
            ->with(['category', 'tags', 'faqs'])
            ->firstOrFail();

        // Increment views
        $blog->increment('views');

        // Get related blogs from same category
        $relatedBlogs = Blog::where('status', true)
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->orderBy('published_at', 'desc')
            ->limit(6)
            ->get();

        return view('blog-details', compact('blog', 'relatedBlogs'));
    }
}
