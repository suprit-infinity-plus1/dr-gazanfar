<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use App\Models\BlogFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BlogController extends Controller
{
    // ==================== BLOG MANAGEMENT ====================

    /**
     * Display all blogs
     */
    public function blogs()
    {
        $blogs = Blog::with(['category', 'tags'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $categories = BlogCategory::all();
        $tags = Tag::all();

        return view('admin.blogs.index', compact('blogs', 'categories', 'tags'));
    }

    /**
     * Show create blog form
     */
    public function blogsAdd()
    {
        $categories = BlogCategory::all();
        $tags = Tag::all();

        return view('admin.blogs.create', compact('categories', 'tags'));
    }

    /**
     * Store new blog
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'cover_image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'cover_image_alt' => 'nullable|string|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'author' => 'nullable|string|max:255',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url|max:255',
            'schema' => 'nullable|string',
        ]);

        // Generate slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Handle image upload
        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('uploads/blogs', 'public');
        }

        // Set author
        $author = $request->author ?? (auth()->user()->name ?? 'Admin');

        // Set published_at if status is published
        $publishedAt = $request->status ? Carbon::now() : null;

        // Auto-generate canonical URL if not provided
        $canonicalUrl = $request->canonical_url ?? url('/blogs/' . $slug);

        // Create blog
        $blog = Blog::create([
            'title' => $request->title,
            'seo_title' => $request->seo_title,
            'slug' => $slug,
            'cover_image' => $coverImagePath,
            'cover_image_alt' => $request->cover_image_alt,
            'content' => $request->content,
            'author' => $author,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'published_at' => $publishedAt,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical_url' => $canonicalUrl,
            'schema' => $request->schema,
        ]);

        // Attach tags
        if ($request->tags) {
            $blog->tags()->attach($request->tags);
        }

        // Handle FAQs
        if ($request->has('faq')) {
            foreach ($request->faq as $faqData) {
                if (!empty($faqData['question']) && !empty($faqData['answer'])) {
                    BlogFaq::create([
                        'blog_id' => $blog->id,
                        'question' => $faqData['question'],
                        'answer' => $faqData['answer'],
                    ]);
                }
            }
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully!');
    }

    /**
     * Show edit blog form
     */
    public function blogsEdit($id)
    {
        $blog = Blog::with(['tags', 'faqs'])->findOrFail($id);
        $categories = BlogCategory::all();
        $tags = Tag::all();

        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update existing blog
     */
    public function blogsUpdate(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'cover_image_alt' => 'nullable|string|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'author' => 'nullable|string|max:255',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url|max:255',
            'schema' => 'nullable|string',
        ]);

        // Update slug if title changed
        if ($request->title !== $blog->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $counter = 1;

            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $blog->slug = $slug;
        }

        // Handle image upload
        if ($request->hasFile('cover_image')) {
            // Delete old image
            if ($blog->cover_image && Storage::disk('public')->exists($blog->cover_image)) {
                Storage::disk('public')->delete($blog->cover_image);
            }

            $blog->cover_image = $request->file('cover_image')->store('uploads/blogs', 'public');
        }

        // Update published_at if status changed to published
        if ($request->status && !$blog->published_at) {
            $blog->published_at = Carbon::now();
        }

        // Update blog
        $blog->update([
            'title' => $request->title,
            'seo_title' => $request->seo_title,
            'cover_image_alt' => $request->cover_image_alt,
            'content' => $request->content,
            'author' => $request->author ?? $blog->author,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical_url' => $request->canonical_url,
            'schema' => $request->schema,
        ]);

        // Sync tags
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags);
        } else {
            $blog->tags()->detach();
        }

        // Update FAQs
        $blog->faqs()->delete();
        if ($request->has('faq')) {
            foreach ($request->faq as $faqData) {
                if (!empty($faqData['question']) && !empty($faqData['answer'])) {
                    BlogFaq::create([
                        'blog_id' => $blog->id,
                        'question' => $faqData['question'],
                        'answer' => $faqData['answer'],
                    ]);
                }
            }
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully!');
    }

    /**
     * Delete blog
     */
    public function blogsDelete($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete cover image
        if ($blog->cover_image && Storage::disk('public')->exists($blog->cover_image)) {
            Storage::disk('public')->delete($blog->cover_image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully!');
    }

    // ==================== CATEGORY MANAGEMENT ====================

    /**
     * Display all categories
     */
    public function categories()
    {
        $categories = BlogCategory::withCount('blogs')->orderBy('name')->paginate(20);

        return view('admin.blog_categories.index', compact('categories'));
    }

    /**
     * Show create category form
     */
    public function categoriesAdd()
    {
        return view('admin.blog_categories.create');
    }

    /**
     * Store new category
     */
    public function categoriesStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'status' => 'required|boolean',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $counter = 1;

        while (BlogCategory::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $category = BlogCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully!',
                'category' => $category
            ]);
        }

        return redirect()->route('admin.blogs.categories')->with('success', 'Category created successfully!');
    }

    /**
     * Show edit category form
     */
    public function categoriesEdit($id)
    {
        $category = BlogCategory::findOrFail($id);

        return view('admin.blog_categories.edit', compact('category'));
    }

    /**
     * Update category
     */
    public function categoriesUpdate(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $id,
            'status' => 'required|boolean',
        ]);

        $slug = Str::slug($request->name);

        $category->update([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blogs.categories')->with('success', 'Category updated successfully!');
    }

    /**
     * Delete category
     */
    public function categoriesDelete($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.blogs.categories')->with('success', 'Category deleted successfully!');
    }

    // ==================== TAG MANAGEMENT ====================

    /**
     * Display all tags
     */
    public function tags()
    {
        $tags = Tag::withCount('blogs')->orderBy('name')->paginate(20);

        return view('admin.blog_tags.index', compact('tags'));
    }

    /**
     * Show create tag form
     */
    public function tagsAdd()
    {
        return view('admin.blog_tags.create');
    }

    /**
     * Store new tag
     */
    public function tagsStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $counter = 1;

        while (Tag::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Tag created successfully!',
                'tag' => $tag
            ]);
        }

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag created successfully!');
    }

    /**
     * Show edit tag form
     */
    public function tagsEdit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('admin.blog_tags.edit', compact('tag'));
    }

    /**
     * Update tag
     */
    public function tagsUpdate(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $id,
        ]);

        $slug = Str::slug($request->name);
        $originalSlug = $slug;
        $counter = 1;

        while (Tag::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $tag->update([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag updated successfully!');
    }

    /**
     * Delete tag
     */
    public function tagsDelete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag deleted successfully!');
    }
}
