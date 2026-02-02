<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/doctor-qualifications', [MainController::class, 'qualifications'])->name('qualifications');
Route::get('/scientific-contributions', [MainController::class, 'scientificContributions'])->name('scientific-contributions');
Route::get('/services', [MainController::class, 'services'])->name('services'); // Points to departments
Route::get('/doctors', [MainController::class, 'doctors'])->name('doctors');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/blogs', [MainController::class, 'blogs'])->name('blogs');
Route::get('/blogs/single-blog', [MainController::class, 'singleBlog'])->name('single-blog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/hip-treatments', [MainController::class, 'hipTreatments'])->name('hip-treatments');
Route::get('/knee-treatments', [MainController::class, 'kneeTreatments'])->name('knee-treatments');
Route::get('/hip-conditions', [MainController::class, 'hipConditions'])->name('hip-conditions');
Route::get('/knee-conditions', [MainController::class, 'kneeConditions'])->name('knee-conditions');
Route::get('/awards', [MainController::class, 'awards'])->name('awards');

