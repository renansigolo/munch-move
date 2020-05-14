<?php

/**
 * 
 * Template Name: Characters Poster
 * 
 * The template for displaying the Characters Poster Page
 *
 * @package Munch_&_Move
 */

get_header();
?>

<div id="tpl-characters-poster">
  <main id="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- Hero Banner -->
      <?php get_template_part('template-parts/component', 'hero'); ?>

      <div class="container entry-content">
        <div class="row">
          <!-- WP Content -->
          <div class="eight columns">
            <header class="entry-header">
              <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="mm-content">
              <?php the_content(); ?>
            </div>
          </div>

          <!-- Related Links -->
          <div class="four columns">
            <?php get_template_part('template-parts/component', 'related-links'); ?>
          </div>
        </div>

        <div class="mm-content">
          <?php while (have_rows('common_blocks')) : the_row();
            get_template_part('template-parts/common/component', 'heading');
            get_template_part('template-parts/common/component', 'text-area');
            get_template_part('template-parts/common/component', 'list');
            get_template_part('template-parts/common/component', 'cards');
          endwhile; ?>
        </div>
      </div>

    </article><!-- #post-<?php the_ID(); ?> -->
  </main>
</div>

<?php get_footer();
