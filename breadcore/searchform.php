<?php
/**
 * Custom Search Form Template
 *
 * This template defines a custom search form for the theme. It's designed to be both visually appealing and accessible,
 * following best practices for web development and design. The form uses the GET method to submit search queries to
 * the WordPress site, leveraging WordPress's built-in search functionality.
 *
 * @link - https://developer.wordpress.org/reference/functions/get_search_form/
 */
?>
<form class="w-full max-w-lg lg:max-w-xs" role="search" method="get" id="searchform"
  action="<?php echo home_url('/'); ?>">
  <label for="search" class="sr-only">Search</label>
  <div class="relative">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
      <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd"
          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
          clip-rule="evenodd" />
      </svg>
    </div>
    <input name="s" id="s"
      class="block w-full border-0 bg-gray-600 py-1.5 pl-10 pr-3 text-gray-300 placeholder:text-gray-400 focus:bg-white focus:text-gray-900 focus:ring-0 sm:text-sm sm:leading-6"
      placeholder="Search" type="search">
  </div>
</form>