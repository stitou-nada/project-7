<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Working with TMDb API in Laravel 9 - LaravelTuts</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- TailwindCss CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="flex items-center p-4 w-[920px]">
                        <div class="w-3/12">
                            <img src="https://www.themoviedb.org/t/p/w220_and_h330_face<?php echo e($data['poster_path']); ?>" alt="Poster" class="rounded ">
                        </div>
                        <div class="w-9/12">
                            <div class="ml-5">
                                <h2 class="text-2xl text-gray-900 font-semibold mb-2"><?php echo e($data['title']); ?> (<?php echo e(date('Y',strtotime($data['release_date']))); ?>)</h2>
                                <div class="mb-1 flex mb-4 sm:flex-nowrap flex-wrap">
                                    <?php if(count($data['genres']) > 0): ?>
                                        <?php
                                            $num_of_items = count($data['genres']);
                                            $num_count = 0;
                                        ?>
                                        <?php $__currentLoopData = $data['genres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleGenre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="text-sm">
                                                <?php echo e($singleGenre['name']); ?>

                                            </span>
                                            <?php
                                                $num_count = $num_count + 1;
                                                if ($num_count < $num_of_items) {
                                                    echo '<span class="mx-2 flex items-center">•</span>';
                                                }
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="flex items-center space-x-2 tracking-wide pb-1">
                                    <h1 class="text-gray-500">Release Date</h1>
                                    <p class="leading-6 text-sm"><?php echo e($data['release_date']); ?></p>
                                </div>
                                <div class="flex items-center space-x-2 tracking-wide pb-1">
                                    <h1 class="text-gray-500">Rating</h1>
                                    <p class="leading-6 text-sm"><?php echo e($data['vote_average']); ?></p>
                                </div>
                                <div class="flex items-center space-x-2 tracking-wide pb-1">
                                    <h1 class="text-gray-500">Duration</h1>
                                    <p class="leading-6 text-sm"><?php echo e($data['runtime']); ?> min</p>
                                </div>
                                <p class="leading-6 mt-5 text-gray-500"><?php echo e($data['overview']); ?></p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="text-center text-sm text-gray-500 sm:text-center my-5">
                    Tutorial By 
                    <a href="https://laraveltuts.com" class="ml-1 underline">
                        LaravelTuts.com
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\project-7\prototypes\3.prototype-premium\resources\views/demo.blade.php ENDPATH**/ ?>