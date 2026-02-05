<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display all blogs grouped by category
     */
    public function index(Request $request)
    {
        // Common Data for Sidebar
        $categories = BlogCategory::withCount('blogs')->get();
        $tags = Tag::all();
        $recentBlogs = Blog::where('status', true)->orderBy('published_at', 'desc')->limit(3)->get();

        // Search Logic
        $query = Blog::where('status', true);

        if ($request->has('text')) {
            $searchTerm = $request->text;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('content', 'LIKE', "%{$searchTerm}%");
            });
        }

        $latestBlogs = $query->with(['categories', 'tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('blogs', compact('categories', 'latestBlogs', 'tags', 'recentBlogs'));
    }

    /**
     * Display all blogs in a specific category
     */
    public function allBlogs($slug)
    {
        // Common Data for Sidebar
        $categories = BlogCategory::withCount('blogs')->get();
        $tags = Tag::all();
        $recentBlogs = Blog::where('status', true)->orderBy('published_at', 'desc')->limit(3)->get();

        $category = BlogCategory::where('slug', $slug)->firstOrFail();

        $blogs = Blog::where('status', true)
            ->whereHas('categories', function ($q) use ($category) {
                $q->where('blog_categories.id', $category->id);
            })
            ->with(['tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $title = 'Category: ' . $category->name;

        return view('all-blogs', compact('category', 'blogs', 'categories', 'tags', 'recentBlogs', 'title'));
    }

    /**
     * Display all blogs with a specific tag
     */
    public function blogsByTag($slug)
    {
        // Common Data for Sidebar
        $categories = BlogCategory::withCount('blogs')->get();
        $tags = Tag::all();
        $recentBlogs = Blog::where('status', true)->orderBy('published_at', 'desc')->limit(3)->get();

        $tag = Tag::where('slug', $slug)->firstOrFail();

        $blogs = Blog::whereHas('tags', function ($q) use ($tag) {
            $q->where('tags.id', $tag->id);
        })
            ->where('status', true)
            ->with(['categories', 'tags'])
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $title = 'Tag: ' . $tag->name;

        return view('all-blogs', compact('tag', 'blogs', 'categories', 'tags', 'recentBlogs', 'title'));
    }

    /**
     * Display single blog details
     */
    public function show($slug)
    {
        // Common Data for Sidebar
        $categories = BlogCategory::withCount('blogs')->get();
        $tags = Tag::all();
        $recentBlogs = Blog::where('status', true)->orderBy('published_at', 'desc')->limit(3)->get();

        $blog = Blog::where('slug', $slug)
            ->where('status', true)
            ->with(['categories', 'tags', 'faqs'])
            ->firstOrFail();

        // Increment views
        $blog->increment('views');

        // Get related blogs from same categories
        $relatedBlogs = Blog::where('status', true)
            ->whereHas('categories', function ($q) use ($blog) {
                $q->whereIn('blog_categories.id', $blog->categories->pluck('id'));
            })
            ->where('id', '!=', $blog->id)
            ->orderBy('published_at', 'desc')
            ->limit(9)
            ->get();

        return view('blog-details', compact('blog', 'relatedBlogs', 'categories', 'tags', 'recentBlogs'));
    }
}
