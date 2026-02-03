@extends('layouts.admin-new')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stat Card 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group">
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Blogs</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $blogsCount }}</h3>
                </div>
                <div
                    class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-blog text-xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.blogs') }}"
                    class="text-sm text-blue-600 font-medium hover:text-blue-800 flex items-center gap-1">
                    Manage Blogs <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group">
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Categories</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $categoriesCount }}</h3>
                </div>
                <div
                    class="w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-green-600 group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-folder text-xl"></i>
                </div>
            </div>
            <div class="mt-4">
                {{-- Link would trigger modal in future, just counting for now --}}
                <span class="text-sm text-gray-400 font-medium">
                    Active Categories
                </span>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group">
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Tags</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $tagsCount }}</h3>
                </div>
                <div
                    class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-tags text-xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-sm text-gray-400 font-medium">
                    Active Tags
                </span>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Recent Blogs</h3>
            <a href="{{ route('admin.blogs') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-xs uppercase font-semibold text-gray-500">
                    <tr>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Category</th>
                        <th class="px-6 py-3">Author</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recentBlogs as $blog)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ Str::limit($blog->title, 40) }}</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $blog->category->name ?? 'Uncategorized' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">{{ $blog->author }}</td>
                            <td class="px-6 py-4">
                                @if ($blog->status)
                                    <span class="text-green-600 font-medium flex items-center gap-1"><i
                                            class="fas fa-check-circle text-xs"></i> Published</span>
                                @else
                                    <span class="text-gray-500 font-medium flex items-center gap-1"><i
                                            class="fas fa-circle text-xs"></i> Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">{{ $blog->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-400">
                                No blogs found. Start by creating one!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
