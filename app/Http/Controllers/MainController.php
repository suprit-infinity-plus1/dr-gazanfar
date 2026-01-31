<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
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
}
