@extends('layouts.admin-new')

@section('title', 'Manage Blogs')
@section('header_title', 'All Blogs')

@section('content')
@section('content')
    <div x-data="blogIndexForm()">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Toolbar -->
            <div class="px-6 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <!-- Search -->
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Search blogs..."
                        class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all text-sm">
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                </div>

                <!-- Add Button -->
                <div class="flex gap-2">
                    <button type="button" @click="openCategoryModal()"
                        class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 text-sm font-medium rounded-lg transition-colors shadow-sm">
                        <i class="fas fa-folder-plus mr-2 text-blue-500"></i> Add Category
                    </button>
                    <button type="button" @click="openTagModal()"
                        class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 text-sm font-medium rounded-lg transition-colors shadow-sm">
                        <i class="fas fa-tags mr-2 text-purple-500"></i> Add Tag
                    </button>
                    <a href="{{ route('admin.blogs.add') }}"
                        class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm">
                        <i class="fas fa-plus mr-2"></i> Create New Blog
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-xs uppercase font-semibold text-gray-500">
                        <tr>
                            <th class="px-6 py-3">Title</th>
                            <th class="px-6 py-3">Cover</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Views</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($blogs as $blog)
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    {{ Str::limit($blog->title, 40) }}
                                    <div class="text-xs text-gray-400 font-normal mt-0.5">{{ $blog->slug }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($blog->cover_image)
                                        <img src="{{ Storage::url($blog->cover_image) }}" alt="Cover"
                                            class="w-10 h-10 rounded object-cover border border-gray-200">
                                    @else
                                        <div
                                            class="w-10 h-10 rounded bg-gray-100 flex items-center justify-center text-gray-400">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{ $blog->category->name ?? 'None' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">
                                    <i class="fas fa-eye text-xs mr-1 opacity-70"></i> {{ $blog->views }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($blog->status)
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded bg-green-50 text-green-700 text-xs font-medium">
                                            Published
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded bg-gray-100 text-gray-600 text-xs font-medium">
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                            class="p-1.5 text-gray-500 hover:text-blue-600 transition-colors"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?');" class="inline">
                                            @csrf
                                            <button type="submit"
                                                class="p-1.5 text-gray-500 hover:text-red-600 transition-colors"
                                                title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-400">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-blog text-4xl mb-3 text-gray-300"></i>
                                        <p>No blogs found.</p>
                                        <a href="{{ route('admin.blogs.add') }}"
                                            class="mt-2 text-blue-600 hover:underline">Create your first blog</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
                {{ $blogs->links('pagination::tailwind') }}
            </div>
        </div>

        <!-- ================= MODALS ================= -->

        <!-- Category Modal -->
        <div x-show="showCategoryModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showCategoryModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showCategoryModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showCategoryModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Manage Categories</h3>
                                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Add New Category</h4>
                                    <div class="flex gap-2">
                                        <input type="text" x-model="newCategoryName" placeholder="Category Name"
                                            class="flex-1 rounded-md border-gray-300 shadow-sm sm:text-sm">
                                        <button @click="createCategory()"
                                            class="bg-blue-600 text-white px-4 py-2 rounded-md sm:text-sm">Add</button>
                                    </div>
                                </div>
                                <div class="mt-4 max-h-60 overflow-y-auto">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Existing Categories</h4>
                                    <ul class="divide-y divide-gray-200">
                                        <template x-for="cat in categories" :key="cat.id">
                                            <li class="py-2 flex justify-between items-center">
                                                <span x-text="cat.name" class="text-sm text-gray-700"></span>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="showCategoryModal = false"
                            class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tag Modal -->
        <div x-show="showTagModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showTagModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showTagModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showTagModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Manage Tags</h3>
                                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Add New Tag</h4>
                                    <div class="flex gap-2">
                                        <input type="text" x-model="newTagName" placeholder="Tag Name"
                                            class="flex-1 rounded-md border-gray-300 shadow-sm sm:text-sm">
                                        <button @click="createTag()"
                                            class="bg-blue-600 text-white px-4 py-2 rounded-md sm:text-sm">Add</button>
                                    </div>
                                </div>
                                <div class="mt-4 max-h-60 overflow-y-auto">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Existing Tags</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <template x-for="tag in tags" :key="tag.id">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                <span x-text="tag.name"></span>
                                            </span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="showTagModal = false"
                            class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script>
                function blogIndexForm() {
                    return {
                        showCategoryModal: false,
                        showTagModal: false,
                        categories: {!! json_encode($categories) !!},
                        tags: {!! json_encode($tags) !!},
                        newCategoryName: '',
                        newTagName: '',

                        openCategoryModal() {
                            this.showCategoryModal = true;
                        },
                        openTagModal() {
                            this.showTagModal = true;
                        },

                        async createCategory() {
                            if (!this.newCategoryName) return;
                            try {
                                const response = await fetch('{{ route('admin.blogs.categories.store') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                            'content'),
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: this.newCategoryName,
                                        status: 1
                                    })
                                });
                                const data = await response.json();
                                if (data.success) {
                                    this.categories.push(data.category);
                                    this.newCategoryName = '';
                                    alert('Category added!');
                                }
                            } catch (error) {
                                console.error(error);
                                alert('Failed to add category');
                            }
                        },

                        async createTag() {
                            if (!this.newTagName) return;
                            try {
                                const response = await fetch('{{ route('admin.blogs.tags.store') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                            'content'),
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: this.newTagName
                                    })
                                });
                                const data = await response.json();
                                if (data.success) {
                                    this.tags.push(data.tag);
                                    this.newTagName = '';
                                    alert('Tag added!');
                                }
                            } catch (error) {
                                console.error(error);
                                alert('Failed to add tag');
                            }
                        }
                    }
                }
            </script>
        @endpush
    </div>
@endsection
