<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;

class MainController extends Controller
{
    public function dashboard()
    {
        $blogsCount = Blog::count();
        $categoriesCount = BlogCategory::count();
        $tagsCount = Tag::count();
        $recentBlogs = Blog::with('category')->orderBy('created_at', 'desc')->limit(10)->get();

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
        return view('blogs');
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
        return view('treatments-2');
    }
    public function kneeTreatments()
    {
        return view('treatments-2');
    }
    public function hipConditions()
    {
        return view('conditions');
    }
    public function kneeConditions()
    {
        return view('conditions');
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
