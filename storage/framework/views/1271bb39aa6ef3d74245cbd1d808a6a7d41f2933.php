<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('head', null, []); ?> 
        <meta name="robots" content="index">
        <meta name="description"
            content="Desarrollo de aplicaciones web,sitios web a medida, landing page, tiendas en línea y mucho más. Conoce nuestros planes y precios en nuestro sitio web.">
     <?php $__env->endSlot(); ?>

    <?php $__env->startSection('title', 'BLCKNet - Inicio'); ?>
    <!-- Page illustration -->
    <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
        <svg class="absolute top-0 right-0 transform translate-x-1/2 -mr-16 dark:opacity-40" width="800" height="502"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="400" cy="102" r="400" fill="url(#heroglow_paint0_radial)"
                fill-opacity=".6" />
            <circle cx="209" cy="289" r="170" fill="url(#heroglow_paint1_radial)"
                fill-opacity=".4" />
            <defs>
                <radialGradient id="heroglow_paint0_radial" cx="0" cy="0" r="1"
                    gradientUnits="userSpaceOnUse" gradientTransform="rotate(90 149 251) scale(315.089)">
                    <stop stop-color="#3ABAB4" />
                    <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01" />
                </radialGradient>
                <radialGradient id="heroglow_paint1_radial" cx="0" cy="0" r="1"
                    gradientUnits="userSpaceOnUse" gradientTransform="rotate(90 -40 249) scale(133.913)">
                    <stop stop-color="#667EEA" />
                    <stop offset="1" stop-color="#667EEA" stop-opacity=".01" />
                </radialGradient>
            </defs>
        </svg>
    </div>
    <!-- Hero -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-10 md:pt-40 md:pb-16">

                <!-- Hero content -->
                <div class="md:grid md:grid-cols-12 md:gap-12 lg:gap-20 items-center">

                    <!-- Content -->
                    <div class="md:col-span-7 lg:col-span-7 mb-8 md:mb-0 text-center md:text-left">
                        <h1 class="h1 lg:text-6xl mb-4 font-red-hat-display font-extrabold" data-aos="fade-down">
                            Desarrollo y diseño <span
                                class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-teal-100">web.</span>
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down" data-aos-delay="150">
                            Tu sitio web con un diseño profesional y ajustado a tus necesidades, todo esto y mucho más
                            a un precio increíble.
                        </p>
                        <!-- CTA form -->
                        <!-- Success message -->
                        <!-- <p class="text-center md:text-left mt-2 opacity-75 text-sm">Thanks for subscribing!</p> -->

                        <ul class="max-w-sm sm:max-w-md mx-auto md:max-w-none text-gray-600 dark:text-gray-400 mt-8 -mb-2"
                            data-aos="fade-down" data-aos-delay="450">
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-400 mr-2 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span class="text-left">Página web adaptable a diferentes
                                    dispositivos y con un diseño agradable.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-400 mr-2 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span class="text-left">Alta seguridad para mantener tus datos confidenciales.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-400 mr-2 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span class="text-left">Excelente rendimiento y precios accesibles.</span>
                            </li>
                        </ul>

                        <div class="mt-8 flex justify-center lg:justify-start">
                            <a class="w-7/12 btn block text-center text-white bg-teal-500 hover:bg-teal-400"
                                href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                                rel="nofollow" target="_blank">Cotiza
                                aqui</a>
                        </div>
                    </div>

                    <!-- Mobile mockup -->
                    <div class="md:col-span-5 lg:col-span-5 text-center md:text-right" x-data="{ modalExpanded: false }"
                        data-aos="fade-up" data-aos-delay="450">
                        <div class="inline-flex relative justify-center items-center">
                            <!-- Glow illustration -->
                            <svg class="absolute mr-12 mt-32 pointer-events-none -z-1 dark:opacity-40"
                                aria-hidden="true" width="678" height="634" viewBox="0 0 678 634" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="240" cy="394" r="240"
                                    fill="url(#piphoneill_paint0_radial)" fill-opacity=".4" />
                                <circle cx="438" cy="240" r="240"
                                    fill="url(#piphoneill_paint1_radial)" fill-opacity=".6" />
                                <defs>
                                    <radialGradient id="piphoneill_paint0_radial" cx="0" cy="0"
                                        r="1" gradientUnits="userSpaceOnUse"
                                        gradientTransform="rotate(90 -77 317) scale(189.054)">
                                        <stop stop-color="#667EEA" />
                                        <stop offset="1" stop-color="#667EEA" stop-opacity=".01" />
                                    </radialGradient>
                                    <radialGradient id="piphoneill_paint1_radial" cx="0" cy="0"
                                        r="1" gradientUnits="userSpaceOnUse"
                                        gradientTransform="rotate(90 99 339) scale(189.054)">
                                        <stop stop-color="#9F7AEA" />
                                        <stop offset="1" stop-color="#9F7AEA" stop-opacity=".01" />
                                    </radialGradient>
                                </defs>
                            </svg>
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="<?php echo e(asset('images/desarrollo-web.jpg')); ?>" width="290"
                                height="624" style="max-width: 84.33%;" alt="desarrollo web" />
                            <!-- iPhone mockup -->
                            <img class="relative max-w-full mx-auto md:mr-0 md:max-w-none h-auto pointer-events-none"
                                src="<?php echo e(asset('images/iphone-mockup.png')); ?>" width="344" height="674"
                                alt="Bosquejo de iphone" aria-hidden="true" />
                            <!-- Play button -->
                            <a class="absolute hover:opacity-75 transition cursor-pointer duration-150 ease-in-out"
                                @click.prevent="modalExpanded = true" aria-controls="modal">
                                <img src="<?php echo e(asset('images/play-button.svg')); ?>" width="96" height="96"
                                    alt="Botón de inicio" />
                            </a>
                        </div>
                        <!-- Modal backdrop -->
                        <div class="fixed inset-0 z-50 bg-black bg-opacity-75 transition-opacity"
                            x-show="modalExpanded" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-out duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            aria-hidden="true" x-cloak></div>
                        <!-- Modal dialog -->
                        <div id="modal"
                            class="fixed inset-0 z-50 overflow-hidden flex items-center justify-center transform px-4 sm:px-6"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="modalExpanded"
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-8" x-cloak>
                            <div class="bg-white overflow-auto max-w-6xl w-full max-h-full"
                                @click.outside="modalExpanded = false" @keydown.escape.window="modalExpanded = false">
                                <div class="relative pb-9/16">
                                    <iframe class="absolute w-full h-full"
                                        src="https://www.youtube.com/embed/cnfb6fEme3s" title="BLCKNet presentación"
                                        webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats -->
    <section class="relative">
        <!-- Background gradient (light version only) -->
        <div class="absolute bottom-0 left-0 right-0 h-128 bg-gradient-to-t from-gray-100 to-white pointer-events-none -z-10 dark:hidden"
            aria-hidden="true"></div>
        <!-- End background gradient (light version only) -->
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="grid grid-cols-2 gap-4 lg:gap-6 md:grid-cols-4 text-center" data-aos-id-stats>
                    <!-- 1st item -->
                    <div class="bg-white dark:bg-gray-800 py-8 px-1 shadow-2xl" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]">
                        <div class="font-red-hat-display text-3xl font-extrabold tracking-tighter mb-1">100%
                        </div>
                        <div class="text-gray-600 dark:text-gray-400">Diseño adaptable.</div>
                    </div>
                    <!-- 2nd item -->
                    <div class="bg-white dark:bg-gray-800 py-8 px-1 shadow-2xl" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="100">
                        <div class="font-red-hat-display text-3xl font-extrabold tracking-tighter mb-1">100%
                        </div>
                        <div class="text-gray-600 dark:text-gray-400">Seguro.</div>
                    </div>
                    <!-- 3rd item -->
                    <div class="bg-white dark:bg-gray-800 py-8 px-1 shadow-2xl" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="200">
                        <div class="font-red-hat-display text-3xl font-extrabold tracking-tighter mb-1">100%
                        </div>
                        <div class="text-gray-600 dark:text-gray-400">Satisfacción.</div>
                    </div>
                    <!-- 4th item -->
                    <div class="bg-white dark:bg-gray-800 py-8 px-1 shadow-2xl" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="300">
                        <div class="font-red-hat-display text-3xl font-extrabold tracking-tighter mb-1">100%
                        </div>
                        <div class="text-gray-600 dark:text-gray-400">Confiable.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel -->
    <section class="border-t border-transparent dark:border-gray-800">
        <div class="py-12 md:py-20">

            <div class="max-w-6xl mx-auto px-4 sm:px-6">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                    <h2 class="h2 font-red-hat-display mb-4">Desde diseños sencillos, hasta resultados increíbles
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Para brindar una mejor experiencia a tus
                        visitantes, nos apoyamos en tus ideas para crear resultados funcionales, versátiles y
                        asombrosos.
                    </p>
                </div>

            </div>

            <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
            <!-- * Initialized in src/js/main.js -->
            <!-- * Custom styles in src/css/additional-styles/theme.scss -->
            <div class="carousel swiper-container">
                <div class="swiper-wrapper">
                    <!-- Carousel items -->
                    <div class="swiper-slide max-w-lg">
                        <img class="transition-opacity duration-300 object-cover object-center"
                            src="<?php echo e(asset('images/cursos.jpg')); ?>" width="540" height="460"
                            alt="sitio web de cursos en línea" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">

                            <div class="absolute bottom-0 right-0 p-6">
                                <div
                                    class="text-xs font-medium text-center text-white py-2 px-3 rounded-full bg-gray-900 bg-opacity-50 hover:bg-opacity-100 transition duration-150 ease-in-out">
                                    Servicio
                                    creativo</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide max-w-lg">
                        <img class="transition-opacity duration-300" src="<?php echo e(asset('images/simple.jpg')); ?>"
                            width="540" height="460" alt="diseño web plantilla simple" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">

                            <div class="absolute bottom-0 right-0 p-6">
                                <div
                                    class="text-xs font-medium text-center text-white py-2 px-3 rounded-full bg-gray-900 bg-opacity-50 hover:bg-opacity-100 transition duration-150 ease-in-out">
                                    Servicio
                                    creativo</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide max-w-lg">
                        <img class="transition-opacity duration-300" src="<?php echo e(asset('images/appy.jpg')); ?>"
                            width="540" height="460" alt="diseño web plantilla appy" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">

                            <div class="absolute bottom-0 right-0 p-6">
                                <div
                                    class="text-xs font-medium text-center text-white py-2 px-3 rounded-full bg-gray-900 bg-opacity-50 hover:bg-opacity-100 transition duration-150 ease-in-out">
                                    Servicio
                                    creativo</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide max-w-lg">
                        <img class="transition-opacity duration-300" src="<?php echo e(asset('images/curso-inicio.jpg')); ?>"
                            width="540" height="460" alt="página principal página web de cursos" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">

                            <div class="absolute bottom-0 right-0 p-6">
                                <div
                                    class="text-xs font-medium text-center text-white py-2 px-3 rounded-full bg-gray-900 bg-opacity-50 hover:bg-opacity-100 transition duration-150 ease-in-out">
                                    Servicio
                                    creativo</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide max-w-lg">
                        <img class="transition-opacity duration-300" src="<?php echo e(asset('images/admin.png')); ?>"
                            width="540" height="460" alt="diseñó web área de administración" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">

                            <div class="absolute bottom-0 right-0 p-6">
                                <div
                                    class="text-xs font-medium text-center text-white py-2 px-3 rounded-full bg-gray-900 bg-opacity-50 hover:bg-opacity-100 transition duration-150 ease-in-out">
                                    Servicio
                                    creativo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Arrows -->
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="flex items-center justify-between mt-12 md:mt-16">
                    <button
                        class="carousel-prev relative z-20 w-12 h-12 p-1 box-content flex items-center justify-center group bg-teal-500 hover:bg-teal-400 dark:bg-gray-800 dark:hover:bg-teal-500 dark:hover:bg-opacity-25 shadow-xl transition duration-150 ease-in-out">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 fill-current text-white dark:text-gray-400 group-hover:text-white dark:group-hover:text-teal-500 transition duration-150 ease-in-out"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                        </svg>
                    </button>
                    <button
                        class="carousel-next relative z-20 w-12 h-12 p-1 box-content flex items-center justify-center group bg-teal-500 hover:bg-teal-400 dark:bg-gray-800 dark:hover:bg-teal-500 dark:hover:bg-opacity-25 shadow-xl transition duration-150 ease-in-out">
                        <span class="sr-only">Next</span>
                        <svg class="w-4 h-4 fill-current text-white dark:text-gray-400 group-hover:text-white dark:group-hover:text-teal-500 transition duration-150 ease-in-out"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>
    <!-- Tabs -->
    <section class="relative border-t border-transparent dark:border-gray-800">
        <!-- Background gradient -->
        <div class="absolute inset-0 h-128 dark:opacity-25 bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900 pointer-events-none"
            aria-hidden="true"></div>
        <!-- End background gradient -->
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                    <h2 class="h2 font-red-hat-display mb-4">Haz tus ideas realidad en poco tiempo</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Convierte tu sitio web en un espacio para
                        expresar tus ideas y darte a conocer en este mundo digital.</p>
                </div>

                <!-- Section content -->
                <div x-data="{ category: '1' }">
                    <div class="grid lg:grid-cols-3 gap-12 lg:gap-6">

                        <!-- Category buttons -->
                        <div
                            class="lg:col-span-1 lg:pr-16 flex flex-wrap justify-center lg:flex-col lg:justify-start -m-1 lg:mx-0">
                            <button
                                class="lg:w-full font-medium px-3 py-2 bg-white hover:bg-gray-50 shadow dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-150 ease-in-out rounded flex items-center justify-center lg:justify-start m-1 lg:mx-0"
                                :class="{
                                    'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category ===
                                        '1'
                                }"
                                @click="category = '1'">
                                <svg class="w-4 h-4 shrink-0 mr-2" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '1' ? 'text-teal-200 dark:text-teal-400' :
                                            'text-teal-500 dark:text-gray-400'"
                                        d="M5 16H4a4 4 0 01-4-4v-1h2v1a2 2 0 002 2h1v2zM13 10h-1.686l-1.207-1.207L14.37 4.63a2.121 2.121 0 00-3-3L7.207 5.793 5.99 4.576 5.98 3.02 3.038.079 0 3.117 3 6h1.586l1.207 1.207L4 9l3 3 1.793-1.793L10 11.414V13l3.01 3.01 2.98-2.979L13 10z" />
                                </svg>
                                <span
                                    :class="category === '1' ? 'text-white dark:text-teal-400' :
                                        'text-gray-600 dark:text-gray-300'">Tienda
                                    en línea</span>
                            </button>
                            <button
                                class="lg:w-full font-medium px-3 py-2 bg-white hover:bg-gray-50 shadow dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-150 ease-in-out rounded flex items-center justify-center lg:justify-start m-1 lg:mx-0"
                                :class="{
                                    'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category ===
                                        '2'
                                }"
                                @click="category = '2'">
                                <svg class="w-4 h-4 shrink-0 mr-2" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '2' ? 'text-teal-200 dark:text-teal-400' :
                                            'text-teal-500 dark:text-gray-400'"
                                        d="M8 3l4 4H4zM8 13L4 9h8zM1 0h14v2H1zM1 14h14v2H1z" />
                                </svg>
                                <span
                                    :class="category === '2' ? 'text-white dark:text-teal-400' :
                                        'text-gray-600 dark:text-gray-300'">Academia
                                    en línea</span>
                            </button>
                            <button
                                class="lg:w-full font-medium px-3 py-2 bg-white hover:bg-gray-50 shadow dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-150 ease-in-out rounded flex items-center justify-center lg:justify-start m-1 lg:mx-0"
                                :class="{
                                    'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category ===
                                        '3'
                                }"
                                @click="category = '3'">
                                <svg class="w-4 h-4 shrink-0 mr-2" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '3' ? 'text-teal-200 dark:text-teal-400' :
                                            'text-teal-500 dark:text-gray-400'"
                                        d="M6 0H1a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1V1a1 1 0 00-1-1zM5 5H2V2h3v3zM15 9h-5a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1v-5a1 1 0 00-1-1zm-1 5h-3v-3h3v3zM6 9H1a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1v-5a1 1 0 00-1-1zm-1 5H2v-3h3v3zM12.5 7a1 1 0 01-.707-.293l-2.5-2.5a1 1 0 010-1.414l2.5-2.5a1 1 0 011.414 0l2.5 2.5a1 1 0 010 1.414l-2.5 2.5A1 1 0 0112.5 7z" />
                                </svg>
                                <span
                                    :class="category === '3' ? 'text-white dark:text-teal-400' :
                                        'text-gray-600 dark:text-gray-300'">Blogs</span>
                            </button>
                            <button
                                class="lg:w-full font-medium px-3 py-2 bg-white hover:bg-gray-50 shadow dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-150 ease-in-out rounded flex items-center justify-center lg:justify-start m-1 lg:mx-0"
                                :class="{
                                    'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category ===
                                        '4'
                                }"
                                @click="category = '4'">
                                <svg class="w-4 h-4 shrink-0 mr-2" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '4' ? 'text-teal-200 dark:text-teal-400' :
                                            'text-teal-500 dark:text-gray-400'"
                                        d="M15.4.6c-.84-.8-2.16-.8-3 0L8.7 4.3c.73.252 1.388.68 1.916 1.244.469.515.83 1.119 1.065 1.775L15.4 3.6c.8-.84.8-2.16 0-3zM4.937 6.9c-1.2 1.2-1.4 5.7-1.4 5.7s4.4-.4 5.6-1.5a2.987 2.987 0 000-4.2 2.9 2.9 0 00-4.2 0z" />
                                </svg>
                                <span
                                    :class="category === '4' ? 'text-white dark:text-teal-400' :
                                        'text-gray-600 dark:text-gray-300'">Sitio
                                    informativo</span>
                            </button>

                        </div>

                        <!-- Images -->
                        <div class="lg:col-span-2 max-w-sm mx-auto md:max-w-3xl lg:max-w-none">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div x-show="['1'].includes(category)">
                                    <div class="relative" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/ecommerce.jpg')); ?>" width="352"
                                            height="264" alt="ecommerce" />

                                    </div>
                                </div>
                                <div x-show="['1'].includes(category)">
                                    <div class="relative flex justify-center items-center" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/ecommerce1.jpg')); ?>" width="352"
                                            height="264" alt="ecommerce" />
                                    </div>
                                </div>
                                <div x-show="['1'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/ecommerce2.jpg')); ?>"
                                            width="352" height="264" alt="ecommerce" />

                                    </div>
                                </div>
                                <div x-show="['1'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/ecommerce3.jpg')); ?>"
                                            width="352" height="264" alt="ecommerce" />

                                    </div>
                                </div>
                                <div x-show="['2'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/courses.jpg')); ?>" width="352"
                                            height="264" alt="Cursos en línea" />

                                    </div>
                                </div>
                                <div x-show="['2'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/courses2.jpg')); ?>" width="352"
                                            height="264" alt="Cursos en línea" />

                                    </div>
                                </div>
                                <div x-show="['2'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/courses3.jpg')); ?>" width="352"
                                            height="264" alt="Cursos en línea" />

                                    </div>
                                </div>
                                <div x-show="['3'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/blog.jpg')); ?>" width="352"
                                            height="264" alt="blog" />

                                    </div>
                                </div>
                                <div x-show="['3'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/blog2.jpg')); ?>" width="352"
                                            height="264" alt="blog" />

                                    </div>
                                </div>
                                <div x-show="['3'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/blog3.jpg')); ?>" width="352"
                                            height="264" alt="blog" />

                                    </div>
                                </div>
                                <div x-show="['4'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/simple.jpg')); ?>" width="352"
                                            height="264" alt="plantilla web simple" />

                                    </div>
                                </div>
                                <div x-show="['4'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/appy.jpg')); ?>" width="352"
                                            height="264" alt="plantilla web appy" />
                                    </div>
                                </div>
                                <div x-show="['4'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/tidy.jpg')); ?>" width="352"
                                            height="264" alt="plantilla web tidy" />
                                    </div>
                                </div>
                                <div x-show="['4'].includes(category)">
                                    <div class="relative flex justify-center items-center shadow" data-aos="fade-up">
                                        <img class="w-full" src="<?php echo e(asset('images/open.jpg')); ?>" width="352"
                                            height="264" alt="plantilla web open pro" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t border-gray-200 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display mb-4">Construye y diseña cada elemento a la perfección</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Diseños elegantes que se adaptan a todos los
                        dispositivos actuales.</p>
                </div>

                <!-- Glow illustration -->
                <svg class="absolute left-1/2 transform -translate-x-1/2 mt-20 lg:mt-40 pointer-events-none -z-1 dark:opacity-20 hidden md:block"
                    aria-hidden="true" width="854" height="509" viewBox="0 0 854 509"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%"
                            id="iphonesill__a">
                            <stop stop-color="#667EEA" offset="0%" />
                            <stop stop-color="#667EEA" stop-opacity="0" offset="100%" />
                        </radialGradient>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%"
                            id="iphonesill__b">
                            <stop stop-color="#9F7AEA" offset="0%" />
                            <stop stop-color="#9F7AEA" stop-opacity="0" offset="100%" />
                        </radialGradient>
                    </defs>
                    <g transform="translate(-64 -64)" fill="none" fill-rule="evenodd">
                        <circle fill-opacity=".64" fill="url(#iphonesill__a)" cx="300" cy="300"
                            r="300" />
                        <circle fill-opacity=".72" fill="url(#iphonesill__b)" cx="729" cy="384"
                            r="240" />
                    </g>
                </svg>

                <!-- Items -->
                <div
                    class="max-w-sm mx-auto grid gap-12 md:gap-x-6 lg:gap-x-12 md:grid-cols-3 items-start md:max-w-none">

                    <!-- 1st item -->
                    <div class="relative flex flex-col items-center">
                        <!-- Line connecting (1) and (2) -->
                        <div aria-hidden="true"
                            class="absolute h-px opacity-50 bg-gradient-to-r from-white via-teal-400 to-white dark:from-gray-900 dark:via-teal-400 dark:to-gray-900 hidden md:block"
                            style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                            <div class="absolute inset-0 border-t border-dashed border-white dark:border-gray-900">
                            </div>
                        </div>
                        <!-- Number -->
                        <div
                            class="w-12 h-12 rounded-full bg-teal-400 dark:bg-teal-600 dark:bg-opacity-25 flex justify-center items-center text-white dark:text-teal-400 font-medium mb-8 lg:mb-12">
                            1</div>
                        <!-- Mobile mockup -->
                        <div class="inline-flex relative justify-center items-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="<?php echo e(asset('images/responsive.jpg')); ?>" width="290"
                                height="624" style="max-width: 84.33%;" alt="diseño adaptativo" />
                            <!-- iPhone mockup -->
                            <img class="relative max-w-full mx-auto h-auto pointer-events-none"
                                src="<?php echo e(asset('images/iphone-mockup.png')); ?>" width="344" height="674"
                                alt="iPhone mockup" aria-hidden="diseño adaptable" />
                        </div>
                    </div>

                    <!-- 2nd item -->
                    <div class="relative flex flex-col items-center">
                        <!-- Line connecting (2) and (3) -->
                        <div aria-hidden="true"
                            class="absolute h-px opacity-50 bg-gradient-to-r from-white via-teal-400 to-white dark:from-gray-900 dark:via-teal-400 dark:to-gray-900 hidden md:block"
                            style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                            <div class="absolute inset-0 border-t border-dashed border-white dark:border-gray-900">
                            </div>
                        </div>
                        <!-- Number -->
                        <div
                            class="w-12 h-12 rounded-full bg-teal-400 dark:bg-teal-600 dark:bg-opacity-25 flex justify-center items-center text-white dark:text-teal-400 font-medium mb-8 lg:mb-12">
                            2</div>
                        <!-- Mobile mockup -->
                        <div class="inline-flex relative justify-center items-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute object-cover object-center"
                                src="<?php echo e(asset('images/responsive2.jpg')); ?>" width="290" height="624"
                                style="max-width: 84.33%;" alt="diseño adaptativo" />
                            <!-- iPhone mockup -->
                            <img class="relative max-w-full mx-auto h-auto pointer-events-none"
                                src="<?php echo e(asset('images/iphone-mockup.png')); ?>" width="344" height="674"
                                alt="iPhone mockup" aria-hidden="true" />
                        </div>
                    </div>

                    <!-- 3rd item -->
                    <div class="relative flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-teal-400 dark:bg-teal-600 dark:bg-opacity-25 flex justify-center items-center text-white dark:text-teal-400 font-medium mb-8 lg:mb-12">
                            3</div>
                        <!-- Mobile mockup -->
                        <div class="inline-flex relative justify-center items-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="<?php echo e(asset('images/responsive3.jpg')); ?>"" width="290"
                                height="624" style="max-width: 84.33%;" alt="diseño adaptable" />
                            <!-- iPhone mockup -->
                            <img class="relative max-w-full mx-auto h-auto pointer-events-none"
                                src="<?php echo e(asset('images/iphone-mockup.png')); ?>" width="344" height="674"
                                alt="iPhone mockup" aria-hidden="true" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Tables -->
    <section class="relative bg-gray-900 border-t border-transparent dark:border-gray-800">
        <!-- Background gradient (dark version only) -->
        <div class="absolute inset-0 opacity-25 bg-gradient-to-b from-gray-800 to-gray-900 pointer-events-none hidden dark:block"
            aria-hidden="true"></div>
        <!-- End background gradient (dark version only) -->
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12">
                    <h2 class="h2 font-red-hat-display mb-4 text-gray-100">Comienza a construir tu sitio web
                        con
                        nosotros</h2>
                    <p class="text-xl text-gray-400">Planes que se adaptan a tus necesidades.</p>
                </div>

                <!-- Pricing tables -->
                <div
                    class="max-w-xs mx-auto grid gap-6 sm:grid-cols-2 lg:grid-cols-4 items-start sm:max-w-none md:max-w-2xl lg:max-w-none">

                    <!-- Pricing table 1 -->
                    <div class="flex flex-col h-full p-6 bg-white dark:bg-gray-800 shadow" data-aos="fade-down">
                        <div class="grow mb-4 pb-4">
                            <div class="flex justify-between items-center mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Landing Page</div>
                                
                            </div>
                            <div class="font-red-hat-display inline-flex items-baseline mb-2">
                                <span class="h4 text-gray-600 dark:text-gray-400">$</span>
                                <span class="h3">1,999</span>
                                <span class="font-medium text-gray-500 dark:text-gray-400">/mxn</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">Página única con diseño elegante para mostrar
                                tu
                                información y servicios.
                            </div>
                        </div>
                        <div class="mt-24">
                            <a class="btn-sm text-white bg-purple-500 hover:bg-purple-400 dark:text-teal-400 dark:bg-gray-700 dark:hover:bg-gray-600 w-full"
                                href="<?php echo e(route('home.services')); ?>">Ver más</a>
                        </div>
                    </div>

                    <!-- Pricing table 2 -->
                    <div class="flex flex-col h-full p-6 bg-white dark:bg-gray-800 shadow border-2 border-transparent dark:border-teal-500"
                        data-aos="fade-down" data-aos-delay="150">
                        <div class="grow mb-4 pb-4">
                            <div class="flex justify-between items-center mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Sitio Informativo</div>
                            </div>
                            <div class="font-red-hat-display inline-flex items-baseline mb-2">
                                <span class="h4 text-gray-600 dark:text-gray-400">$</span>
                                <span class="h3">3,999</span>
                                <span class="font-medium text-gray-500 dark:text-gray-400">/mxn</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">Sitio web con hasta 5 secciones + blog
                                autoadministrable.
                                <ul class="mt-3">
                                    <li>-> Inicio</li>
                                    <li>-> Servicios</li>
                                    <li>-> Blog</li>
                                    <li>-> Contacto</li>
                                    <li>-> Nosotros</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-24">
                            <a class="btn-sm text-white bg-purple-500 hover:bg-purple-400 dark:text-white dark:bg-teal-500 dark:hover:bg-teal-600 w-full"
                                href="<?php echo e(route('home.services')); ?>">Ver más</a>
                        </div>
                    </div>

                    <!-- Pricing table 3 -->
                    <div class="flex flex-col h-full p-6 bg-white dark:bg-gray-800 shadow" data-aos="fade-down"
                        data-aos-delay="300">
                        <div class="grow mb-4 pb-4">
                            <div class="flex justify-between items-center mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Tienda en Línea</div>
                            </div>
                            <div class="font-red-hat-display inline-flex items-baseline mb-2">
                                <span class="h4 text-gray-600 dark:text-gray-400">$</span>
                                <span class="h3">9,999</span>
                                <span class="ml-1 font-medium text-gray-500 dark:text-gray-400">/mxn</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">Ofrece tus servicios o productos en
                                tu Tienda en línea.</div>
                        </div>
                        <div class="mt-24">
                            <a class="btn-sm text-white bg-purple-500 hover:bg-purple-400 dark:text-teal-400 dark:bg-gray-700 dark:hover:bg-gray-600 w-full"
                                href="<?php echo e(route('home.services')); ?>">Ver más</a>
                        </div>
                    </div>

                    <!-- Pricing features -->
                    <div class="sm:order-first">
                        <div class="text-right hidden sm:block">
                            <svg class="inline-flex -mt-3 mr-5 mb-3" width="86" height="25"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-gray-600"
                                    d="M80.959 10.448l-5.502-8.292 1.666-1.105 8.596 12.953-15.534.62-.08-1.999 9.944-.397-7.182-3.672C45.251-3.737 21.787 1.633 2.216 24.726L.69 23.435C20.836-.338 45.252-5.926 73.73 6.752l7.23 3.696z" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold font-red-hat-display mb-4 mt-4 sm:mt-0 text-gray-100">Todos los
                            planes incluyen:</div>
                        <ul class="text-gray-400 -mb-2 grow">
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Hosting gratis por 1 año.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Dominio gratis por 1 año.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Certificado SSL gratis por 1 año.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Diseño adaptable.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Integración con Google, Bing & Yahoo.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Diseño UX/UI.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>SEO (Optimización para motores de búsqueda).</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 fill-current text-teal-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Avisos legales.</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t border-transparent dark:border-gray-800">
                <!-- Testimonials -->
                <div
                    class="max-w-sm mx-auto grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:gap-12 items-start sm:max-w-none md:max-w-2xl lg:max-w-none">
                    <!-- 1st testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="<?php echo e(asset('images/testimonial-01.jpg')); ?>" width="56"
                                height="56" alt="Testimonial 01" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-purple-500"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and
                            the value is amazing. Since I purchased it I have been using it everyday! Highly
                            recommend it. “</blockquote>
                        <div class="font-red-hat-display font-bold mt-2">
                            <cite class="not-italic">—Andy Croll</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out">Appy.com</a>
                        </div>
                    </div>

                    <!-- 2nd testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="<?php echo e(asset('images/testimonial-02.jpg')); ?>" width="56"
                                height="56" alt="Testimonial 02" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-purple-500"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and
                            the value is amazing. Since I purchased it I have been using it everyday! Highly
                            recommend it. “</blockquote>
                        <div class="font-red-hat-display font-bold mt-2">
                            <cite class="not-italic">—Patricia Lepisov</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out">Nobi
                                Bank</a>
                        </div>
                    </div>

                    <!-- 3rd testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="<?php echo e(asset('images/testimonial-03.jpg')); ?>" width="56"
                                height="56" alt="Testimonial 03" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-purple-500"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and
                            the value is amazing. Since I purchased it I have been using it everyday! Highly
                            recommend it. “</blockquote>
                        <div class="font-red-hat-display font-bold mt-2">
                            <cite class="not-italic">—Zhenya Ritz</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out">Sync</a>
                        </div>
                    </div>

                    <!-- 4th testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="images/testimonial-04.jpg" width="56" height="56"
                                alt="Testimonial 04" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-purple-500"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and
                            the value is amazing. Since I purchased it I have been using it everyday! Highly
                            recommend it. “</blockquote>
                        <div class="font-red-hat-display font-bold mt-2">
                            <cite class="not-italic">—Lisa Champ</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out">Appicu</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Features -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t border-gray-200 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display">Pon claridad en el centro de tu Sitio Web.</h2>
                </div>

                <!-- Items -->
                <div class="max-w-xs mx-auto sm:max-w-none md:max-w-xl lg:max-w-none grid sm:grid-cols-2 gap-4 lg:gap-6 lg:grid-cols-4"
                    data-aos-id-featbl>

                    <!-- 1st item -->
                    <div class="flex flex-col p-5 group text-white bg-gradient-to-tr from-teal-500 to-teal-400 dark:to-teal-500 shadow-2xl"
                        data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M19 18.414l-4 4L9.586 17l.707-.707L12 14.586V8.414l-5-5L4.414 6l6.293 6.293-1.414 1.414L1.586 6 7 .586l7 7v5l8.463-8.463a3.828 3.828 0 115.414 5.414L21 16.414v6.172l5 5L28.586 25l-6.293-6.293 1.414-1.414L31.414 25 26 30.414l-7-7v-5zm-4 1.172L26.463 8.123a1.828 1.828 0 10-2.586-2.586L12.414 17 15 19.586zM11 30v2C4.925 32 0 27.075 0 21h2a9 9 0 009 9zm0-5v2a6 6 0 01-6-6h2a4 4 0 004 4z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="font-red-hat-display text-xl font-extrabold tracking-tighter mb-1">Fácil de
                            compartir</div>
                        <div class="grow opacity-80 mb-4">Comparte de mejor manera tu información y servicios.</div>

                    </div>

                    <!-- 2nd item -->
                    <div class="flex flex-col p-5 group text-white bg-gradient-to-tr from-purple-500 to-purple-400 dark:to-purple-500 shadow-2xl"
                        data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="100">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M20.796 20l-1.677 7.264a6 6 0 01-7.302 4.471L0 28.781V11.54l.35-.3 9.457-8.107a3.751 3.751 0 015.29 5.29L11.175 13H28.5a3.5 3.5 0 012.6 1.156c.663.736.984 1.72.878 2.74-.252 1.808-1.817 3.143-3.622 3.104h-7.56zM2 27.22l10.303 2.575a4 4 0 004.868-2.98L19.204 18h9.173c.812.018 1.508-.575 1.615-1.345A1.5 1.5 0 0028.5 15H11.173a2 2 0 01-1.517-3.3l3.922-4.577a1.755 1.755 0 00-.597-2.733 1.751 1.751 0 00-1.872.262L2 12.46v14.76zM28 .585L29.414 2 23 8.414 21.586 7 28 .586zm-8.272 6.627l-1.94-.485 1.484-5.94 1.94.484-1.484 5.94zm3.544 5l-.485-1.94 5.94-1.486.486 1.94-5.94 1.486z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="font-red-hat-display text-xl font-extrabold tracking-tighter mb-1">Mayor alcance
                        </div>
                        <div class="grow opacity-80 mb-4">Haz que tu negocio llegue a todo el mundo.</div>

                    </div>

                    <!-- 3rd item -->
                    <div class="flex flex-col p-5 group text-white bg-gradient-to-tr from-indigo-500 to-indigo-400 dark:to-indigo-500 shadow-2xl"
                        data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="200">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M19 5.612V25a6 6 0 11-2-4.472V0h2v2.961A5.98 5.98 0 0023.497 5a8.476 8.476 0 018.444 9.474l-.253 2.13-1.469-1.563A6.472 6.472 0 0025.5 13c-1.842 0-3.634-.6-5.103-1.713l1.206-1.594A6.455 6.455 0 0025.5 11c1.557 0 3.068.428 4.376 1.217A6.475 6.475 0 0023.5 7 7.981 7.981 0 0119 5.612zM13 29a4 4 0 100-8 4 4 0 000 8zM0 5V3h14v2H0zm0 5V8h14v2H0zm0 5v-2h14v2H0z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="font-red-hat-display text-xl font-extrabold tracking-tighter mb-1">Mejora tus
                            ventas</div>
                        <div class="grow opacity-80 mb-4">Atrae clientes nuevos y mejora tus ganancias.</div>

                    </div>

                    <!-- 4th item -->
                    <div class="flex flex-col p-5 group text-white bg-gradient-to-tr from-pink-500 to-pink-400 dark:to-pink-500 shadow-2xl"
                        data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="300">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M20.243 6.757l.707.707-1.414 1.414-.707-.707a4 4 0 00-5.658 0l-.707.707-1.414-1.414.707-.707a6 6 0 018.486 0zm3.535-3.535l.707.707-1.414 1.414-.707-.707a9 9 0 00-12.728 0l-.707.707L7.515 3.93l.707-.707c4.296-4.296 11.26-4.296 15.556 0zM9 17.212V16a7 7 0 00-7-7H1V7h1a9 9 0 019 9v.788l2.302 5.18L11 23.117V24a4 4 0 01-4 4H5v3H3v-5h4a2 2 0 002-2v-2.118l1.698-.85L9 17.213zm12-.424V16a9 9 0 019-9h1v2h-1a7 7 0 00-7 7v1.212l-1.698 3.82 1.698.85V24a2 2 0 002 2h4v5h-2v-3h-2a4 4 0 01-4-4v-.882l-2.302-1.15L21 16.787zM16 12a1 1 0 110-2 1 1 0 010 2z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="font-red-hat-display text-xl font-extrabold tracking-tighter mb-1">Digitalízate
                        </div>
                        <div class="grow opacity-80 mb-4">Haz visible tu negocio en internet.</div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Cta -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <!-- CTA box -->
            <div class="dark relative bg-gray-800 py-10 px-8 md:py-16 md:px-12">

                <!-- Background illustration -->
                <div class="absolute inset-0 left-auto  pointer-events-none" aria-hidden="true">
                    <svg class="h-full" width="400" height="232" viewBox="0 0 400 232"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <radialGradient cx="50%" cy="50%" fx="50%" fy="50%"
                                r="39.386%" id="box-gr-a">
                                <stop stop-color="#667EEA" offset="0%" />
                                <stop stop-color="#667EEA" stop-opacity="0" offset="100%" />
                            </radialGradient>
                            <radialGradient cx="50%" cy="50%" fx="50%" fy="50%"
                                r="39.386%" id="box-gr-b">
                                <stop stop-color="#3ABAB4" offset="0%" />
                                <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%" />
                            </radialGradient>
                        </defs>
                        <g transform="translate(-85 -369)" fill="none" fill-rule="evenodd">
                            <circle fill-opacity=".16" fill="url(#box-gr-a)" cx="413" cy="688"
                                r="240" />
                            <circle fill-opacity=".24" fill="url(#box-gr-b)" cx="400" cy="400"
                                r="400" />
                        </g>
                    </svg>
                </div>

                <div class="relative flex flex-col lg:flex-row justify-between items-center">

                    <!-- CTA content -->
                    <div class="mb-6 lg:mr-16 lg:mb-0 text-center lg:text-left lg:w-1/2">
                        <h3 class="h3 font-red-hat-display text-gray-100">Ponte en contacto con nosotros
                        </h3>
                    </div>

                    <!-- CTA form -->
                    <form class="w-full lg:w-1/2">
                        <div
                            class="flex flex-col sm:flex-row justify-center max-w-xs mx-auto sm:max-w-md lg:max-w-none">

                            <a class="btn text-white bg-teal-500 hover:bg-teal-400 shrink-0"
                                href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                                rel="nofollow" target="_blank">Whatsapp</a>
                        </div>
                        <!-- Success message -->
                        <!-- <p class="text-center lg:text-left lg:absolute mt-2 opacity-75 text-sm">Thanks for subscribing!</p> -->
                    </form>

                </div>

            </div>

        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\blckweb\resources\views/home/index.blade.php ENDPATH**/ ?>