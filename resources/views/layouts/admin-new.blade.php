<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel') - Dr. Gazanfar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AlpineJS -->
    <!-- AlpineJS loaded via Vite app.js -->
</head>

<body class="bg-gray-50 font-sans antialiased text-gray-800">
    <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">

        <!-- Sidebar -->
        <aside
            class="flex-shrink-0 bg-white border-r border-gray-200 transition-all duration-300 ease-in-out flex flex-col pt-5 pb-4 overflow-y-auto z-20"
            :class="sidebarOpen ? 'w-64' : 'w-20'">

            <!-- Logo -->
            <div class="flex items-center justify-center h-16 px-4 mb-6 border-b border-gray-100 pb-4">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        DG
                    </div>
                    <span class="text-xl font-bold text-gray-900 tracking-tight" x-show="sidebarOpen">Dr.
                        Gazanfar</span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="flex-1 px-3 space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors group
                   {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                    <i
                        class="fas fa-border-all w-6 text-lg {{ request()->routeIs('dashboard') ? 'text-blue-700' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                    <span class="ml-3 transition-opacity duration-300" x-show="sidebarOpen">Dashboard</span>
                </a>

                <!-- Blogs -->
                <a href="{{ route('admin.blogs') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors group
                   {{ request()->routeIs('admin.blogs*') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                    <i
                        class="fas fa-newspaper w-6 text-lg {{ request()->routeIs('admin.blogs*') ? 'text-blue-700' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                    <span class="ml-3 transition-opacity duration-300" x-show="sidebarOpen">Blogs</span>
                </a>

                <!-- Treatments -->
                <a href="{{ route('admin.treatments') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors group
                   {{ request()->routeIs('admin.treatments*') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                    <i
                        class="fas fa-stethoscope w-6 text-lg {{ request()->routeIs('admin.treatments*') ? 'text-blue-700' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                    <span class="ml-3 transition-opacity duration-300" x-show="sidebarOpen">Treatments</span>
                </a>

                <!-- Conditions -->
                <a href="{{ route('admin.conditions') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors group
                   {{ request()->routeIs('admin.conditions*') ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                    <i
                        class="fas fa-heartbeat w-6 text-lg {{ request()->routeIs('admin.conditions*') ? 'text-blue-700' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                    <span class="ml-3 transition-opacity duration-300" x-show="sidebarOpen">Conditions</span>
                </a>
            </nav>

            <!-- User Menu (Bottom) -->
            <div class="border-t border-gray-200 p-4">
                <div class="flex items-center w-full justify-between">
                    <div class="flex items-center gap-3" x-show="sidebarOpen">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="text-sm font-medium text-gray-700 truncate w-32">
                            {{ auth()->user()->name ?? 'Admin' }}
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors"
                            title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content Wrapper -->
        <main class="flex-1 flex flex-col overflow-hidden relative">

            <!-- Top Header -->
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 z-10">
                <!-- Toggle Sidebar -->
                <button @click="sidebarOpen = !sidebarOpen"
                    class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <!-- Breadcrumbs/Title (Optional) -->
                <h1 class="text-xl font-bold text-gray-800">
                    @yield('header_title', '')
                </h1>

                <!-- Right Actions -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank"
                        class="text-sm text-gray-500 hover:text-blue-600 flex items-center gap-1">
                        <i class="fas fa-external-link-alt"></i> View Site
                    </a>
                </div>
            </header>

            <!-- Content Scroll Area -->
            <div class="flex-1 overflow-auto bg-gray-50 p-6">
                <!-- Alerts -->
                @if (session('success'))
                    <div class="mb-4 bg-green-50 border-l-4 border-green-500 p-4 rounded shadow-sm" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 bg-red-50 border-l-4 border-red-500 p-4 rounded shadow-sm" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">{{ session('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        // Init Summernote default
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Write your content here...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
    @stack('scripts')
    <!-- Dynamic Scripts -->
    @stack('scripts')
</body>

</html>
