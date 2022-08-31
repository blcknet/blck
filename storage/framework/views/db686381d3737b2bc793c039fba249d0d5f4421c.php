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
            content="Desarrollo de aplicaciones web,sitios web a medida, landing page, tiendas en línea y mucho más. Conoce nuestros planes y precios en nuestro sitio web.">
     <?php $__env->endSlot(); ?>

    <?php $__env->startSection('title', 'BLCKNet - entrada'); ?>
    <!-- Blog post -->
    <section class="relative">
        <!-- Background image -->
        <div class="absolute inset-0 h-128 pt-16 box-content">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="<?php echo e(asset('images/hero-bg.jpg')); ?>"
                width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">
                    <article>
                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="h1 font-red-hat-display mb-4" data-aos="fade-down"><?php echo e($post->name); ?></h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150"><?php echo e($post->extract); ?></p>
                            </div>
                            <!-- Article meta -->
                            <div class="md:flex md:items-center md:justify-between mt-5">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center" data-aos="fade-down" data-aos-delay="300">
                                    <a>
                                        <img class="rounded-full shrink-0 mr-3"
                                            src="<?php echo e($post->user->profile_photo_url); ?>" width="32" height="32"
                                            alt="Author 04" />
                                    </a>

                                    <div>
                                        <span class="text-gray-600 dark:text-gray-400">Por </span>
                                        <a
                                            class="font-medium text-gray-800 dark:text-gray-300"><?php echo e($post->user->name); ?></a>
                                        <span class="text-gray-600 dark:text-gray-400">
                                            <?php echo e($post->created_at->format('d M, Y')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="m-1.5 relative">
                            <img class="object-center object-cover w-full" data-aos="fade-down"
                                src="<?php echo e(Storage::url($post->image->url)); ?>" alt="<?php echo e($post->name); ?>">
                            <!-- Start -->
                            <div data-aos="fade-right"
                                class="absolute top-3 left-3 text-xs inline-flex font-medium bg-blue-100 text-blue-600 rounded-full text-center px-2.5 py-1">
                                <?php echo e($post->category->name); ?></div>
                            <!-- End -->
                        </div>
                        <div class="m-1.5">
                            <!-- Start -->
                            <?php $__currentLoopData = $post->tags->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="text-xs inline-flex font-medium bg-slate-700 text-slate-100 rounded-full text-center px-2.5 py-1">
                                    <?php echo e($tag->name); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- End -->
                        </div>
                        <!-- Article content -->
                        <div class="mt-6 text-lg text-gray-600 dark:text-gray-400" data-aos="fade-up">
                            <?php echo $post->body; ?>

                        </div>
                    </article>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('comment-post', ['post' => $post])->html();
} elseif ($_instance->childHasBeenRendered('j3mtv1f')) {
    $componentId = $_instance->getRenderedChildComponentId('j3mtv1f');
    $componentTag = $_instance->getRenderedChildComponentTagName('j3mtv1f');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j3mtv1f');
} else {
    $response = \Livewire\Livewire::mount('comment-post', ['post' => $post]);
    $html = $response->html();
    $_instance->logRenderedChild('j3mtv1f', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </section>
    <!-- Related posts -->
    <aside>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <?php if($related_posts->count()): ?>
                        <h4 class="h4 font-red-hat-display mb-8">Articulos relacionados</h4>

                        <!-- Articles container -->
                        <div class="grid gap-4 sm:gap-6 sm:grid-cols-2" data-aos-id-relposts>

                            <?php $__currentLoopData = $related_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- 1st article -->
                                <article class="relative group p-6 text-white" data-aos="fade-down"
                                    data-aos-anchor="[data-aos-id-relposts]">
                                    <figure>
                                        <img class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:opacity-75 transition duration-700 ease-out"
                                            src="<?php echo e(Storage::url($related->image->url)); ?>" width="372"
                                            height="182" alt="<?php echo e($related->name); ?>" />
                                        <div class="absolute inset-0 bg-teal-500 opacity-75 group-hover:opacity-50 transition duration-700 ease-out"
                                            aria-hidden="true"></div>
                                    </figure>

                                    <div class="relative flex flex-col h-full">
                                        <header class="grow">
                                            <div>
                                                <a href="<?php echo e(route('home.blogpost', $related)); ?>"
                                                    class="text-lg font-red-hat-display font-bold tracking-tight mb-2">
                                                    <?php echo e($related->name); ?>

                                                </a>
                                            </div>
                                            <div class="text-sm opacity-80"><?php echo e($related->created_at); ?></div>
                                        </header>
                                        <footer>
                                            <!-- Author meta -->
                                            <div class="flex items-center text-sm mt-5">
                                                <div>
                                                    <img class="rounded-full shrink-0 mr-3"
                                                        src="<?php echo e($related->user->profile_photo_url); ?>" width="32"
                                                        height="32" alt="<?php echo e($related->user->name); ?>" />
                                                </div>
                                                <div>
                                                    <span class="opacity-75">Por </span>
                                                    <div class="font-medium">
                                                        <?php echo e($related->user->name); ?></div>
                                                </div>
                                            </div>
                                        </footer>
                                    </div>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    <?php else: ?>
                        <h4 class="h4 font-red-hat-display mb-8">No hay articulos relacionados</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </aside>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\blckweb\resources\views/home/blog-post.blade.php ENDPATH**/ ?>