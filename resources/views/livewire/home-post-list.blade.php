@if ($posts->count())
    <div>
        <!-- Featured posts -->
        <section>
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="pb-12 md:pb-16">
                    <div class="grid gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4" data-aos-id-featposts>
                        @forelse ($posts->take(4) as $article)
                            <!-- 1st article -->
                            <article class="relative group px-6 py-4 sm:py-8" data-aos="fade-up"
                                data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="100">
                                <figure>
                                    <img class="absolute inset-0 w-full h-full object-cover object-center opacity-50 group-hover:opacity-75 transition duration-700 ease-out"
                                        src="{{ Storage::url($article->image->url) }}" width="258" height="154"
                                        alt="{{ $article->name }}" />
                                    <div class="absolute inset-0 bg-teal-500 opacity-75 group-hover:opacity-50 transition duration-700 ease-out"
                                        aria-hidden="true"></div>
                                </figure>
                                <div class="relative flex flex-col h-full text-white">
                                    <header class="grow">
                                        <a class="hover:underline" href="{{ route('home.blogpost', $article) }}">
                                            <h3 class="text-lg font-red-hat-display font-bold tracking-tight mb-2">
                                                {{ Str::limit($article->name, 40) }}
                                            </h3>
                                        </a>
                                    </header>
                                    <footer>
                                        <div class="text-sm opacity-80">Por {{ Str::limit($article->user->name, 15) }} ·
                                            {{ $article->created_at->format('d M, Y') }}
                                        </div>
                                    </footer>
                                </div>
                            </article>
                        @empty
                            <div class="text-gray-400">No hay entradas destacadas para mostrar.</div>
                        @endforelse

                    </div>

                </div>
            </div>
        </section>
        <!-- Posts list -->
        <section>
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="pb-12 md:pb-20">
                    <div class="lg:flex lg:justify-between">
                        <!-- Main content -->
                        <div class="lg:grow">
                            <!-- Section title -->
                            <h4 class="h3 font-red-hat-display mb-8">Últimas entradas.</h4>
                            @if ($posts->count())
                                <!-- Articles container -->
                                <div class="grid gap-12 sm:grid-cols-2 sm:gap-x-6 md:gap-y-8 items-start">
                                    @foreach ($posts as $post)
                                        <!-- 1st article -->
                                        <article class="flex flex-col h-full">
                                            <header>
                                                <a class="block mb-4" href="{{ route('home.blogpost', $post) }}">
                                                    <figure class="relative h-0 pb-9/16">
                                                        <img class="absolute inset-0 w-full h-full object-cover"
                                                            src="{{ Storage::url($post->image->url) }}" width="352"
                                                            height="198" alt="{{ $post->name }}" />
                                                    </figure>
                                                </a>
                                                <a class="hover:underline" href="{{ route('home.blogpost', $post) }}">
                                                    <h3 class="h4 font-red-hat-display mb-2">
                                                        {{ Str::limit($post->name, 50) }}
                                                    </h3>
                                                </a>
                                            </header>
                                            <p class="text-gray-600 dark:text-gray-400 grow">
                                                {{ Str::limit($post->extract, 80) }}
                                            </p>
                                            <footer class="flex items-center mt-4">
                                                <a href="{{ route('home.blogpost', $post) }}">
                                                    <img class="rounded-full shrink-0 mr-3"
                                                        src="{{ $post->user->profile_photo_url }}" width="32"
                                                        height="32" alt="Author 03" />
                                                </a>
                                                <div class="text-sm text-gray-500">
                                                    Por <span
                                                        class="font-medium text-gray-800 dark:text-gray-400 hover:underline">{{ Str::limit($post->user->name, 15) }}</span>
                                                    ·
                                                    <span
                                                        class="text-gray-500">{{ $post->created_at->format('d M, Y') }}</span>
                                                </div>
                                            </footer>
                                        </article>
                                    @endforeach
                                </div>
                                <div class="mt-12">
                                    {{ $posts->links() }}
                                </div>
                            @else
                                <div>
                                    No hay entradas para mostrar
                                </div>
                            @endif
                        </div>
                        <!-- Sidebar -->
                        <aside class="relative mt-12 lg:mt-0 lg:w-64 lg:ml-16 lg:shrink-0">
                            <!-- Popular posts -->
                            <div class="mb-8">
                                <h4 class="h4 font-red-hat-display mb-5 text-gray-400">
                                    Popular en BLCKNet
                                </h4>
                                <ul class="-my-3">
                                    @forelse ($posts->take(5) as $key => $item)
                                        <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                            <div
                                                class="h4 w-12 font-red-hat-display text-gray-400 dark:text-gray-600 shrink-0 mt-1">
                                                {{ $key + 1 }}</div>
                                            <article>
                                                <a class="hover:underline" href="{{ route('home.blogpost', $item) }}">
                                                    <h3 class="font-red-hat-display font-bold tracking-tight mb-1">
                                                        {{ Str::limit($item->name, 50) }}
                                                    </h3>
                                                </a>
                                                <div class="text-sm text-gray-500">
                                                    Por <a
                                                        class="font-medium text-gray-800 dark:text-gray-400 hover:underline">{{ Str::limit($item->user->name, 15) }}</a>
                                                    ·
                                                    <span
                                                        class="text-gray-500">{{ $item->created_at->format('d M, Y') }}</span>
                                                </div>
                                            </article>
                                        </li>
                                    @empty
                                        <div>No hay entradas para mostrar.</div>
                                    @endforelse
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
@else
    <h2 class="text-center text-2xl">No hay entradas para mostrar</h2>
    <p class="text-center mt-3 text-gray-400">Estamos trabajando para ofrecerte un contenido de calidad.</p>
@endif
