<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = Treatment::latest()->paginate(10);
        return view('admin.treatments.index', compact('treatments'));
    }

    public function create()
    {
        return view('admin.treatments.create');
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
        ]);

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;

        while (Treatment::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $iconPath = null;
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('uploads/treatments', 'public');
        }

        Treatment::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'content' => $request->content,
            'department_head' => $request->department_head,
            'seo_title' => $request->seo_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('admin.treatments')->with('success', 'Treatment created successfully!');
    }

    public function edit($id)
    {
        $treatment = Treatment::findOrFail($id);
        return view('admin.treatments.edit', compact('treatment'));
    }

    public function update(Request $request, $id)
    {
        $treatment = Treatment::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|image|max:2048',
        ]);

        if ($request->title !== $treatment->title) {
            $slug = Str::slug($request->title);
            // Unique check logic similar to store...
            $originalSlug = $slug;
            $counter = 1;
            while (Treatment::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $treatment->slug = $slug;
        }

        if ($request->hasFile('icon')) {
            if ($treatment->icon) {
                Storage::disk('public')->delete($treatment->icon);
            }
            $treatment->icon = $request->file('icon')->store('uploads/treatments', 'public');
        }

        $treatment->update([
            'title' => $request->title,
            'content' => $request->content,
            'department_head' => $request->department_head,
            'seo_title' => $request->seo_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('admin.treatments')->with('success', 'Treatment updated successfully!');
    }

    public function destroy($id)
    {
        $treatment = Treatment::findOrFail($id);
        if ($treatment->icon) {
            Storage::disk('public')->delete($treatment->icon);
        }
        $treatment->delete();

        return redirect()->route('admin.treatments')->with('success', 'Treatment deleted successfully!');
    }
}
