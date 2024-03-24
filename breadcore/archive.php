<?php get_header(); ?>
<div class="blog">
<?php
if (have_posts() ) :
    while (have_posts() ) : the_post();
        echo '<div class="grid">';
        echo get_the_post_thumbnail( $post_id, 'thumbnail' );
        echo '<h2>' .get_the_title(). '</h2>';
        echo '<p>' .get_the_excerpt(). '</p>';
        echo '<a class="link" href="'.get_the_permalink().'">Read More</a>';
        echo '<hr>';
        echo '</div>';
    endwhile;
else:
    echo '<p>No content found</p>';
endif;

?>
</div>

<?php get_footer(); ?>