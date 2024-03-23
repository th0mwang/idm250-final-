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




<?php
$query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
]);

if ( $query->have_posts() ):
    while ( $query->have_posts() ) : $query->the_post();
        echo '<h2>' .get_the_title(). '</h2> <br>';
        echo '<p>' .get_the_excerpt(). '</p>';
        echo '<a href "'.get_the_permalink().'">Read More</a>';
        echo '<hr>';
    endwhile;
    wp_reset_postdata();
endif;
?>

    
<?php get_footer(); ?>
</body>
</html>