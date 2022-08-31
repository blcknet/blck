<div class="space-y-8 mt-4">
    <!-- Input Types -->
    <div>
        <div class="">
            <div>
                <!-- Start -->
                <div class="flex"> {!! Form::label('name', 'Título de la categoría', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('name', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el nombre de la categoría',
                ]) !!}
                <!-- End -->

                @error('name')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <!-- Start -->
                <div class="flex"> {!! Form::label('slug', 'Slug de la categoría', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('slug', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el slug de la categoría',
                    'readonly' => true,
                ]) !!}
                <!-- End -->
                @error('slug')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
</div>
