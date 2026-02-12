@extends('layouts.admin-new')

@section('title', 'Manage Treatments')
@section('header_title', 'All Treatments')

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Toolbar -->
        <div class="px-6 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <!-- Add Button -->
            <div class="flex-1"></div>
            <a href="{{ route('admin.treatments.create') }}"
                class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm">
                <i class="fas fa-plus mr-2"></i> Add Treatment
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-xs uppercase font-semibold text-gray-500">
                    <tr>
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Department Head</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($treatments as $treatment)
                        <tr class="hover:bg-gray-50 transition-colors group">
                            <td class="px-6 py-4">
                                @if ($treatment->icon)
                                    <img src="{{ asset('storage/' . $treatment->icon) }}" alt="Icon"
                                        class="w-10 h-10 rounded object-cover border border-gray-200">
                                @else
                                    <span class="text-gray-400">No Icon</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $treatment->title }}
                            </td>
                            <td class="px-6 py-4">{{ $treatment->department_head ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                @if ($treatment->status)
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded bg-green-50 text-green-700 text-xs font-medium">Active</span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded bg-gray-100 text-gray-600 text-xs font-medium">Inactive</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('treatment.show', $treatment->slug ?? '#') }}" target="_blank"
                                        class="p-1.5 text-gray-500 hover:text-green-600 transition-colors" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.treatments.edit', $treatment->id) }}"
                                        class="p-1.5 text-gray-500 hover:text-blue-600 transition-colors" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.treatments.delete', $treatment->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?');" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="p-1.5 text-gray-500 hover:text-red-600 transition-colors" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-400">
                                No treatments found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
            {{ $treatments->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
