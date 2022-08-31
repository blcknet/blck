<x-guest-layout>
    <x-slot name="head">
        <meta name="robots" content="index">
        <meta name="description"
            content="Bienvenido a nuestro blog. Aqui encontrarás información
            relevante a cerca de temas como tecnología, desarrollo web, programación y mucho más...">
    </x-slot>

    @section('title', 'BLCKNet - Blog')
    <!-- Hero -->
    <section class="relative">

        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content -z-1">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="./images/hero-bg.jpg" width="1440"
                height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-16">
                <!-- Featured article -->
                <div class="max-w-3xl" data-aos="fade-down">
                    <article>
                        <header>
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1>
                                    <h1 class="h1 font-red-hat-display mb-4">Bienvenido a nuestro blog</h1>
                                </h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400">Aquí encontraras información
                                    relevante a cerca de temas de tecnología, desarrollo web, programación y mucho
                                    más...</p>
                            </div>
                        </header>
                    </article>
                </div>

            </div>
        </div>

    </section>

    @livewire('home-post-list')
</x-guest-layout>
