<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
        integrity="sha512-ipO1yoQyZS3BeIuv2A8C5AwQChWt2Pi4KU3nUvXxc4TKr8QgG8dPexPAj2JGsJD6yelwKa4c7Y2he9TTkPM4Dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/logo-ico.ico') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/app.1bd1f369.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style.222c08bc.css') }}">
    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-inter antialiased bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 tracking-tight">

    <!-- Page wrapper -->
    <div class="flex flex-col min-h-screen overflow-hidden">

        <!-- Site header -->
        <header class="absolute w-full z-30">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="flex items-center justify-between h-20">

                    <!-- Site branding -->
                    <div class="shrink-0 mr-5">
                        <!-- Logo -->
                        <a class="block" href="{{ route('home.index') }}" aria-label="Cruip">
                            <img class="object-cover object-center h-16 w-16 rounded-full"
                                src="{{ asset('images/logo-blanco.png') }}" alt="">
                        </a>
                    </div>
                    <!-- Desktop navigation -->
                    <nav class="hidden md:flex md:grow">
                        <!-- Desktop menu links -->
                        <ul class="flex grow flex-wrap items-center font-medium">
                            <li>
                                <a class="flex text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 py-2"
                                    href="{{ route('home.services') }}">Servicios</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                                    href="{{ route('home.blog') }}">Blog</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                                    href="{{ route('home.about') }}">Nosotros</a>
                            </li>
                        </ul>
                        <!-- Desktop CTA on the right -->
                        <ul class="flex justify-end flex-wrap items-center">
                            <li>
                                <a class="btn-sm text-white bg-teal-500 hover:bg-teal-400 ml-6"
                                    href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                                    rel="nofollow" target="_blank">Contáctanos</a>
                            </li>
                        </ul>

                    </nav>

                    <!-- Mobile menu -->
                    <div class="inline-flex md:hidden" x-data="{ expanded: false }">

                        <!-- Mobile lights switch -->
                        <div class="form-switch flex flex-col justify-center mr-6 -mt-0.5">
                            <input type="checkbox" name="light-switch" id="light-switch-mobile"
                                class="light-switch sr-only" />
                            <label class="relative" for="light-switch-mobile">
                                <span
                                    class="relative bg-gradient-to-t from-gray-100 to-white dark:from-gray-800 dark:to-gray-700 shadow-sm z-10"
                                    aria-hidden="true"></span>
                                <svg class="absolute inset-0" width="44" height="24" viewBox="0 0 44 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g class="fill-current text-white" fill-rule="nonzero" opacity=".88">
                                        <path
                                            d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z" />
                                        <circle cx="32" cy="12" r="3" />
                                        <circle fill-opacity=".4" cx="12" cy="12" r="6" />
                                        <circle fill-opacity=".88" cx="12" cy="12" r="3" />
                                    </g>
                                </svg>
                                <span class="sr-only">Switch to light / dark version</span>
                            </label>
                        </div>

                        <!-- Hamburger button -->
                        <button class="hamburger" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                            aria-controls="mobile-nav" :aria-expanded="expanded">
                            <span class="sr-only">Menu</span>
                            <svg class="w-6 h-6 fill-current text-gray-900 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 transition duration-150 ease-in-out"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect y="4" width="24" height="2" rx="1" />
                                <rect y="11" width="24" height="2" rx="1" />
                                <rect y="18" width="24" height="2" rx="1" />
                            </svg>
                        </button>

                        <!-- Mobile navigation -->
                        <nav id="mobile-nav"
                            class="fixed top-0 h-screen z-20 left-0 w-full max-w-sm -ml-16 overflow-scroll bg-white dark:bg-gray-900 shadow-lg no-scrollbar"
                            @click.outside="expanded = false" @keydown.escape.window="expanded = false"
                            x-show="expanded" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-x-full"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-out duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
                            <div class="py-6 pr-4 pl-20">
                                <!-- Logo -->
                                <a class="inline-block mb-4" href="index.html" aria-label="Cruip">
                                    <svg class="w-8 h-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <linearGradient x1="26%" y1="100%" x2="100%"
                                                y2="100%" id="menulogo_a">
                                                <stop stop-color="#3ABAB4" offset="0%" />
                                                <stop stop-color="#7F9CF5" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1="26%" y1="100%" x2="100%"
                                                y2="100%" id="menulogo_b">
                                                <stop stop-color="#3ABAB4" offset="0%" />
                                                <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%" />
                                            </linearGradient>
                                        </defs>
                                        <path d="M32 16h-8a8 8 0 10-16 0H0C0 7.163 7.163 0 16 0s16 7.163 16 16z"
                                            fill="url(#menulogo_a)" />
                                        <path d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16h8a8 8 0 1016 0h8z"
                                            fill="url(#menulogo_b)" />
                                    </svg>
                                </a>
                                <!-- Links -->
                                <ul>
                                    <li>
                                        <a class="flex text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 py-2"
                                            href="{{ route('home.services') }}">Servicios</a>
                                    </li>
                                    <li>
                                        <a class="flex text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 py-2"
                                            href="{{ route('home.blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a class="flex text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100 py-2"
                                            href="{{ route('home.about') }}">Nosotros</a>
                                    </li>

                                    <li>
                                        <a class="font-medium w-full inline-flex items-center justify-center border border-transparent px-4 py-2 my-2 rounded text-white bg-teal-500 hover:bg-teal-400 transition duration-150 ease-in-out"
                                            href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                                            rel="nofollow" target="_blank">Contáctanos</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>

                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="grow">

            {{ $slot }}

        </main>

        <!-- Site footer -->
        <footer class="relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="py-12 md:py-16 border-t border-gray-200 dark:border-gray-800 -mt-px">

                    <!-- Footer illustration -->
                    <div class="pointer-events-none -z-1" aria-hidden="true">
                        <svg class="absolute bottom-0 left-0 transform -translate-x-1/2 ml-24 dark:opacity-40"
                            width="800" height="264" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="400" cy="400" r="400"
                                fill="url(#footerglow_paint0_radial)" fill-opacity=".4" />
                            <defs>
                                <radialGradient id="footerglow_paint0_radial" cx="0" cy="0"
                                    r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="rotate(90 0 400) scale(315.089)">
                                    <stop stop-color="#3ABAB4" />
                                    <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01" />
                                </radialGradient>
                            </defs>
                        </svg>
                    </div>

                    <!-- Top area: Blocks -->
                    <div class="grid md:grid-cols-12 gap-8 lg:gap-20 mb-8 md:mb-12">

                        <!-- 1st block -->
                        <div class="md:col-span-2 lg:col-span-3">
                            <!-- Logo -->
                            <a class="inline-block" href="{{ route('home.index') }}" aria-label="Cruip">
                                <img id="logo-footer" class="h-36 w-36 object-center object-cover"
                                    src="{{ asset('images/logo-blanco.png') }}" alt="Logo largo blcknet">
                            </a>
                        </div>

                        <!-- 2nd, 3rd, 4th and 5th blocks -->
                        <div class="md:col-span-10 lg:col-span-9 grid grid-cols-2 md:grid-cols-4 gap-8">

                            <!-- 2nd block -->
                            <div class="text-sm">
                                <h6 class="font-medium uppercase mb-2">Servicios</h6>
                                <ul>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.services') }}">Landing Page</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.services') }}">Sitio Informativo</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.services') }}">Tienda en Línea</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 3rd block -->
                            <div class="text-sm">
                                <h6 class="font-medium uppercase mb-2">Recursos</h6>
                                <ul>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 4th block -->
                            <div class="text-sm">
                                <h6 class="font-medium uppercase mb-2">Compañia</h6>
                                <ul>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.services') }}">Servicios</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="{{ route('home.about') }}">Nosotros</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 5th block -->
                            <div class="text-sm">
                                <h6 class="font-medium uppercase mb-2">Soporte</h6>
                                <ul>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="mailto:contacto@blcknet.com?Subject=Cotización%20Sitio%20Web"
                                            rel="nofollow">E-mail</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20tengo%20un%20problema%20en%20mi%20sitio%20web."
                                            rel="nofollow" target="_blank">WhatasApp</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                            href="https://www.facebook.com/Desarrollo-y-Dise%C3%B1o-Web-BLCKNetcom-109804044901135/"
                                            target="_blank" rel="nofollow">Facebook</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <!-- Bottom area -->
                    <div class="md:flex md:items-center md:justify-between">

                        <!-- Social links -->
                        <ul class="flex justify-center mb-4 md:order-2 md:ml-4 md:mb-0">

                            <li class="ml-4">
                                <a class="flex justify-center items-center text-white bg-teal-500 dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600 rounded-full transition duration-150 ease-in-out"
                                    href="https://www.facebook.com/Desarrollo-y-Dise%C3%B1o-Web-BLCKNetcom-109804044901135/"
                                    target="_blank" rel="nofollow" aria-label="Facebook">
                                    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        height="800" width="1200"
                                        viewBox="-204.79995 -341.33325 1774.9329 2047.9995">
                                        <path
                                            d="M1365.333 682.667C1365.333 305.64 1059.693 0 682.667 0 305.64 0 0 305.64 0 682.667c0 340.738 249.641 623.16 576 674.373V880H402.667V682.667H576v-150.4c0-171.094 101.917-265.6 257.853-265.6 74.69 0 152.814 13.333 152.814 13.333v168h-86.083c-84.804 0-111.25 52.623-111.25 106.61v128.057h189.333L948.4 880H789.333v477.04c326.359-51.213 576-333.635 576-674.373"
                                            fill="#1877f2" />
                                        <path
                                            d="M948.4 880l30.267-197.333H789.333V554.609C789.333 500.623 815.78 448 900.584 448h86.083V280s-78.124-13.333-152.814-13.333c-155.936 0-257.853 94.506-257.853 265.6v150.4H402.667V880H576v477.04a687.805 687.805 0 00106.667 8.293c36.288 0 71.91-2.84 106.666-8.293V880H948.4"
                                            fill="#fff" />
                                    </svg>
                                </a>
                            </li>
                            {{-- <li class="ml-4">
                                <a class="flex justify-center items-center text-white bg-teal-500 dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600 rounded-full transition duration-150 ease-in-out"
                                     aria-label="Instagram">

                                    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        height="800" width="1200"
                                        viewBox="-35.20005 -41.33325 305.0671 247.9995">
                                        <path
                                            d="M229.763 25.817c-2.699-10.162-10.65-18.165-20.748-20.881C190.716 0 117.333 0 117.333 0S43.951 0 25.651 4.936C15.553 7.652 7.6 15.655 4.903 25.817 0 44.236 0 82.667 0 82.667s0 38.429 4.903 56.85C7.6 149.68 15.553 157.681 25.65 160.4c18.3 4.934 91.682 4.934 91.682 4.934s73.383 0 91.682-4.934c10.098-2.718 18.049-10.72 20.748-20.882 4.904-18.421 4.904-56.85 4.904-56.85s0-38.431-4.904-56.85"
                                            fill="red" />
                                        <path d="M93.333 117.559l61.333-34.89-61.333-34.894z" fill="#fff" />
                                    </svg>
                                </a>
                            </li> --}}
                            <li class="ml-4">
                                <a class="flex justify-center items-center text-white bg-teal-500 dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600 rounded-full transition duration-150 ease-in-out"
                                    href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                                    rel="nofollow" target="_blank" aria-label="Linkedin">
                                    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" height="800" width="1200"
                                        viewBox="-93.2412 -156.2325 808.0904 937.395">
                                        <defs>
                                            <linearGradient x1=".5" y1="0" x2=".5"
                                                y2="1" id="a">
                                                <stop stop-color="#20B038" offset="0%" />
                                                <stop stop-color="#60D66A" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1=".5" y1="0" x2=".5"
                                                y2="1" id="b">
                                                <stop stop-color="#F9F9F9" offset="0%" />
                                                <stop stop-color="#FFF" offset="100%" />
                                            </linearGradient>
                                            <linearGradient xlink:href="#a" id="f" x1="270.265"
                                                y1="1.184" x2="270.265" y2="541.56"
                                                gradientTransform="scale(.99775 1.00225)"
                                                gradientUnits="userSpaceOnUse" />
                                            <linearGradient xlink:href="#b" id="g" x1="279.952"
                                                y1=".811" x2="279.952" y2="560.571"
                                                gradientTransform="scale(.99777 1.00224)"
                                                gradientUnits="userSpaceOnUse" />
                                            <filter x="-.056" y="-.062" width="1.112" height="1.11"
                                                filterUnits="objectBoundingBox" id="c">
                                                <feGaussianBlur stdDeviation="2" in="SourceGraphic" />
                                            </filter>
                                            <filter x="-.082" y="-.088" width="1.164" height="1.162"
                                                filterUnits="objectBoundingBox" id="d">
                                                <feOffset dy="-4" in="SourceAlpha"
                                                    result="shadowOffsetOuter1" />
                                                <feGaussianBlur stdDeviation="12.5" in="shadowOffsetOuter1"
                                                    result="shadowBlurOuter1" />
                                                <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out"
                                                    result="shadowBlurOuter1" />
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.21 0"
                                                    in="shadowBlurOuter1" />
                                            </filter>
                                            <path
                                                d="M576.337 707.516c-.018-49.17 12.795-97.167 37.15-139.475L574 423.48l147.548 38.792c40.652-22.23 86.423-33.944 133.002-33.962h.12c153.395 0 278.265 125.166 278.33 278.98.025 74.548-28.9 144.642-81.446 197.373C999 957.393 929.12 986.447 854.67 986.48c-153.42 0-278.272-125.146-278.333-278.964z"
                                                id="e" />
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <g transform="matrix(1 0 0 -1 -542.696 1013.504)" fill="#000"
                                                fill-rule="nonzero" filter="url(#c)">
                                                <use filter="url(#d)" xlink:href="#e" width="100%"
                                                    height="100%" />
                                                <use fill-opacity=".2" xlink:href="#e" width="100%"
                                                    height="100%" />
                                            </g>
                                            <path transform="matrix(1 0 0 -1 41.304 577.504)" fill-rule="nonzero"
                                                fill="url(#f)"
                                                d="M2.325 274.421c-.014-47.29 12.342-93.466 35.839-134.166L.077 1.187l142.314 37.316C181.6 17.133 225.745 5.856 270.673 5.84h.12c147.95 0 268.386 120.396 268.447 268.372.03 71.707-27.87 139.132-78.559 189.858-50.68 50.726-118.084 78.676-189.898 78.708-147.968 0-268.398-120.386-268.458-268.358" />
                                            <path transform="matrix(1 0 0 -1 31.637 586.837)" fill-rule="nonzero"
                                                fill="url(#g)"
                                                d="M2.407 283.847c-.018-48.996 12.784-96.824 37.117-138.983L.072.814l147.419 38.654c40.616-22.15 86.346-33.824 132.885-33.841h.12c153.26 0 278.02 124.724 278.085 277.994.026 74.286-28.874 144.132-81.374 196.678-52.507 52.544-122.326 81.494-196.711 81.528-153.285 0-278.028-124.704-278.09-277.98zm87.789-131.724l-5.503 8.74C61.555 197.653 49.34 240.17 49.36 283.828c.049 127.399 103.73 231.044 231.224 231.044 61.74-.025 119.765-24.09 163.409-67.763 43.639-43.67 67.653-101.726 67.635-163.469-.054-127.403-103.739-231.063-231.131-231.063h-.09c-41.482.022-82.162 11.159-117.642 32.214l-8.444 5.004L66.84 66.86z" />
                                            <path
                                                d="M242.63 186.78c-5.205-11.57-10.684-11.803-15.636-12.006-4.05-.173-8.687-.162-13.316-.162-4.632 0-12.161 1.74-18.527 8.693-6.37 6.953-24.322 23.761-24.322 57.947 0 34.19 24.901 67.222 28.372 71.862 3.474 4.634 48.07 77.028 118.694 104.88 58.696 23.146 70.64 18.542 83.38 17.384 12.74-1.158 41.11-16.805 46.9-33.03 5.791-16.223 5.791-30.128 4.054-33.035-1.738-2.896-6.37-4.633-13.319-8.108-6.95-3.475-41.11-20.287-47.48-22.603-6.37-2.316-11.003-3.474-15.635 3.482-4.633 6.95-17.94 22.596-21.996 27.23-4.053 4.643-8.106 5.222-15.056 1.747-6.949-3.485-29.328-10.815-55.876-34.485-20.656-18.416-34.6-41.16-38.656-48.116-4.053-6.95-.433-10.714 3.052-14.178 3.12-3.113 6.95-8.11 10.424-12.168 3.467-4.057 4.626-6.953 6.942-11.586 2.316-4.64 1.158-8.698-.579-12.172-1.737-3.475-15.241-37.838-21.42-51.576"
                                                fill="#FFF" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <!-- Middle links -->
                        <div class="text-sm md:order-1 text-gray-700 mb-2 md:mb-0 text-center">
                            <a class="text-gray-600 dark:text-gray-400 hover:underline transition duration-150 ease-in-out"
                                href="{{ route('home.privacy') }}" rel="nofollow">Politica de privacidad.</a>
                        </div>

                        <!-- Copyrights note -->
                        <div class="text-gray-600 dark:text-gray-400 text-sm text-center mr-4">&copy; BLCKNet.com.
                            Todos los
                            derechos reservados.</div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('build/assets/app.ab93cf8a.js') }}"></script>

    @stack('scripts')

    @livewireScripts

</body>

</html>
