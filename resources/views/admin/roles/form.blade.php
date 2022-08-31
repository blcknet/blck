<div class="space-y-8 mt-4">
    <!-- Input Types -->
    <div>
        <div class="">
            <div>
                <!-- Start -->
                <div class="flex"> {!! Form::label('name', 'Nombre del rol', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('name', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el nombre del rol',
                ]) !!}
                <!-- End -->

                @error('name')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>


            <h2 class="mt-3">Listado de permisos</h2>


            @foreach ($permissions as $permission)
                <div class="mt-2">
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'form-checkbox']) !!}
                        {{ $permission->description }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>
