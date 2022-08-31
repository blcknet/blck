<div>
    <h2 class="mt-16 text-2xl">Comentarios</h2>
    <small class="text-gray-500">*Los comentarios están abiertos a todo público, recuerda ser respetuoso.</small>
    <div class="mt-6 flex gap-x-3">
        <img class="h-12 w-12 rounded-full" src="<?php echo e(asset('images/usuario-blog.png')); ?>"
            alt="Usuario predeterminado imagen">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['wire:keydown.enter' => 'commentPost','wire:model.defer' => 'commentInput','class' => 'flex-1 text-black','type' => 'text','placeholder' => 'Ingresa un comentario']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:keydown.enter' => 'commentPost','wire:model.defer' => 'commentInput','class' => 'flex-1 text-black','type' => 'text','placeholder' => 'Ingresa un comentario']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:loading.attr' => 'disabled','wire:target' => 'commentPost','wire:click' => 'commentPost']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.attr' => 'disabled','wire:target' => 'commentPost','wire:click' => 'commentPost']); ?>
            Comentar
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    <div class="mt-1">
        <?php $__errorArgs = ['commentInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-red-500">*<?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mt-6">
        <?php $__empty_1 = true; $__currentLoopData = $commentsPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="sm:flex items-center justify-between gap-x-3 mt-6">
                <div class="flex justify-start gap-x-3">
                    <img class="h-8 w-8 rounded-full" src="<?php echo e(asset('images/usuario-blog.png')); ?>"
                        alt="Usuario predeterminado imagen">
                    <div>
                        <p>Anónimo <small class="text-gray-400"><?php echo e($comment->created_at->diffForHumans()); ?></small>
                        </p>
                        <p class="text-gray-400"><?php echo e($comment->name); ?></p>
                    </div>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.index')): ?>
                    <div class="mt-3">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:loading.attr' => 'disabled','wire:target' => 'deleteComment','wire:click' => 'deleteComment('.e($comment).')']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:loading.attr' => 'disabled','wire:target' => 'deleteComment','wire:click' => 'deleteComment('.e($comment).')']); ?>
                            Eliminar
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="mt-6 text-center text-gray-500">
                No hay comentarios para mostrar.
            </div>
        <?php endif; ?>
    </div>

    <div class="mt-6">
        <?php echo e($commentsPost->links()); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\blckweb\resources\views/livewire/comment-post.blade.php ENDPATH**/ ?>