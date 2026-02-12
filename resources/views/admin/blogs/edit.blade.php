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
                            <!-- Existing Fields -->
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
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Schema Markup (JSON-LD)</label>
                                <textarea name="schema" rows="5"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm font-mono text-xs">{{ old('schema', $blog->schema) }}</textarea>
                            </div>


                        </div>
                    </div>

                </div>


                <!-- Right Column -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Status & Image -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Other Details</h3>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select name="status"
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                                <option value="1" {{ old('status', $blog->status) == '1' ? 'selected' : '' }}>
                                    Published
                                </option>
                                <option value="0" {{ old('status', $blog->status) == '0' ? 'selected' : '' }}>
                                    Draft
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Cover Image</label>
                            <div class="flex items-start gap-4 mb-2">
                                @if ($blog->cover_image)
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">Current</p>
                                        <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="Current Cover"
                                            class="w-16 h-16 rounded object-cover border border-gray-200">
                                    </div>
                                @endif

                                <!-- New Image Preview -->
                                <div x-show="imagePreview">
                                    <p class="text-xs text-blue-500 mb-1">New Selection</p>
                                    <img :src="imagePreview"
                                        class="w-16 h-16 rounded object-cover border border-blue-200">
                                </div>
                            </div>
                            <input type="file" name="cover_image" accept="image/*" @change="fileChosen"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">

                            <div class="mt-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Cover Image Alt Text</label>
                                <input type="text" name="cover_image_alt"
                                    value="{{ old('cover_image_alt', $blog->cover_image_alt) }}"
                                    class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                    placeholder="Describe the image">
                            </div>
                        </div>
                    </div>

                    <!-- Organization -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Category & Tags</h3>

                        <!-- Category -->
                        <div class="mb-6">
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-sm font-medium text-gray-700">Category <span
                                        class="text-red-500">*</span></label>
                                <button type="button" @click="openCategoryModal()"
                                    class="text-xs text-blue-600 hover:underline">Manage Categories</button>
                            </div>
                            <select name="categories[]" id="categoriesSelect" multiple required
                                class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                style="min-height: 120px;">
                                <template x-for="cat in categories" :key="cat.id">
                                    <option :value="cat.id" x-text="cat.name"
                                        :selected="selectedCategories.includes(cat.id)">
                                    </option>
                                </template>
                            </select>
                        </div>

                        <!-- Tags -->
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-sm font-medium text-gray-700">Tags</label>
                                <button type="button" @click="openTagModal()"
                                    class="text-xs text-blue-600 hover:underline">Manage
                                    Tags</button>
                            </div>
                            <select name="tags[]" id="tagsSelect" multiple
                                class="w-full rounded-lg border-gray-300 shadow-sm">
                                <template x-for="tag in tags" :key="tag.id">
                                    <option :value="tag.id" x-text="tag.name"
                                        :selected="selectedTags.includes(tag.id)">
                                    </option>
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
        <!-- Category Modal -->
        <template x-if="showCategoryModal">
            <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                aria-modal="true" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
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
                    selectedCategories: {!! json_encode($blog->categories->pluck('id')) !!},
                    selectedTags: {!! json_encode($blog->tags->pluck('id')) !!},
                    imagePreview: null,

                    // State
                    newCategoryName: '',
                    editingCategory: null,
                    newTagName: '',
                    editingTag: null,

                    init() {
                        // Ensure IDs are integers for strict comparison
                        this.selectedCategories = this.selectedCategories.map(id => parseInt(id));
                        this.selectedTags = this.selectedTags.map(id => parseInt(id));

                        // Init Select2 for categories
                        this.$nextTick(() => {
                            $('#categoriesSelect').select2({
                                placeholder: "Select Categories",
                                width: '100%'
                            }).val(this.selectedCategories).trigger('change');
                        });

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
                        this.cancelCategoryEdit();
                    },
                    openTagModal() {
                        this.showTagModal = true;
                        this.cancelTagEdit();
                    },

                    fileChosen(event) {
                        this.fileToDataUrl(event, src => this.imagePreview = src)
                    },

                    fileToDataUrl(event, callback) {
                        if (!event.target.files.length) return

                        let file = event.target.files[0],
                            reader = new FileReader()

                        reader.readAsDataURL(file)
                        reader.onload = e => callback(e.target.result)
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
                                // Auto-select new category
                                let newOption = new Option(data.category.name, data.category.id, true, true);
                                $('#categoriesSelect').append(newOption).trigger('change');
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
                                // Remove from categories array
                                this.categories = this.categories.filter(c => c.id !== id);

                                // Remove option from Select2
                                $(`#categoriesSelect option[value="${id}"]`).remove();
                                $('#categoriesSelect').trigger('change');

                                // If we were editing this specific category, close edit mode
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
                                let newOption = new Option(data.tag.name, data.tag.id, true, true);
                                $('#tagsSelect').append(newOption).trigger('change');
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
                                // Remove from tags array
                                this.tags = this.tags.filter(t => t.id !== id);

                                // Remove option from Select2
                                $(`#tagsSelect option[value="${id}"]`).remove();
                                $('#tagsSelect').trigger('change');

                                // If we were editing this specific tag, close edit mode
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
@endsection
