<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Munch_&_Move
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php while (have_posts()) :
      the_post();
    endwhile;
    get_template_part('template-parts/content', get_post_type());
    ?>

  </main>
</div><!-- #ID-<?php the_ID(); ?> -->

<?php
get_footer();
