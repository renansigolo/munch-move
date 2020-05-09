<?php

/**
 * 
 * Template Name: Sitemap
 * 
 * The template for displaying the Privacy Policy
 *
 * @package Munch_&_Move
 */

get_header();
?>

<div id="sitemap-template">
  <main id="main">

    <!-- Hero Banner -->
    <?php get_template_part('template-parts/component', 'hero'); ?>

    <section>
      <?php while (have_posts()) :
        the_post(); ?>

        <div class="container">
          <div class="row">
            <?php the_content(); ?>
          </div>
        </div>

      <?php endwhile; ?>

    </section>

  </main>
</div>

<?php get_footer();
