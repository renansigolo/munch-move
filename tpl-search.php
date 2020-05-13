<?php

/**
 * 
 * Template Name: Search Template
 * 
 * The template for displaying the Search and Staff Development Pages
 *
 * @package Munch_&_Move
 */

get_header();
?>

<div id="tpl-search">
  <main id="main">
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
            <!-- WP Content -->
            <?php the_content() ?>

            <?php
            $page_id = get_the_ID();
            if ($page_id  === 131) : ?>
              <div class="search-form">
                <h4>Enter password:</h4>
                <div class="search-form__content">
                  <input type="password" name="password">
                  <button class="btn-general" id="navbar-btn-search">Login</button>
                </div>
              </div>
            <?php else : ?>
              <div class="search-form">
                <h4>Enter keywords to search this site:</h4>
                <form action="/" method="get">
                  <div class="search-form__content">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
                    <button class="btn-general">Search</button>
                  </div>
                </form>
              </div>
            <?php endif ?>
          </div>
        </div>

        <!-- Related Links -->
        <div class="four columns">
          <?php get_template_part('template-parts/component', 'related-links') ?>
        </div>
      </div>
    </div>
  </main><!-- #ID-<?php the_ID(); ?> -->
</div>

<?php get_footer();
