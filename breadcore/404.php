<?php get_header('simple'); ?>
<div class="empty">
<h1 class="font-bold text-center">404</h1>
</div>
<p class="font-bold text-center">Oops! Page not found</p>
<?php wp_nav_menu([
    'theme_location' => '404-menu'
]); ?>
<?php get_footer(); ?>
