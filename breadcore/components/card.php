<article class="relative isolate flex flex-col gap-8 lg:flex-row" data-component="card">
  <?php if (has_post_thumbnail()): ?>
  <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
    <?php the_post_thumbnail('full', ['class' => 'absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover']); ?>
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <?php endif; ?>
  <div>
    <div class="flex items-center stext-xs">
      <time datetime="<?php echo get_the_date('c'); ?>" class="font-semibold text-white pr-1.5 text-3xl"><?php echo get_the_date(); ?></time>
      <?php the_category('- '); // If you have multiple categories, this will display them.?>
    </div>
    <div class="group relative max-w-xl">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h3>
      <p class="mt-5 text-sm leading-6 text-gray-600">
        <?php the_excerpt(); ?></p>
    </div>
    <div class="mt-6 flex border-t border-gray-900/5 pt-6">
      <div class="relative flex items-center gap-x-4">
        <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'h-10 w-10 rounded-full']); ?>
        <div class="text-sm leading-6">
          <p class="font-semibold text-gray-900">
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>
          </p>
          <p class="text-gray-600">
            <?php the_author_meta('description'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</article>