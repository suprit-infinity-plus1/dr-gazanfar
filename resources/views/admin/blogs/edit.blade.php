@extends('layouts.admin-new')

@section('title', 'Edit Blog')
@section('header_title', 'Edit Blog')

@section('content')
    <div x-data="blogForm()">

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column: Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Basic Info -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Blog Details</h3>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Blog Title <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $blog->title) }}" required
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Content <span
                                    class="text-red-500">*</span></label>
                            <textarea name="content" class="summernote" required>{{ old('content', $blog->content) }}</textarea>
                        </div>
                    </div>

                    <!-- SEO -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">SEO Configuration</h3>

                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">SEO Title</label>
                                <input type="text" name="seo_title" value="{{ old('seo_title', $blog->seo_title) }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                                <textarea name="meta_description" rows="3"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">{{ old('meta_description', $blog->meta_description) }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Meta Keywords</label>
                                <input type="text" name="meta_keywords"
                                    value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Canonical URL</label>
                                <input type="url" name="canonical_url"
                                    value="{{ old('canonical_url', $blog->canonical_url) }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Status & Image -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Publish</h3>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select name="status"
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                                <option value="1" {{ old('status', $blog->status) == '1' ? 'selected' : '' }}>Published
                                </option>
                                <option value="0" {{ old('status', $blog->status) == '0' ? 'selected' : '' }}>Draft
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Cover Image</label>
                            <div class="flex items-center gap-4 mb-2">
                                @if ($blog->cover_image)
                                    <img src="{{ Storage::url($blog->cover_image) }}" alt="Current Cover"
                                        class="w-16 h-16 rounded object-cover border border-gray-200">
                                @endif
                            </div>
                            <input type="file" name="cover_image" accept="image/*"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
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
                                    <option :value="cat.id" x-text="cat.name" :selected="cat.id == selectedCategory">
                                    </option>
                                </template>
                            </select>
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
                                    <option :value="tag.id" x-text="tag.name"
                                        :selected="selectedTags.includes(tag.id)"></option>
                                </template>
                            </select>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end pt-4">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg shadow transition-colors block text-center">
                            <i class="fas fa-save mr-2"></i> Update Blog
                        </button>
                    </div>
                </div>
            </div>
        </form>


        <!-- Modals (Reused from Create View - ideally component, but copying logic for speed) -->
        <!-- Category Modal -->
        <div x-show="showCategoryModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="showCategoryModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showCategoryModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showCategoryModal"
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
                <div x-show="showTagModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="showTagModal = false"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showTagModal"
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
                    selectedCategory: '{{ old('category_id', $blog->category_id) }}',
                    selectedTags: {!! json_encode($blog->tags->pluck('id')) !!},
                    newCategoryName: '',
                    newTagName: '',

                    init() {
                        // Init Select2 for tags
                        this.$nextTick(() => {
                            $('#tagsSelect').select2({
                                placeholder: "Select Tags",
                                width: '100%'
                            }).val(this.selectedTags).trigger('change');
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
                                this.categories.push(data.category);
                                this.newCategoryName = '';
                                this.selectedCategory = data.category.id;
                            }
                        } catch (error) {
                            console.error(error);
                            alert('Failed');
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
                                let newOption = new Option(data.tag.name, data.tag.id, true, true);
                                $('#tagsSelect').append(newOption).trigger('change');
                            }
                        } catch (error) {
                            console.error(error);
                            alert('Failed');
                        }
                    }
                }
            }
        </script>
    @endpush
@endsection
