<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="post-inner thin">
    <div class="entry-content">
      <div>
        <div>
          <input type="text" id="autcomplete">
          <input class="wp-serverless-search-input" type="text" id="userinput" placeholder="Search by movie title ...">
        </div>
        <div id="suggestions"></div>
      </div>
    </div><!-- .entry-content -->
  </div>
</main><!-- #site-content -->

<?php
get_footer();
