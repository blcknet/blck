<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/logo-ico.ico') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('build/assets/app.1bd1f369.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style-mosaic.e1632fd2.css') }}">

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-inter antialiased bg-white text-slate-600" :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <div>
            <!-- Sidebar backdrop (mobile only) -->
            <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
                :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

            <!-- Sidebar -->
            <div id="sidebar"
                class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-black p-4 transition-all duration-200 ease-in-out"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
                @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

                <!-- Sidebar header -->
                <div class="mb-10 pr-3 sm:px-2">
                    <!-- Close button -->
                    <button class="lg:hidden text-slate-500 hover:text-slate-400"
                        @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                        </svg>
                    </button>
                    <!-- Logo -->
                    <a class="block py-3" href="{{ route('home.index') }}">
                        <div class="gap-x-3">
                            <p class="text-white text-center text-sm hidden 2xl:block">BLCKNet.com</p>
                        </div>
                    </a>
                </div>

                <!-- Links -->
                <div class="space-y-8">
                    <!-- Pages group -->
                    <div>
                        <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                            <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                                aria-hidden="true">•••</span>
                            <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Administración</span>
                        </h3>
                        <ul class="mt-3">

                            @can('users.index')
                                <!-- Community -->
                                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                                    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
                                        href="{{ route('users.index') }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-600"
                                                        d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                                    <path class="fill-current text-slate-400"
                                                        d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                                </svg>
                                                <span
                                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Usuarios</span>
                                            </div>
                                            <!-- Icon -->
                                            <div @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"
                                                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                        <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('users.index') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listado
                                                        de usuarios</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            @endcan




                            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                                @can('posts.index')
                                    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
                                        href="{{ route('posts.index') }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-600"
                                                        d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                                    <path class="fill-current text-slate-600" d="M1 1h22v23H1z" />
                                                    <path class="fill-current text-slate-400"
                                                        d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                                </svg>
                                                <span
                                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Posts</span>
                                            </div>
                                            <!-- Icon -->
                                            <div @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"
                                                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                @endcan

                                <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                    <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                                        @can('posts.index')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('posts.index') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listado
                                                        de posts</span>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('posts.create')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('posts.create') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Crear
                                                        post</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </li>

                            <!-- Finance -->
                            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">

                                @can('categories.index')
                                    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
                                        href="{{ route('categories.index') }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-400"
                                                        d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                                    <path class="fill-current text-slate-700"
                                                        d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                                    <path class="fill-current text-slate-600"
                                                        d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                                                </svg>
                                                <span
                                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">categorías</span>
                                            </div>
                                            <!-- Icon -->
                                            <div @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"
                                                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                @endcan
                                <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                    <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                                        @can('categories.index')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('categories.index') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listado
                                                        de categorías</span>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('categories.create')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('categories.create') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Crear
                                                        categoría</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </li>

                            <!-- Settings -->
                            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                                @can('tags.index')
                                    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
                                        href="{{ route('tags.index') }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-600"
                                                        d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z" />
                                                    <path class="fill-current text-slate-400"
                                                        d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z" />
                                                    <path class="fill-current text-slate-600"
                                                        d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z" />
                                                    <path class="fill-current text-slate-400"
                                                        d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z" />
                                                </svg>
                                                <span
                                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Etiquetas</span>
                                            </div>
                                            <!-- Icon -->
                                            <div @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"
                                                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                @endcan
                                <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                    <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                                        @can('tags.index')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('tags.index') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listado
                                                        de etiquetas</span>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('categories.create')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('tags.create') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Crear
                                                        etiqueta</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </li>

                            <!-- Finance -->
                            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                                @can('roles.index')
                                    <a class="block text-slate-200 hover:text-white truncate transition duration-150"
                                        href="{{ route('roles.index') }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                                    <path class="fill-current text-slate-400"
                                                        d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                                    <path class="fill-current text-slate-700"
                                                        d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                                    <path class="fill-current text-slate-600"
                                                        d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                                                </svg>
                                                <span
                                                    class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Roles</span>
                                            </div>
                                            <!-- Icon -->
                                            <div @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"
                                                class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                                    :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                @endcan
                                <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                    <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                                        @can('roles.index')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('roles.index') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listado
                                                        de roles</span>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('roles.create')
                                            <li class="mb-1 last:mb-0">
                                                <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate"
                                                    href="{{ route('roles.create') }}">
                                                    <span
                                                        class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Crear
                                                        rol</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">

            <!-- Site header -->
            <header class="sticky top-0 bg-white border-b border-slate-300 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 -mb-px">

                        <!-- Header: Left side -->
                        <div class="flex">
                            <!-- Hamburger button -->
                            <button class="text-slate-500 hover:text-slate-600 lg:hidden"
                                @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
                                :aria-expanded="sidebarOpen">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2" />
                                    <rect x="4" y="11" width="16" height="2" />
                                    <rect x="4" y="17" width="16" height="2" />
                                </svg>
                            </button>

                        </div>

                        <!-- Header: Right side -->
                        <div class="flex items-center space-x-3">


                            <!-- Divider -->
                            <hr class="w-px h-6 bg-slate-200" />

                            <!-- User button -->
                            <div class="relative inline-flex" x-data="{ open: false }">
                                <button class="inline-flex justify-center items-center group" aria-haspopup="true"
                                    @click.prevent="open = !open" :aria-expanded="open">
                                    <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                        width="32" height="32" alt="{{ auth()->user()->name }}" />
                                    <div class="flex items-center truncate">
                                        <span
                                            class="truncate ml-2 text-sm font-medium group-hover:text-slate-800">{{ auth()->user()->name }}</span>
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400"
                                            viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </button>
                                <div class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                    @click.outside="open = false" @keydown.escape.window="open = false"
                                    x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 -translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-out duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
                                    <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-slate-200">
                                        <div class="font-medium text-slate-800">BLCKNet</div>
                                        <div class="text-xs text-slate-500 italic">Administración</div>
                                    </div>
                                    <ul>
                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-jet-dropdown-link>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-responsive-nav-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </header>

            <main>
                {{ $slot }}
            </main>

        </div>

    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script src="{{ asset('build/assets/app.ab93cf8a.js') }}"></script>

    @stack('modals')

    @stack('scripts')

    @livewireScripts

</body>

</html>
