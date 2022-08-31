<div>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Usuarios</h1>
            </div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Search form -->
                <div class="relative">
                    <label for="action-search" class="sr-only">Search</label>
                    <input wire:model="search" id="action-search" class="form-input pl-9 focus:border-slate-300"
                        type="search" placeholder="Buscar usuario" />
                    <button class="absolute inset-0 right-auto group cursor-default" aria-label="Search">
                        <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 group-hover:text-slate-500 ml-3 mr-2"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                            <path
                                d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        @if ($users->count())
            <!-- Cards -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Card 1 -->
                @foreach ($users as $user)
                    <div
                        class="col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
                        <div class="flex flex-col h-full">
                            <!-- Card top -->
                            <div class="grow p-5">
                                <div class="flex justify-between items-start">
                                    <!-- Image + name -->
                                    <header>
                                        <div class="flex mb-2">
                                            <a class="relative inline-flex items-start mr-5">
                                                <div class="absolute top-0 right-0 -mr-2 bg-white rounded-full shadow"
                                                    aria-hidden="true">
                                                    <svg class="w-8 h-8 fill-current text-amber-500"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                                    </svg>
                                                </div>
                                                <img class="rounded-full"
                                                    src="https://cdn.pixabay.com/photo/2021/03/02/16/34/woman-6063087_960_720.jpg"
                                                    width="64" height="64" alt="User 01" />
                                            </a>
                                            <div class="mt-1 pr-1">
                                                <div class="inline-flex text-slate-800 hover:text-slate-900">
                                                    <h2 class="text-xl leading-snug justify-center font-semibold">
                                                        {{ $user->name }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <!-- Menu button -->
                                    <div class="relative inline-flex shrink-0" x-data="{ open: false }">
                                        <button class="text-slate-400 hover:text-slate-500 rounded-full"
                                            :class="{ 'bg-slate-100 text-slate-500': open }" aria-haspopup="true"
                                            @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="sr-only">Menu</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2" />
                                                <circle cx="10" cy="16" r="2" />
                                                <circle cx="22" cy="16" r="2" />
                                            </svg>
                                        </button>
                                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                            @click.outside="open = false" @keydown.escape.window="open = false"
                                            x-show="open"
                                            x-transition:enter="transition ease-out duration-200 transform"
                                            x-transition:enter-start="opacity-0 -translate-y-2"
                                            x-transition:enter-end="opacity-100 translate-y-0"
                                            x-transition:leave="transition ease-out duration-200"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            x-cloak>
                                            <ul>
                                                <li>
                                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit"
                                                            class="cursor-pointer font-medium text-sm text-rose-500 hover:text-rose-600 flex py-1 px-3"
                                                            @click="open = false" @focus="open = true"
                                                            @focusout="open = false" value="Eliminar" />
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bio -->
                                <div class="mt-2">
                                    <div class="text-sm">{{ $user->email }}</div>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="border-t border-slate-200">
                                <div class="flex divide-x divide-slate-200r">
                                    <a class="block flex-1 text-center text-sm text-indigo-500 hover:text-indigo-600 font-medium px-3 py-4"
                                        href="{{ route('users.edit', $user) }}">
                                        <div class="flex items-center justify-center">
                                            <svg class="w-4 h-4 fill-current text-indigo-400 group-hover:text-indigo-500 shrink-0 mr-2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                                            </svg>
                                            <span>Asignar rol</span>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center font-bold text-gray-700 py-3">
                No hay resultados para mostrar
            </div>
        @endif
    </div>
    <!-- Pagination -->
</div>
