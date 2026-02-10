<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\ProfileController;

// Public Routes
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/doctor-qualifications', [MainController::class, 'qualifications'])->name('qualifications');
Route::get('/scientific-contributions', [MainController::class, 'scientificContributions'])->name('scientific-contributions');
Route::get('/services', [MainController::class, 'services'])->name('services'); // Points to departments
Route::get('/doctors', [MainController::class, 'doctors'])->name('doctors');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');

// Blog Routes (Frontend)
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/category/{slug}', [BlogController::class, 'allBlogs'])->name('all-blogs');
Route::get('/blogs/tag/{slug}', [BlogController::class, 'blogsByTag'])->name('blogs.tag');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/hip-treatments', [MainController::class, 'hipTreatments'])->name('hip-treatments');
Route::get('/knee-treatments', [MainController::class, 'kneeTreatments'])->name('knee-treatments');
Route::get('/hip-conditions', [MainController::class, 'hipConditions'])->name('hip-conditions');
Route::get('/knee-conditions', [MainController::class, 'kneeConditions'])->name('knee-conditions');
Route::get('/condition/{slug}', [MainController::class, 'condition'])->name('condition.show');
Route::get('/treatment/{slug}', [MainController::class, 'treatment'])->name('treatment.show');
Route::get('/dummy-department', function () {
    $recentBlogs = \App\Models\Blog::latest()->limit(3)->get();
    return view('department-single', compact('recentBlogs'));
})->name('dummy.department');

Route::get('/awards', [MainController::class, 'awards'])->name('awards');

// Admin Routes (Protected)
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::prefix('/dashboard')->group(function () {
        Route::prefix('blogs')->group(function () {
            // Blog CRUD
            Route::get('/', [AdminBlogController::class, 'blogs'])->name('admin.blogs');
            Route::get('/add', [AdminBlogController::class, 'blogsAdd'])->name('admin.blogs.add');
            Route::get('/edit/{id}', [AdminBlogController::class, 'blogsEdit'])->name('admin.blogs.edit');
            Route::post('/delete/{id}', [AdminBlogController::class, 'blogsDelete'])->name('admin.blogs.delete');
            Route::post('/store', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
            Route::post('/update/{id}', [AdminBlogController::class, 'blogsUpdate'])->name('admin.blogs.update');

            // Category CRUD
            Route::get('/categories', [AdminBlogController::class, 'categories'])->name('admin.blogs.categories');
            Route::get('/categories/add', [AdminBlogController::class, 'categoriesAdd'])->name('admin.blogs.categories.add');
            Route::get('/categories/edit/{id}', [AdminBlogController::class, 'categoriesEdit'])->name('admin.blogs.categories.edit');
            Route::post('/categories/delete/{id}', [AdminBlogController::class, 'categoriesDelete'])->name('admin.blogs.categories.delete');
            Route::post('/categories/store', [AdminBlogController::class, 'categoriesStore'])->name('admin.blogs.categories.store');
            Route::post('/categories/update/{id}', [AdminBlogController::class, 'categoriesUpdate'])->name('admin.blogs.categories.update');

            // Tag CRUD
            Route::get('/tags', [AdminBlogController::class, 'tags'])->name('admin.blogs.tags');
            Route::get('/tags/add', [AdminBlogController::class, 'tagsAdd'])->name('admin.blogs.tags.add');
            Route::get('/tags/edit/{id}', [AdminBlogController::class, 'tagsEdit'])->name('admin.blogs.tags.edit');
            Route::post('/tags/delete/{id}', [AdminBlogController::class, 'tagsDelete'])->name('admin.blogs.tags.delete');
            Route::post('/tags/store', [AdminBlogController::class, 'tagsStore'])->name('admin.blogs.tags.store');
            Route::post('/tags/update/{id}', [AdminBlogController::class, 'tagsUpdate'])->name('admin.blogs.tags.update');
        });

        // Treatment CRUD
        Route::prefix('treatments')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\TreatmentController::class, 'index'])->name('admin.treatments');
            Route::get('/create', [\App\Http\Controllers\Admin\TreatmentController::class, 'create'])->name('admin.treatments.create');
            Route::post('/store', [\App\Http\Controllers\Admin\TreatmentController::class, 'store'])->name('admin.treatments.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'edit'])->name('admin.treatments.edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'update'])->name('admin.treatments.update');
            Route::post('/delete/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'destroy'])->name('admin.treatments.delete');
        });

        // Condition CRUD
        Route::prefix('conditions')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ConditionController::class, 'index'])->name('admin.conditions');
            Route::get('/create', [\App\Http\Controllers\Admin\ConditionController::class, 'create'])->name('admin.conditions.create');
            Route::post('/store', [\App\Http\Controllers\Admin\ConditionController::class, 'store'])->name('admin.conditions.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ConditionController::class, 'edit'])->name('admin.conditions.edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\ConditionController::class, 'update'])->name('admin.conditions.update');
            Route::post('/delete/{id}', [\App\Http\Controllers\Admin\ConditionController::class, 'destroy'])->name('admin.conditions.delete');
        });
    });

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Routes (Admin Prefixed)
Route::prefix('admin')->group(function () {
    require __DIR__ . '/auth.php';
});
