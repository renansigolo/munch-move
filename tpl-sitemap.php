<?php

/**
 * 
 * Template Name: Sitemap
 * 
 * The template for displaying the Sitemap
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

              <div class="sitemap-content">
                <!-- <?php the_content(); ?> -->
                <?php
                // Exclude the Following pages with their respectives ID
                // - Accessibility -> 80
                // - Copyright Notice -> 98
                // - Disclaimer -> 78
                // - Privacy -> 3
                // - Search -> 85
                // - Sitemap -> 89

                $args = array(
                  'depth'        => 0,
                  'date_format'  => get_option('date_format'),
                  'child_of'     => 0,
                  'exclude'      => '80,98,78,3,85,89',
                  'title_li'     => __(''),
                  'echo'         => 1,
                  'sort_column'  => 'menu_order',
                  'link_before'  => '',
                  'link_after'   => '',
                  'item_spacing' => 'preserve',
                  'walker'       => '',
                );

                wp_list_pages($args);

                ?>

              </div>
            </div><!-- #ID-<?php the_ID(); ?> -->

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
