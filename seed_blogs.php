<?php

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

// 1. Get or Create Category
$category = BlogCategory::firstOrCreate(
    ['name' => 'cat1'],
    ['slug' => 'cat1', 'status' => 1]
);

echo "Using Category: " . $category->name . " (ID: " . $category->id . ")\n";

// 2. Get existing image
$image = null;
$existing = Blog::whereNotNull('cover_image')->where('cover_image', '!=', '')->first();
if ($existing) {
    $image = $existing->cover_image;
}
// Fallback if no blogs exist (unlikely given the request, but safe)
if (!$image) {
    $image = 'uploads/blogs/placeholder.jpg';
}

echo "Using Image: " . $image . "\n";

// 3. Create Blogs 6 to 15
for ($i = 6; $i <= 15; $i++) {
    $title = "blog $i";
    $slug = Str::slug($title);

    if (Blog::where('slug', $slug)->exists()) {
        echo "Skipping $title (already exists)\n";
        continue;
    }

    $blog = Blog::create([
        'title' => $title,
        'seo_title' => $title,
        'slug' => $slug,
        'content' => "<p>blog $i desc</p>",
        'cover_image' => $image,
        'cover_image_alt' => $title,
        'status' => 1,
        'published_at' => now(),
        'author' => 'Admin',
        'meta_description' => "Description for $title",
        'meta_keywords' => "blog, $title",
    ]);

    // Attach category
    $blog->categories()->sync([$category->id]);

    echo "Created: $title\n";
}
