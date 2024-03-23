<!DOCTYPE HTML>
<html lang='en'>

<body>
<?php get_header(); ?>
<form role="search" method="get" id="searchform" action="https://localhost/">

<!-- <input name="s" id="s"> -->
</form>
<h1 id="title" class="text-center text-[20vh] text-white underline underline-offset-[20px]">
<?php echo get_the_title();?>
</h1>
<?php get_template_part('components/heros/hero-split'); ?>
<?php get_template_part('components/content'); ?>





    
<?php get_footer(); ?>
</body>
</html>