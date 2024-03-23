<?php $image = get_featured_image_data(get_the_ID()); ?>
<article class="flex flex-col items-start justify-between">
  <div class="relative w-full">
    <?php if ($image): ?>
    <img class="w-full" src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="mb-4">

    <?php endif; ?>
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <div class="max-w-xl">
    <div class="mt-8 flex items-center gap-x-4 text-xs">
      <time datetime="<?php echo get_the_date('c'); ?>" class="text-gray-500"><?php echo get_the_date(); ?></time>
      <?php the_category('- '); ?>
    </div>
    <div class="group relative">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h3>
      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>

  </div>
</article>