<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="mb-8">
            <h1 class="text-2xl text-center md:text-3xl text-slate-800 font-bold">Editar etiqueta</h1>
        </div>

        <div class="border-t border-slate-200">

            {!! Form::model($tag, ['route' => ['tags.update', $tag], 'method' => 'put']) !!}

            @include('admin.tags.form')

            <div class="mt-3 flex justify-center">
                {!! Form::submit('Actualizar etiqueta', [
                    'class' => 'btn bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer',
                ]) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>
    @push('scripts')
        <script>
            let name = document.querySelector('#name');
            let slug = document.querySelector('#slug');

            const slugify = str =>
                str
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');

            name.addEventListener('input', function(val) {
                slug.value = slugify(val.target.value);
            });
        </script>
    @endpush
</x-app-layout>
