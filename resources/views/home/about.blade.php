<x-guest-layout>
    <x-slot name="head">
        <meta name="robots" content="index">
        <meta name="description"
            content="Ofrecemos desarrollo de sitios web profesionales, trabajando
            todos los días para mejorar nuestros tiempos de entrega. Todo esto y mucho más a un excelente
            precio. Visita nuestro sitio web para más información">
    </x-slot>

    @section('title', 'BLCKNet - Nosotros')
    <!-- Hero -->
    <section class="relative">

        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content -z-1">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="./images/hero-bg-03.jpg"
                width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="text-center">
                    <div class="relative flex justify-center items-center">
                        <div class="relative inline-flex items-start" data-aos="fade-up">
                            <img class="opacity-50" src="{{ asset('images/about-hero.jpg') }}" width="768"
                                height="432" alt="About hero" />
                            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900"
                                aria-hidden="true"></div>
                        </div>
                        <div class="absolute" data-aos="fade-down">
                            <h1 class="h1 lg:text-6xl font-red-hat-display">¿Quiénes <span class="text-teal-500">
                                    somos?</span></h1>
                        </div>
                        <div class="absolute bottom-0 -mb-8 w-0.5 h-16 bg-gray-300 dark:bg-gray-700" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-6 pb-12 md:pt-8 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display mb-4">Ayudamos a dejar tu marca
                        en internet</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Un sitio web profesional que genere más
                        confianza.</p>
                </div>

                <!-- Items -->
                <div
                    class="max-w-sm mx-auto grid grid-cols-2 gap-4 gap-y-8 sm:gap-8 md:grid-cols-4 items-start md:max-w-5xl">

                    <!-- 1st item -->
                    <div class="relative flex flex-col items-center">
                        <div aria-hidden="true"
                            class="absolute h-0.5 bg-gradient-to-r from-white via-gray-300 to-white dark:from-gray-900 dark:via-gray-700 dark:to-gray-900 hidden md:block"
                            style="width:calc(100% - 96px);left:calc(50% + 64px);top:40px;"></div>
                        <div class="relative w-20 h-20 mb-3">
                            <div class="absolute inset-0 rounded-full opacity-30 bg-gradient-to-tr from-teal-500 -z-1"
                                aria-hidden="true"></div>
                            <svg class="w-20 h-20 fill-current text-teal-500" viewBox="0 0 80 80"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M56.209 8.306l5.084-5.084c2.574-2.574 7.7-3.714 9.95-1.465 2.25 2.249 1.11 7.376-1.465 9.95l-5.084 5.084 6.43 22.5-5.298 5.298-11.25-17.68-5.798 5.798-.174.14-3.725 2.343 1.192 7.153L43 45.414l-5.55-5.55-4.198 2.642a2 2 0 01-2.758-2.757l2.641-4.2L27.585 30l3.072-3.071 7.151 1.192 2.346-3.725.139-.174 5.797-5.797-3.507-2.232 1.073-1.687 3.883 2.47 7.052-7.052-6.022-1.721.55-1.923 7.09 2.026zm6.498-3.67l-20.92 20.92-2.64 4.193-6.96 11.065 15.256-9.6 20.92-20.921c1.891-1.89 2.766-5.822 1.466-7.122-1.3-1.3-5.232-.425-7.122 1.465zm.37 13.773l-7.053 7.052 10.15 15.95 2.703-2.702-5.8-20.3zm-23.89 20.363L43 42.586l.929-.93-.885-5.311-3.858 2.427zm-4.96-4.959l2.427-3.857-5.31-.885-.93.929 3.813 3.813zM43.39 1.611a5.5 5.5 0 010 7.778L36 16.78l-7.39-7.39A5.5 5.5 0 0136 1.257a5.5 5.5 0 017.39.354zM36 13.95l5.975-5.975a3.5 3.5 0 10-4.95-4.95L36 4.05l-1.025-1.025a3.5 3.5 0 00-4.95 4.95L36 13.95z" />
                            </svg>
                        </div>
                        <div class="sm:text-lg font-medium dark:text-gray-300">Fundado en 2021</div>
                    </div>

                    <!-- 2nd item -->
                    <div class="relative flex flex-col items-center">
                        <div aria-hidden="true"
                            class="absolute h-0.5 bg-gradient-to-r from-white via-gray-300 to-white dark:from-gray-900 dark:via-gray-700 dark:to-gray-900 hidden md:block"
                            style="width:calc(100% - 96px);left:calc(50% + 64px);top:40px;"></div>
                        <div class="relative w-20 h-20 mb-3">
                            <div class="absolute inset-0 rounded-full opacity-30 bg-gradient-to-tr from-purple-500 -z-1"
                                aria-hidden="true"></div>
                            <svg class="w-20 h-20 fill-current text-purple-500" viewBox="0 0 80 80"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35 22.304a3.826 3.826 0 013.707.989l6.828 6.828A5 5 0 0147 33.657V44h-2V33.657a3 3 0 00-.88-2.122l-6.827-6.828A1.827 1.827 0 0034.17 26c0 .485.193.95.536 1.293l6 6-1.414 1.414-6-6A3.827 3.827 0 0133 23.621V17a2 2 0 10-4 0v11.6a3 3 0 00.658 1.875L37 39.65V44h-2v-3.65l-6.904-8.625A5 5 0 0127 28.6V17a4 4 0 118 0v5.304zm32 1.317a3.827 3.827 0 01-.293 5.086l-6 6-1.414-1.414 6-6A1.827 1.827 0 0064 24.17c-.485 0-.95.193-1.293.536l-6.828 6.828A3 3 0 0055 33.657V44h-2V33.657a5 5 0 011.465-3.536l6.828-6.828a3.827 3.827 0 013.707-.99V17a4 4 0 118 0v11.6a5 5 0 01-1.096 3.125L65 40.35V44h-2v-4.35l7.342-9.175A3 3 0 0071 28.6V17a2 2 0 10-4 0v6.621zM56.456.308A6.5 6.5 0 0161 6.498a6.446 6.446 0 01-2.013 4.7L50 20.433l-.717-.737-8.234-8.465a6.5 6.5 0 118.956-9.422A6.501 6.501 0 0156.456.308zm-.602 1.907a4.5 4.5 0 00-5.036 1.704l-.824 1.173-.816-1.179a4.5 4.5 0 00-8.002 1.24c-.506 1.648-.026 3.44 1.27 4.65L50 17.566l7.586-7.795A4.476 4.476 0 0059 6.5a4.5 4.5 0 00-3.146-4.286z" />
                            </svg>
                        </div>
                        <div class="sm:text-lg font-medium dark:text-gray-300">Satisfacción</div>
                    </div>

                    <!-- 3rd item -->
                    <div class="relative flex flex-col items-center">
                        <div aria-hidden="true"
                            class="absolute h-0.5 bg-gradient-to-r from-white via-gray-300 to-white dark:from-gray-900 dark:via-gray-700 dark:to-gray-900 hidden md:block"
                            style="width:calc(100% - 96px);left:calc(50% + 64px);top:40px;"></div>
                        <div class="relative w-20 h-20 mb-3">
                            <div class="absolute inset-0 rounded-full opacity-30 bg-gradient-to-tr from-indigo-500 -z-1"
                                aria-hidden="true"></div>
                            <svg class="w-20 h-20 fill-current text-indigo-500" viewBox="0 0 80 80"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M51 35.183c.964-3.871 2.592-7.045 4.737-9.579 1.27-1.502 2.636-2.669 4.007-3.541.838-.534 1.505-.854 1.914-1.003l.94-.342.684 1.88-.94.342a4.92 4.92 0 00-.382.168c-.34.164-.725.377-1.142.642-1.207.768-2.419 1.804-3.555 3.146C53.981 30.776 52 36.358 52 44v1h-2v-1c0-7.642-1.981-13.225-5.263-17.104-1.136-1.342-2.348-2.378-3.555-3.146a11.116 11.116 0 00-1.142-.642 4.92 4.92 0 00-.382-.168l-.94-.342.684-1.88.94.342c.41.149 1.076.47 1.914 1.003 1.371.872 2.737 2.04 4.007 3.541 2.145 2.534 3.773 5.708 4.737 9.579zm1.9-30.897l4.25.618L54.073 7.9l.726 4.231-3.8-1.996-3.8 1.996.726-4.23-3.075-2.997 4.249-.618L51 .436l1.9 3.85zm-1.328 1.828L51 4.955l-.572 1.159-1.279.186.925.902-.218 1.275L51 7.875l1.144.602-.218-1.275.925-.902-1.28-.186zM50 16h2v8h-2v-8zm-7.85 18.208l-3.076 2.996.726 4.231L36 39.44l-3.8 1.996.726-4.23-3.075-2.997 4.249-.618 1.9-3.85 1.9 3.85 4.25.618zm-5.578 1.21L36 34.259l-.572 1.159-1.279.186.925.902-.218 1.275L36 37.179l1.144.602-.218-1.275.925-.902-1.28-.186zm35.577-1.21l-3.075 2.996.726 4.231L66 39.44l-3.8 1.996.726-4.23-3.075-2.997 4.249-.618 1.9-3.85 1.9 3.85 4.25.618zm-5.577 1.21L66 34.259l-.572 1.159-1.279.186.925.902-.218 1.275L66 37.179l1.144.602-.218-1.275.925-.902-1.28-.186zM32.5 22a3.5 3.5 0 110-7 3.5 3.5 0 010 7zm0-2a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm37 2a3.5 3.5 0 110-7 3.5 3.5 0 010 7zm0-2a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <div class="sm:text-lg font-medium dark:text-gray-300">Calidad</div>
                    </div>

                    <!-- 4th item -->
                    <div class="relative flex flex-col items-center">
                        <div class="relative w-20 h-20 mb-3">
                            <div class="absolute inset-0 rounded-full opacity-30 bg-gradient-to-tr from-pink-500 -z-1"
                                aria-hidden="true"></div>
                            <svg class="w-20 h-20 fill-current text-pink-500" viewBox="0 0 80 80"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M39.459 10.225A3.714 3.714 0 0145.633 8.7l9.694 9.7a198.863 198.863 0 01-.767-5.021L48.214 7.03l-.003.003-3.902-3.875a1.5 1.5 0 10-2.121 2.122l-1.414 1.414a3.5 3.5 0 014.947-4.953l.607.603a3.5 3.5 0 015.78-1.32l6.73 6.729a3.985 3.985 0 011.672.609 53.297 53.297 0 00-.406-3.674A3.751 3.751 0 0164.98.275c1.294.448 2.241 1.564 2.462 2.865.394 1.77.976 3.696 1.816 6.115.267.768.545 1.544.936 2.623 1.324 3.645 1.34 3.688 1.766 4.962a14.9 14.9 0 01-.423 10.551l-1.84-.782a12.9 12.9 0 00.366-9.135c-.419-1.25-.434-1.293-1.749-4.913-.394-1.088-.674-1.87-.945-2.65-.864-2.485-1.465-4.478-1.889-6.386a1.751 1.751 0 00-2.9-1.003c-.475.429-.677 1.082-.513 1.789.406 2.75.607 5.527.6 8.307.393 1.465.9 3.07 1.551 4.944.293.843.597 1.694 1.027 2.88 1.44 3.969 1.455 4.008 1.918 5.393a16.148 16.148 0 01-3.922 16.532c-4.846 4.844-12.701 4.844-17.547 0L30.364 27.04a3.712 3.712 0 01.073-5.324c.428-.407.93-.694 1.46-.859l-1.513-1.512a3.714 3.714 0 012.102-6.303 3.713 3.713 0 016.218-3.565l.755.748zm1.15 3.954l-3.316-3.284a1.713 1.713 0 10-2.424 2.424l13.363 13.359-1.414 1.414-.707-.707L34.932 16.21l-.004.004-.707-.707a1.712 1.712 0 00-2.924 1.188c-.007.463.174.909.501 1.236l3.765 3.764.063.06.714.7-.008.008 8.058 8.056-1.414 1.414-.707-.707-8.092-8.089a1.737 1.737 0 00-2.901 1.252c-.007.463.174.908.502 1.236l15.329 15.328c4.065 4.063 10.654 4.063 14.72-.001a14.148 14.148 0 003.438-14.484c-.455-1.36-.47-1.4-1.9-5.344a212.54 212.54 0 01-1.037-2.906c-.93-2.677-1.578-4.829-2.031-6.87a1.986 1.986 0 00-3.282-1.115c-.534.48-.767 1.212-.592 2.009.047.37.224 1.64.406 2.856.291 1.94.588 3.736.873 5.208a1.276 1.276 0 01-2.156 1.14L44.218 10.113a1.714 1.714 0 00-2.423 2.424l.224.224.71.702-.004.004 9.36 9.359-1.415 1.414-.707-.707-9.354-9.354zm13.928-3.653a3.983 3.983 0 011.917-2.327l-5.761-5.76a1.5 1.5 0 10-2.12 2.122l5.964 5.965z" />
                            </svg>
                        </div>
                        <div class="sm:text-lg font-medium dark:text-gray-300">Confiabilidad</div>
                    </div>

                </div>

                <!-- Images grid -->
                <div class="grid grid-cols-12 gap-3 mt-12 md:mt-20" data-aos-id-gallery>
                    <img class="col-span-4" src="{{ asset('images/about-grid-01.jpg') }}" width="360" height="270"
                        alt="About grid 01" data-aos="fade-down" data-aos-anchor="[data-aos-id-gallery]" />
                    <img class="col-span-3" src="{{ asset('images/about-grid-02.jpg') }}" width="270" height="270"
                        alt="About grid 02" data-aos="fade-down" data-aos-anchor="[data-aos-id-gallery]"
                        data-aos-delay="100" />
                    <img class="col-span-5" src="{{ asset('images/about-grid-03.jpg') }}" width="450"
                        height="270" alt="About grid 03" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-gallery]" data-aos-delay="200" />
                    <img class="col-span-3" src="{{ asset('images/about-grid-04.jpg') }}" width="270"
                        height="270" alt="About grid 04" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-gallery]" data-aos-delay="300" />
                    <img class="col-span-5" src="{{ asset('images/about-grid-05.jpg') }}" width="450"
                        height="270" alt="About grid 05" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-gallery]" data-aos-delay="400" />
                    <img class="col-span-4" src="{{ asset('images/about-grid-06.jpg') }}" width="360"
                        height="270" alt="About grid 06" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-gallery]" data-aos-delay="500" />
                </div>

            </div>
        </div>
    </section>

    {{-- <!-- Timeline -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t border-gray-200 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display mb-4">Lo que hemos conseguido</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400"></p>
                </div>

                <!-- Section content -->
                <div x-data="{ year: '2020' }">
                    <div class="flex items-start">

                        <!-- Timeline buttons -->
                        <div class="relative mr-4 sm:mr-12 lg:mr-32">
                            <div class="absolute inset-0 my-6 ml-16 pointer-events-none -z-1" aria-hidden="true">
                                <div class="absolute inset-0 w-0.5 h-full bg-gray-300 dark:bg-gray-700"></div>
                            </div>
                            <button
                                class="flex items-center justify-between font-medium text-gray-500 dark:text-gray-400 w-20 py-3 pr-2 text-left"
                                @click="year = '2020'">
                                <span class="block w-12 truncate">2020</span>
                                <span
                                    class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                    :class="{ 'bg-teal-500 dark:bg-teal-500': year === '2020' }"></span>
                            </button>
                            <button
                                class="flex items-center justify-between font-medium text-gray-500 dark:text-gray-400 w-20 py-3 pr-2 text-left"
                                @click="year = '2019'">
                                <span class="block w-12 truncate">2019</span>
                                <span
                                    class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                    :class="{ 'bg-teal-500 dark:bg-teal-500': year === '2019' }"></span>
                            </button>
                            <button
                                class="flex items-center justify-between font-medium text-gray-500 dark:text-gray-400 w-20 py-3 pr-2 text-left"
                                @click="year = '2018'">
                                <span class="block w-12 truncate">2018</span>
                                <span
                                    class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                    :class="{ 'bg-teal-500 dark:bg-teal-500': year === '2018' }"></span>
                            </button>
                            <button
                                class="flex items-center justify-between font-medium text-gray-500 dark:text-gray-400 w-20 py-3 pr-2 text-left"
                                @click="year = '2017'">
                                <span class="block w-12 truncate">2017</span>
                                <span
                                    class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                    :class="{ 'bg-teal-500 dark:bg-teal-500': year === '2017' }"></span>
                            </button>
                            <button
                                class="flex items-center justify-between font-medium text-gray-500 dark:text-gray-400 w-20 py-3 pr-2 text-left"
                                @click="year = '2016'">
                                <span class="block w-12 truncate">2016</span>
                                <span
                                    class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                    :class="{ 'bg-teal-500 dark:bg-teal-500': year === '2016' }"></span>
                            </button>
                        </div>

                        <!-- 2020's articles -->
                        <div class="grow" x-show="year === '2020'">
                            <div class="grid md:grid-cols-2 gap-4 sm:gap-6">
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Launched Appy Business</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Series B fundraising</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >1M Customers</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Mobile builder enabled</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <!-- 2019's articles -->
                        <div class="grow" x-show="year === '2019'">
                            <div class="grid md:grid-cols-2 gap-6">
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >1M Customers</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Mobile builder enabled</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <!-- 2018's articles -->
                        <div class="grow" x-show="year === '2018'">
                            <div class="grid md:grid-cols-2 gap-6">
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Series B fundraising</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Launched Appy Business</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <!-- 2017's articles -->
                        <div class="grow" x-show="year === '2017'">
                            <div class="grid md:grid-cols-2 gap-6">
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >1M Customers</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Mobile builder enabled</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <!-- 2016's articles -->
                        <div class="grow" x-show="year === '2016'">
                            <div class="grid md:grid-cols-2 gap-6">
                                <article class="md:col-span-2 p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Mobile builder enabled</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >Series B fundraising</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                                <article class="p-6 bg-white dark:bg-gray-800 shadow-2xl flex flex-col">
                                    <header>
                                        <h3 class="h4 font-red-hat-display mb-1">
                                            <a >1M Customers</a>
                                        </h3>
                                    </header>
                                    <div class="text-gray-600 dark:text-gray-400 grow">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                        >
                                        <span>Learn more</span>
                                        <svg class="w-3 h-3 shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                        </svg>
                                    </a>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- Career -->
    <section class="relative border-t border-gray-200 dark:border-gray-800">
        <!-- Background gradient -->
        <div class="absolute inset-0 opacity-25 bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900 pointer-events-none"
            aria-hidden="true"></div>
        <!-- End background gradient -->
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display mb-4">Nuestra misión</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Ofrecer un servicio de calidad, trabajando
                        todos los días para mejorar nuestras aplicaciones web. Todo esto y mucho más a precios
                        accesibles.</p>
                </div>



            </div>
        </div>
    </section>

    <!-- Team -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20 border-t border-gray-200 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 font-red-hat-display mb-4">Nuestra visión</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Con el constante avance tecnológico y el
                        creciente comercio digital, ayudaremos a personas, negocios o empresas a llegar a todo el mundo,
                        creando un espacio en este mundo digital. Con ayuda de sitios y aplicaciones web cada vez más
                        sofisticadas que faciliten la lógica de negocio.</p>
                </div>

                <!-- Team members -->
                <div class="max-w-xs sm:max-w-lg md:max-w-3xl lg:max-w-5xl mx-auto">
                    <div class="flex flex-wrap justify-center -m-5 lg:-my-7" data-aos-id-team>

                        <!-- 1st member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-01.jpg') }}"
                                    width="80" height="80" alt="Team member 01" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 2nd member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="100" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-02.jpg') }}"
                                    width="80" height="80" alt="Team member 02" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 3rd member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="200" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-03.jpg') }}"
                                    width="80" height="80" alt="Team member 03" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 4th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="300" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-04.jpg') }}"
                                    width="80" height="80" alt="Team member 04" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 5th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="400" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-05.jpg') }}"
                                    width="80" height="80" alt="Team member 05" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 6th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="500" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-06.jpg') }}"
                                    width="80" height="80" alt="Team member 06" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 7th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="600" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-07.jpg') }}"
                                    width="80" height="80" alt="Team member 07" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 8th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="700" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-08.jpg') }}"
                                    width="80" height="80" alt="Team member 08" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 9th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="600" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-09.jpg') }}"
                                    width="80" height="80" alt="Team member 09" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 10th member -->
                        <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 p-5 lg:py-7" data-aos="fade-down"
                            data-aos-delay="700" data-aos-anchor="[data-aos-id-team]">
                            <div class="flex flex-col items-center">
                                <img class="rounded-full mb-2" src="{{ asset('images/team-member-10.jpg') }}"
                                    width="80" height="80" alt="Team member 10" />

                                <a class="p-2">
                                    <svg width="16" height="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 1.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7C5.2 3.9 2.7 2.6 1.1.6c-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                            fill="#1DA1F2" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>

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

                <div class="relative max-w-3xl mx-auto text-center">
                    <!-- CTA header -->
                    <h3 class="h3 font-red-hat-display text-gray-100 mb-2">Lleva tu
                        negocio al siguiente nivel</h3>
                    <p class="text-gray-400 text-xl">Sin preocuparte por los detalles técnicos, haz visible tu negocio
                        e
                        ideas en internet.</p>
                    <!-- CTA button -->
                    <div class="flex justify-center mt-8">
                        <a class="btn text-white bg-teal-500 hover:bg-teal-400"
                            href="https://api.whatsapp.com/send?phone=525523215790&text=Hola,%20estoy%20interesado(a)%20en%20un%20sitio%20web."
                            rel="nofollow" target="_blank">Contáctanos</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-guest-layout>
