<?php
/* Template Name: Project Listing */

get_header();

// Define WP_Query parameters to fetch projects
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'projects',
    'posts_per_page' => 6,
    'paged' => $paged,
];

// Create a new WP_Query instance
$projects_query = new WP_Query($args);
?>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo get_the_title(); ?></h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">All of the blogs</p>
    </div>
    <div
      class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

      <?php if ($projects_query->have_posts()):
          while ($projects_query->have_posts()) : $projects_query->the_post();
              get_template_part('components/card-overlay');
          endwhile; ?>

      <!-- Pagination -->
      <div class="pagination">
        <?php
          echo paginate_links([
              'total' => $projects_query->max_num_pages,
              'prev_text' => __('Prev'),
              'next_text' => __('Next'),
          ]);
          ?>
      </div>

      <?php else : ?>
      <p>No projects found.</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); // Restore global post data stomped by the_post().?>
    </div>
  </div>
</div>

<?php get_footer(); ?>