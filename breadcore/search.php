<?php
/**
 * Search Results Template
 *
 * The search.php template file is responsible for displaying search results to users. When a search is performed on the site,
 * WordPress uses this template to display the matching results. It's an essential component of the theme's search functionality,
 * ensuring users can find the content they're looking for.
 *
 * This template can be customized to match the look and feel of your theme, while also providing a seamless user experience
 * for site visitors conducting searches. It includes a loop that iterates over each search result, displaying relevant information
 * such as the post title, excerpt, and a link to the full post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
?>
<?php get_header(); ?>

<div class="backdrop-blur bg-opacity-50 bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Search Results for:
        <?php echo get_search_query(); ?>
      </h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"></p>
      <?php if (have_posts()) : ?>
      <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('components/card'); ?>
        <?php endwhile; ?>
      </div>
      <?php else : ?>
      <p>No results found for '<?php echo get_search_query(); ?>'.
        Try
        searching again with different keywords.</p>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>