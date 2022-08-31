    <x-app-layout>
        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

            <!-- Page header -->
            <div class="mb-8">
                <h1 class="text-2xl text-center md:text-3xl text-slate-800 font-bold">Crear rol</h1>
            </div>

            <div class="border-t border-slate-200">

                {!! Form::open(['route' => 'roles.store', 'method' => 'post']) !!}

                @include('admin.roles.form')

                <div class="mt-3 flex justify-center">
                    {!! Form::submit('Crear rol', ['class' => 'btn bg-indigo-500 hover:bg-indigo-600 text-white cursor-pointer']) !!}
                </div>

                {!! Form::close() !!}

            </div>

        </div>
    </x-app-layout>
