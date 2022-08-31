<x-guest-layout>
    <x-slot name="head">
        <meta name="robots" content="index">
        <meta name="description"
            content="Desarrollo de aplicaciones web,sitios web a medida, landing page, tiendas en línea y mucho más. Conoce nuestros planes y precios en nuestro sitio web.">
    </x-slot>

    @section('title', 'BLCKNet - entrada')
    <!-- Blog post -->
    <section class="relative">
        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="{{ asset('images/hero-bg.jpg') }}"
                width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">
                    <article>
                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="h1 font-red-hat-display mb-4" data-aos="fade-down">{{ $post->name }}</h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150">{{ $post->extract }}</p>
                            </div>
                            <!-- Article meta -->
                            <div class="md:flex md:items-center md:justify-between mt-5">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center" data-aos="fade-down" data-aos-delay="300">
                                    <a>
                                        <img class="rounded-full shrink-0 mr-3"
                                            src="{{ $post->user->profile_photo_url }}" width="32" height="32"
                                            alt="Author 04" />
                                    </a>

                                    <div>
                                        <span class="text-gray-600 dark:text-gray-400">Por </span>
                                        <a
                                            class="font-medium text-gray-800 dark:text-gray-300">{{ $post->user->name }}</a>
                                        <span class="text-gray-600 dark:text-gray-400">
                                            {{ $post->created_at->format('d M, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="m-1.5 relative">
                            <img class="object-center object-cover w-full" data-aos="fade-down"
                                src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}">
                            <!-- Start -->
                            <div data-aos="fade-right"
                                class="absolute top-3 left-3 text-xs inline-flex font-medium bg-blue-100 text-blue-600 rounded-full text-center px-2.5 py-1">
                                {{ $post->category->name }}</div>
                            <!-- End -->
                        </div>
                        <div class="m-1.5">
                            <!-- Start -->
                            @foreach ($post->tags->take(2) as $tag)
                                <div
                                    class="text-xs inline-flex font-medium bg-slate-700 text-slate-100 rounded-full text-center px-2.5 py-1">
                                    {{ $tag->name }}</div>
                            @endforeach
                            <!-- End -->
                        </div>
                        <!-- Article content -->
                        <div class="mt-6 text-lg text-gray-600 dark:text-gray-400" data-aos="fade-up">
                            {!! $post->body !!}
                        </div>
                    </article>
                    @livewire('comment-post', ['post' => $post])
                </div>
            </div>
        </div>
    </section>
    <!-- Related posts -->
    <aside>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    @if ($related_posts->count())
                        <h4 class="h4 font-red-hat-display mb-8">Articulos relacionados</h4>

                        <!-- Articles container -->
                        <div class="grid gap-4 sm:gap-6 sm:grid-cols-2" data-aos-id-relposts>

                            @foreach ($related_posts as $related)
                                <!-- 1st article -->
                                <article class="relative group p-6 text-white" data-aos="fade-down"
                                    data-aos-anchor="[data-aos-id-relposts]">
                                    <figure>
                                        <img class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:opacity-75 transition duration-700 ease-out"
                                            src="{{ Storage::url($related->image->url) }}" width="372"
                                            height="182" alt="{{ $related->name }}" />
                                        <div class="absolute inset-0 bg-teal-500 opacity-75 group-hover:opacity-50 transition duration-700 ease-out"
                                            aria-hidden="true"></div>
                                    </figure>

                                    <div class="relative flex flex-col h-full">
                                        <header class="grow">
                                            <div>
                                                <a href="{{ route('home.blogpost', $related) }}"
                                                    class="text-lg font-red-hat-display font-bold tracking-tight mb-2">
                                                    {{ $related->name }}
                                                </a>
                                            </div>
                                            <div class="text-sm opacity-80">{{ $related->created_at }}</div>
                                        </header>
                                        <footer>
                                            <!-- Author meta -->
                                            <div class="flex items-center text-sm mt-5">
                                                <div>
                                                    <img class="rounded-full shrink-0 mr-3"
                                                        src="{{ $related->user->profile_photo_url }}" width="32"
                                                        height="32" alt="{{ $related->user->name }}" />
                                                </div>
                                                <div>
                                                    <span class="opacity-75">Por </span>
                                                    <div class="font-medium">
                                                        {{ $related->user->name }}</div>
                                                </div>
                                            </div>
                                        </footer>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    @else
                        <h4 class="h4 font-red-hat-display mb-8">No hay articulos relacionados</h4>
                    @endif
                </div>
            </div>
        </div>
    </aside>
</x-guest-layout>
