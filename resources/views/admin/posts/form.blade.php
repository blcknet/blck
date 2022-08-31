<div class="space-y-8 mt-4">
    <!-- Input Types -->
    <div>
        <div class="">
            <div>
                <!-- Start -->
                <div class="flex"> {!! Form::label('name', 'Título del post', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('name', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el título del post',
                ]) !!}
                <!-- End -->

                @error('name')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <!-- Start -->
                <div class="flex"> {!! Form::label('slug', 'Slug del post', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('slug', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el slug del post',
                    'readonly' => true,
                ]) !!}
                <!-- End -->
                @error('slug')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <!-- Start -->
                <div>
                    <div class="flex items-center justify-between">
                        <div class="flex"> {!! Form::label('extract', 'Extracto del post', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span>
                        </div>
                        <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                                @focusout="open = false" @click.prevent>
                                <svg class="w-4 h-4 fill-current text-slate-400" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                                </svg>
                            </button>
                            <div class="z-10 absolute bottom-full left-1/2 -translate-x-1/2">
                                <div class="min-w-60 bg-slate-800 text-slate-200 px-2 py-1 rounded overflow-hidden mb-2"
                                    x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-out duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
                                    <div class="text-sm">Pequeña introduccion al blog</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::textarea('extract', null, [
                        'class' => 'form-control w-full',
                        'placeholder' => 'Ingresa el extracto del post',
                        'rows' => 5,
                    ]) !!}
                </div>
                <!-- End -->
                @error('extract')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <!-- Start -->
                <div class="flex"> {!! Form::label('body', 'Contenido del post', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span>
                </div>
                {!! Form::textarea('body', null, [
                    'class' => 'form-control w-full',
                    'placeholder' => 'Ingresa el contenido del post',
                ]) !!}
                <!-- End -->
            </div>
            @error('body')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="grid lg:grid-cols-2 mt-3 gap-3">
        <div>
            <img id="picture" class="h-96 w-full object-cover object-center"
                src="@isset($post->image->url) {{ Storage::url($post->image->url) }} @else {{ Storage::url('posts/default.jpg') }} @endisset"
                alt="@isset($post->name) {{ $post->name }} @endisset">
        </div>
        <div>
            <h2 class="text-xl font-bold text-center">Imagen del post</h2>
            <p>Las imágenes deben estar en formato jpg o png, asegúrate de optimizarlas bien antes de subirlas, el
                tamaño
                máximo de imagen es de 2 MB.
            </p>
            <div class="mt-3">
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*', 'id' => 'file']) !!}
            </div>

            @error('file')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <!-- Select -->
    <div>
        <h2 class="text-2xl text-slate-800 font-bold mb-6">categoría</h2>
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        @error('category_id')
            <small class="text-red-700">{{ $message }}</small>
        @enderror
    </div>

    <!-- Checkbox -->
    <div>
        <h2 class="text-2xl text-slate-800 font-bold mb-6">Etiquetas</h2>
        <div class="flex flex-wrap items-center -m-3">

            <div class="m-3">
                @foreach ($tags as $tag)
                    <div>
                        {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'form-checkbox']) !!} {{ $tag->name }}
                    </div>
                @endforeach
                <!-- End -->
            </div>
        </div>
        @error('tags')
            <small class="text-red-700">{{ $message }}</small>
        @enderror
    </div>
    <!-- Radio -->
    <div>
        <h2 class="text-2xl text-slate-800 font-bold mb-6">Estado</h2>
        <div class="flex flex-wrap items-center -m-3">

            <div class="m-3">
                <!-- Start -->
                <label class="flex items-center">
                    {!! Form::radio('status', 1, null, ['class' => 'form-radio']) !!}
                    <span class="text-sm ml-2">Publicado</span>
                </label>
                <!-- End -->
            </div>

            <div class="m-3">
                <!-- Start -->
                <label class="flex items-center">
                    {!! Form::radio('status', 2, 'selected', ['class' => 'form-radio']) !!}
                    <span class="text-sm ml-2">Borrador</span>
                </label>
                <!-- End -->

            </div>
            @error('status')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
