@extends('layouts.admin-new')

@section('title', 'Create Blog')
@section('header_title', 'Create New Blog')

@section('content')
    <div x-data="blogForm()">

        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column: Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Basic Info Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Blog Details</h3>

                        <!-- Title -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Blog Title <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title') }}" required
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                placeholder="Enter blog title">
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content (Summernote) -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Content <span
                                    class="text-red-500">*</span></label>
                            <textarea name="content" class="summernote" required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- SEO Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">SEO Configuration</h3>

                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">SEO Title</label>
                                <input type="text" name="seo_title" value="{{ old('seo_title') }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                                <textarea name="meta_description" rows="3"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">{{ old('meta_description') }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                    placeholder="keyword1, keyword2, keyword3">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Canonical URL</label>
                                <input type="url" name="canonical_url" value="{{ old('canonical_url') }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Settings & Organization -->
                <div class="lg:col-span-1 space-y-6">

                    <!-- Status & Image -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Publish</h3>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select name="status"
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Cover Image <span
                                    class="text-red-500">*</span></label>
                            <input type="file" name="cover_image" accept="image/*" required
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            @error('cover_image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Organization -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Organization</h3>

                        <!-- Category -->
                        <div class="mb-6">
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-sm font-medium text-gray-700">Category <span
                                        class="text-red-500">*</span></label>
                                <button type="button" @click="openCategoryModal()"
                                    class="text-xs text-blue-600 hover:underline">Manage Categories</button>
                            </div>
                            <select name="category_id" x-model="selectedCategory" required
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                                <option value="">Select Category</option>
                                <template x-for="cat in categories" :key="cat.id">
                                    <option :value="cat.id" x-text="cat.name"></option>
                                </template>
                            </select>
                            @error('category_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tags -->
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-sm font-medium text-gray-700">Tags</label>
                                <button type="button" @click="openTagModal()"
                                    class="text-xs text-blue-600 hover:underline">Manage Tags</button>
                            </div>
                            <select name="tags[]" id="tagsSelect" multiple
                                class="w-full rounded-lg border-gray-300 shadow-sm">
                                <template x-for="tag in tags" :key="tag.id">
                                    <option :value="tag.id" x-text="tag.name"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end pt-4">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg shadow transition-colors transform active:scale-95">
                            <i class="fas fa-save mr-2"></i> Save Blog
                        </button>
                    </div>
                </div>
            </div>
        </form>


        <!-- ================= MODALS ================= -->

        <!-- Category Modal -->
        <div x-show="showCategoryModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div x-show="showCategoryModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showCategoryModal = false"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!-- Modal Panel -->
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
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Manage Categories
                                </h3>

                                <!-- Add New Form -->
                                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Add New Category</h4>
                                    <div class="flex gap-2">
                                        <input type="text" x-model="newCategoryName" placeholder="Category Name"
                                            class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        <button @click="createCategory()"
                                            class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:text-sm">
                                            Add
                                        </button>
                                    </div>
                                </div>

                                <!-- List -->
                                <div class="mt-4 max-h-60 overflow-y-auto">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Existing Categories</h4>
                                    <ul class="divide-y divide-gray-200">
                                        <template x-for="cat in categories" :key="cat.id">
                                            <li class="py-2 flex justify-between items-center">
                                                <span x-text="cat.name" class="text-sm text-gray-700"></span>
                                                <button class="text-red-500 hover:text-red-700 text-xs" disabled
                                                    title="Deletion via modal disabled for safety">
                                                    <!-- Deletion logic can be complex via AJAX, keeping it view-only + add for now -->
                                                </button>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" @click="showCategoryModal = false"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tag Modal -->
        <div x-show="showTagModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showTagModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showTagModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showTagModal"
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Manage Tags</h3>

                                <!-- Add Form -->
                                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Add New Tag</h4>
                                    <div class="flex gap-2">
                                        <input type="text" x-model="newTagName" placeholder="Tag Name"
                                            class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        <button @click="createTag()"
                                            class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:text-sm">
                                            Add
                                        </button>
                                    </div>
                                </div>

                                <!-- List -->
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
                        <button type="button" @click="showTagModal = false"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @push('scripts')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            function blogForm() {
                return {
                    showCategoryModal: false,
                    showTagModal: false,
                    categories: {!! json_encode($categories) !!},
                    tags: {!! json_encode($tags) !!},
                    selectedCategory: '{{ old('category_id') }}',
                    newCategoryName: '',
                    newTagName: '',

                    init() {
                        // Init Select2 for tags
                        this.$nextTick(() => {
                            $('#tagsSelect').select2({
                                placeholder: "Select Tags",
                                width: '100%'
                            });
                        });
                    },

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
                                this.categories.push(data.category); // Add to local list
                                this.newCategoryName = '';
                                this.selectedCategory = data.category.id; // Auto select
                            }
                        } catch (error) {
                            console.error('Error:', error);
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
                                this.tags.push(data.tag); // Add to local list
                                this.newTagName = '';

                                // Update Select2 options
                                let newOption = new Option(data.tag.name, data.tag.id, true, true);
                                $('#tagsSelect').append(newOption).trigger('change');
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            alert('Failed to add tag');
                        }
                    }
                }
            }
        </script>
    @endpush
@endsection
