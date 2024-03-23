<article
  class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
  <?php if (has_post_thumbnail()) : ?>
  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"
    class="absolute inset-0 -z-10 h-full w-full object-cover">
  <?php endif; ?>
  <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
  <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

  <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
    <!-- Additional details like author or categories can go here -->
  </div>
  <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
</article>