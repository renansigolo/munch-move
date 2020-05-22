<?php

/**
 * 
 * Template Name: Munch & Move Full Width
 * 
 * The template for displaying the Centered Content
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
        <div class="row flex-center content-center">
          <!-- WP Content -->
          <div class="eight columns">
            <header class="entry-header">
              <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="mm-content">
              <?php
              the_content();
              while (have_rows('common_blocks')) : the_row();
                get_template_part('template-parts/common/component', 'heading');
                get_template_part('template-parts/common/component', 'text-area');
                get_template_part('template-parts/common/component', 'button');
                get_template_part('template-parts/common/component', 'list');
                get_template_part('template-parts/common/component', 'cards');
                get_template_part('template-parts/common/component', 'accordion');
                get_template_part('template-parts/common/component', 'article');
              endwhile;
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <section class="section-mascots text-center mascots-space-around">
            <img src="<?php echo get_template_directory_uri() . '/images/404/divider-fruits.svg'; ?>" alt="Divider Fruits">
            <h1>Not what you were after?</h1>
            <p>If you are an early childhood educator, you may wish to learn more about the Munch & Move program.</p>
            <a href="<?php echo $bottom_content['button']['url']; ?>">
              <button class="btn-general">Visit Munch & Move</button>
            </a>
          </section>
        </div>
      </div>

    </article><!-- #post-<?php the_ID(); ?> -->
  </main>
</div>

<?php get_footer();
