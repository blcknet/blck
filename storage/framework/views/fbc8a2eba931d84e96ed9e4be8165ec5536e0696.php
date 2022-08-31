<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('head', null, []); ?> 
        <meta name="robots" content="index">
        <meta name="description"
            content="Bienvenido a nuestro blog. Aqui encontrarás información
            relevante a cerca de temas como tecnología, desarrollo web, programación y mucho más...">
     <?php $__env->endSlot(); ?>

    <?php $__env->startSection('title', 'BLCKNet - Blog'); ?>
    <!-- Hero -->
    <section class="relative">

        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content -z-1">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="./images/hero-bg.jpg" width="1440"
                height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-16">
                <!-- Featured article -->
                <div class="max-w-3xl" data-aos="fade-down">
                    <article>
                        <header>
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1>
                                    <h1 class="h1 font-red-hat-display mb-4">Bienvenido a nuestro blog</h1>
                                </h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400">Aquí encontraras información
                                    relevante a cerca de temas de tecnología, desarrollo web, programación y mucho
                                    más...</p>
                            </div>
                        </header>
                    </article>
                </div>

            </div>
        </div>

    </section>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home-post-list')->html();
} elseif ($_instance->childHasBeenRendered('Y3N2GMB')) {
    $componentId = $_instance->getRenderedChildComponentId('Y3N2GMB');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y3N2GMB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y3N2GMB');
} else {
    $response = \Livewire\Livewire::mount('home-post-list');
    $html = $response->html();
    $_instance->logRenderedChild('Y3N2GMB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\blckweb\resources\views/home/blog.blade.php ENDPATH**/ ?>