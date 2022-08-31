<div class="space-y-8 mt-4">
    <!-- Input Types -->
    <div>
        <div class="">
            <div>
                <!-- Start -->
                <div class="flex"> {!! Form::label('name', 'Título de la etiqueta', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('name', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el nombre de la etiqueta',
                ]) !!}
                <!-- End -->

                @error('name')
                    <small class="text-red-700">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <!-- Start -->
                <div class="flex"> {!! Form::label('slug', 'Slug de la etiqueta', ['class' => 'block text-sm font-medium mb-1']) !!}<span class="text-rose-500">*</span></div>
                {!! Form::text('slug', null, [
                    'class' => 'form-input w-full',
                    'placeholder' => 'Ingresa el slug de la etiqueta',
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
