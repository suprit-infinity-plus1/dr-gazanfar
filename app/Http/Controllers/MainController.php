<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use App\Models\Condition;
use App\Models\Treatment;

class MainController extends Controller
{
    public function dashboard()
    {
        $blogsCount = Blog::count();
        $categoriesCount = BlogCategory::count();
        $tagsCount = Tag::count();
        $recentBlogs = Blog::with('categories')->orderBy('created_at', 'desc')->limit(10)->get();

        return view('admin.dashboard', compact('blogsCount', 'categoriesCount', 'tagsCount', 'recentBlogs'));
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
    }

    public function qualifications()
    {
        return view('qualifications');
    }

    public function doctors()
    {
        return view('doctors');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function blogs()
    {
        $latestBlogs = Blog::with('categories', 'tags')->where('status', 'published')->orderBy('published_at', 'desc')->paginate(6);
        return view('blogs', compact('latestBlogs'));
    }

    public function singleBlog()
    {
        return view('single-blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function hipTreatments()
    {
        $treatments = Treatment::where('status', 1)->where('type', 'hip')->get();
        return view('treatments-2', compact('treatments'));
    }
    public function kneeTreatments()
    {
        $treatments = Treatment::where('status', 1)->where('type', 'knee')->get();
        return view('treatments-2', compact('treatments'));
    }
    public function hipConditions()
    {
        $conditions = Condition::where('status', 1)->where('type', 'hip')->get();
        return view('conditions', compact('conditions'));
    }
    public function kneeConditions()
    {
        $conditions = Condition::where('status', 1)->where('type', 'knee')->get();
        return view('conditions', compact('conditions'));
    }

    public function condition($slug)
    {
        $condition = Condition::where('slug', $slug)->where('status', 1)->firstOrFail();
        // Get related treatments based on the same type (knee/hip)
        $relatedTreatments = Treatment::where('type', $condition->type)
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $recentBlogs = Blog::latest()->limit(3)->get();

        return view('condition-single', compact('condition', 'relatedTreatments', 'recentBlogs'));
    }

    public function treatment($slug)
    {
        $treatment = Treatment::where('slug', $slug)->where('status', 1)->firstOrFail();
        $recentBlogs = Blog::latest()->limit(3)->get();
        return view('treatment-single', compact('treatment', 'recentBlogs'));
    }

    public function scientificContributions()
    {
        return view('scientific-contributions');
    }

    public function awards()
    {
        return view('awards');
    }
}
