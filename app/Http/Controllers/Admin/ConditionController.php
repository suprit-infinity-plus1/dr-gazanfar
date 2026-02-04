<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions = Condition::latest()->paginate(10);
        return view('admin.conditions.index', compact('conditions'));
    }

    public function create()
    {
        return view('admin.conditions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|image|max:2048',
            'content' => 'nullable|string',
            // SEO
            'seo_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'type' => 'required|in:knee,hip',
        ]);

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;

        while (Condition::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('uploads/conditions', 'public');
        }

        Condition::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'content' => $request->content,
            'department_head' => $request->department_head,
            'seo_title' => $request->seo_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 1,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.conditions')->with('success', 'Condition created successfully!');
    }

    public function edit($id)
    {
        $condition = Condition::findOrFail($id);
        return view('admin.conditions.edit', compact('condition'));
    }

    public function update(Request $request, $id)
    {
        $condition = Condition::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|image|max:2048',
            'type' => 'required|in:knee,hip',
        ]);

        if ($request->title !== $condition->title) {
            $slug = Str::slug($request->title);
            // Unique check logic
            $originalSlug = $slug;
            $counter = 1;
            while (Condition::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $condition->slug = $slug;
        }

        if ($request->hasFile('icon')) {
            if ($condition->icon) {
                Storage::disk('public')->delete($condition->icon);
            }
            $condition->icon = $request->file('icon')->store('uploads/conditions', 'public');
        }

        $condition->update([
            'title' => $request->title,
            'content' => $request->content,
            'department_head' => $request->department_head,
            'seo_title' => $request->seo_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 1,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.conditions')->with('success', 'Condition updated successfully!');
    }

    public function destroy($id)
    {
        $condition = Condition::findOrFail($id);
        if ($condition->icon) {
            Storage::disk('public')->delete($condition->icon);
        }
        $condition->delete();

        return redirect()->route('admin.conditions')->with('success', 'Condition deleted successfully!');
    }
}
