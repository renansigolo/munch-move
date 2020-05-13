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

    <!-- Sitemap Content -->
    <section>
      <?php while (have_posts()) : the_post(); ?>

        <div class="container entry-content">
          <div class="row">

            <!-- WP Content -->
            <div class="eight columns">
              <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
              </header>

              <div>
                <!-- <?php the_content(); ?> -->


                <?php wp_list_pages(); ?>

              </div>
            </div>

            <!-- Related Links -->
            <div class="four columns">
              <?php get_template_part('template-parts/component', 'related-links'); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </section>
  </main>
</div>

<?php get_footer();
