@extends('layouts.admin-new')

@section('title', 'Manage Blogs')
@section('header_title', 'All Blogs')

@section('content')
    <div x-data="blogIndexForm()">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Toolbar -->
            <div class="px-6 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <!-- Search -->
                <form action="{{ route('admin.blogs') }}" method="GET" class="flex gap-2 w-full sm:w-auto">
                    <div class="relative w-full sm:w-64">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search blogs..."
                            class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all text-sm">
                        <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                    </div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm">
                        Search
                    </button>
                </form>

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
                            <th class="px-6 py-3">Cover</th>
                            <th class="px-6 py-3">
                                <a href="{{ route('admin.blogs', ['sort' => 'title', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}"
                                    class="flex items-center gap-1 hover:text-gray-700">
                                    Title
                                    <i class="fas fa-sort text-gray-300"></i>
                                </a>
                            </th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Views</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($blogs as $blog)
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4">
                                    @if ($blog->cover_image)
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="Cover"
                                            class="w-10 h-10 rounded object-cover border border-gray-200">
                                    @else
                                        <div
                                            class="w-10 h-10 rounded bg-gray-100 flex items-center justify-center text-gray-400">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    {{ Str::limit($blog->title, 40) }}
                                    <div class="text-xs text-gray-400 font-normal mt-0.5">{{ $blog->slug }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach ($blog->categories as $category)
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                {{ $category->name }}
                                            </span>
                                        @endforeach

                                    </div>
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
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('blog.show', $blog->slug) }}" target="_blank"
                                            class="p-1.5 text-gray-500 hover:text-green-600 transition-colors"
                                            title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
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
                {{ $blogs->links('pagination.admin-simple') }}
            </div>
        </div>

        <!-- ================= MODALS ================= -->

        <!-- Category Modal -->
        <template x-if="showCategoryModal">
            <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                        @click="showCategoryModal = false"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Manage Categories</h3>

                                    <!-- Add/Edit Form -->
                                    <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2"
                                            x-text="editingCategory ? 'Edit Category' : 'Add New Category'"></h4>
                                        <div class="flex gap-2">
                                            <input type="text" x-model="newCategoryName" placeholder="Category Name"
                                                class="flex-1 min-w-0 rounded-md border-gray-300 shadow-sm sm:text-sm"
                                                @keydown.enter="editingCategory ? updateCategory() : createCategory()">

                                            <!-- Add Button -->
                                            <button x-show="!editingCategory" @click="createCategory()"
                                                class="shrink-0 bg-blue-600 text-white px-4 py-2 rounded-md sm:text-sm hover:bg-blue-700 transition-colors">
                                                Add
                                            </button>

                                            <!-- Update Button -->
                                            <button x-show="editingCategory" @click="updateCategory()"
                                                style="background-color: #059669;"
                                                class="shrink-0 bg-green-600 text-white px-4 py-2 rounded-md sm:text-sm hover:bg-green-700 transition-colors">
                                                Update
                                            </button>

                                            <!-- Cancel Button -->
                                            <button x-show="editingCategory" @click="cancelCategoryEdit()"
                                                class="shrink-0 bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-md sm:text-sm hover:bg-gray-50 transition-colors">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                    <!-- List -->
                                    <div class="mt-4 max-h-60 overflow-y-auto">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Existing Categories</h4>
                                        <ul class="divide-y divide-gray-200">
                                            <template x-for="cat in categories" :key="cat.id">
                                                <li class="py-2 flex justify-between items-center group">
                                                    <span x-text="cat.name" class="text-sm text-gray-700"></span>
                                                    <div class="flex gap-2">
                                                        <button @click="editCategory(cat)"
                                                            class="text-blue-500 hover:text-blue-700 text-xs font-medium">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button @click="deleteCategory(cat.id)"
                                                            class="text-red-500 hover:text-red-700 text-xs font-medium ml-2">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
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
        </template>

        <!-- Tag Modal -->
        <template x-if="showTagModal">
            <div class="fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="showTagModal = false">
                    </div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Manage Tags</h3>

                                    <!-- Add/Edit Form -->
                                    <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2"
                                            x-text="editingTag ? 'Edit Tag' : 'Add New Tag'"></h4>
                                        <div class="flex gap-2">
                                            <input type="text" x-model="newTagName" placeholder="Tag Name"
                                                class="flex-1 min-w-0 rounded-md border-gray-300 shadow-sm sm:text-sm"
                                                @keydown.enter="editingTag ? updateTag() : createTag()">

                                            <!-- Add Button -->
                                            <button x-show="!editingTag" @click="createTag()"
                                                class="shrink-0 bg-blue-600 text-white px-4 py-2 rounded-md sm:text-sm hover:bg-blue-700 transition-colors">
                                                Add
                                            </button>

                                            <!-- Update Button -->
                                            <button x-show="editingTag" @click="updateTag()"
                                                style="background-color: #059669;"
                                                class="shrink-0 bg-green-600 text-white px-4 py-2 rounded-md sm:text-sm hover:bg-green-700 transition-colors">
                                                Update
                                            </button>

                                            <!-- Cancel Button -->
                                            <button x-show="editingTag" @click="cancelTagEdit()"
                                                class="shrink-0 bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-md sm:text-sm hover:bg-gray-50 transition-colors">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                    <!-- List -->
                                    <div class="mt-4 max-h-60 overflow-y-auto">
                                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Existing Tags</h4>
                                        <div class="flex flex-col gap-2">
                                            <template x-for="tag in tags" :key="tag.id">
                                                <div
                                                    class="flex justify-between items-center bg-gray-50 px-3 py-2 rounded">
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                        <span x-text="tag.name"></span>
                                                    </span>
                                                    <div class="flex gap-2">
                                                        <button @click="editTag(tag)"
                                                            class="text-blue-500 hover:text-blue-700 text-xs font-medium">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button @click="deleteTag(tag.id)"
                                                            class="text-red-500 hover:text-red-700 text-xs font-medium ml-2">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                </div>
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
        </template>

        @push('scripts')
            <script>
                function blogIndexForm() {
                    return {
                        showCategoryModal: false,
                        showTagModal: false,
                        categories: {!! json_encode($categories) !!},
                        tags: {!! json_encode($tags) !!},

                        // State
                        newCategoryName: '',
                        editingCategory: null,
                        newTagName: '',
                        editingTag: null,

                        openCategoryModal() {
                            this.showCategoryModal = true;
                            this.cancelCategoryEdit();
                        },
                        openTagModal() {
                            this.showTagModal = true;
                            this.cancelTagEdit();
                        },

                        // ================= CATEGORY LOGIC =================

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

                        editCategory(category) {
                            this.editingCategory = category;
                            this.newCategoryName = category.name;
                        },

                        cancelCategoryEdit() {
                            this.editingCategory = null;
                            this.newCategoryName = '';
                        },

                        async updateCategory() {
                            if (!this.editingCategory || !this.newCategoryName) return;

                            try {
                                const url = `{{ url('admin/dashboard/blogs/categories/update') }}/${this.editingCategory.id}`;
                                const response = await fetch(url, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                            'content'),
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: this.newCategoryName,
                                        status: this.editingCategory.status ?? 1
                                    })
                                });

                                if (response.ok) {
                                    const index = this.categories.findIndex(c => c.id === this.editingCategory.id);
                                    if (index !== -1) {
                                        this.categories[index].name = this.newCategoryName;
                                    }
                                    this.cancelCategoryEdit();
                                } else {
                                    alert('Failed to update category');
                                }
                            } catch (error) {
                                console.error('Error:', error);
                                alert('Failed to update category');
                            }
                        },

                        async deleteCategory(id) {
                            if (!confirm('Are you sure you want to delete this category?')) return;

                            try {
                                const url = `{{ url('admin/dashboard/blogs/categories/delete') }}/${id}`;
                                const response = await fetch(url, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                            .getAttribute('content'),
                                        'Accept': 'application/json'
                                    }
                                });

                                if (response.ok) {
                                    this.categories = this.categories.filter(c => c.id !== id);
                                    if (this.editingCategory && this.editingCategory.id === id) {
                                        this.cancelCategoryEdit();
                                    }
                                } else {
                                    alert('Failed to delete category');
                                }
                            } catch (error) {
                                console.error(error);
                                alert('An error occurred');
                            }
                        },

                        // ================= TAG LOGIC =================

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
                        },

                        editTag(tag) {
                            this.editingTag = tag;
                            this.newTagName = tag.name;
                        },

                        cancelTagEdit() {
                            this.editingTag = null;
                            this.newTagName = '';
                        },

                        async updateTag() {
                            if (!this.editingTag || !this.newTagName) return;

                            try {
                                const url = `{{ url('admin/dashboard/blogs/tags/update') }}/${this.editingTag.id}`;
                                const response = await fetch(url, {
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

                                if (response.ok) {
                                    const index = this.tags.findIndex(t => t.id === this.editingTag.id);
                                    if (index !== -1) {
                                        this.tags[index].name = this.newTagName;
                                    }
                                    this.cancelTagEdit();
                                } else {
                                    alert('Failed to update tag');
                                }
                            } catch (error) {
                                console.error('Error:', error);
                                alert('Failed to update tag');
                            }
                        },

                        async deleteTag(id) {
                            if (!confirm('Are you sure you want to delete this tag?')) return;

                            try {
                                const url = `{{ url('admin/dashboard/blogs/tags/delete') }}/${id}`;
                                const response = await fetch(url, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                            .getAttribute('content'),
                                        'Accept': 'application/json'
                                    }
                                });

                                if (response.ok) {
                                    this.tags = this.tags.filter(t => t.id !== id);
                                    if (this.editingTag && this.editingTag.id === id) {
                                        this.cancelTagEdit();
                                    }
                                } else {
                                    alert('Failed to delete tag');
                                }
                            } catch (error) {
                                console.error(error);
                                alert('An error occurred');
                            }
                        }
                    }
                }
            </script>
        @endpush
    </div>
@endsection
