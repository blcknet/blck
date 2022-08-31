<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="mb-8">
            <h1 class="text-2xl text-center md:text-3xl text-slate-800 font-bold">Editar categoría</h1>
        </div>

        <div class="border-t border-slate-200">

            {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'put', 'files' => true]) !!}

            @include('admin.categories.form')

            <div class="mt-3 flex justify-center">
                {!! Form::submit('Actualizar categoría', [
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

            document.getElementById('file').addEventListener('change', changeImage);

            function changeImage(evt) {
                var file = evt.target.files[0];

                var reader = new FileReader();

                reader.onload = evt => {
                    document.getElementById('picture').setAttribute('src', evt.target.result);
                }

                reader.readAsDataURL(file);

            }
        </script>
    @endpush
</x-app-layout>
