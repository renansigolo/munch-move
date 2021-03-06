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
              <div class="staff-form" id="js-staff-form">
                <h4>Enter password:</h4>
                <div class="staff-form__content row">
                  <div class="ten columns"><input type="password" name="password"></div>
                  <div class="two columns"><button class="btn-general" id="navbar-btn-search" onclick="authStaff()">Login</button></div>
                </div>
              </div>

              <div class="staff-content">
                <div class="staff-content__authenticated" id="js-authenticated">
                  <a href="<?php echo site_url('/munch-move-program-training/staff-development-kit-and-resource-manual/staff-development-kit/') ?>" target="_blank">
                    <button class="btn-training">
                      Click here to access the NEW Munch & Move Staff Development Kit
                    </button>
                  </a>
                  <a href="<?php echo site_url('/munch-move-program-training/staff-development-kit-and-resource-manual/resource-manual/') ?>" target="_blank">
                    <button class="btn-training">
                      Click here to access the Munch & Move Resource Manual
                    </button>
                  </a>
                </div>
                <div class="staff-content__error" id="js-auth-error">
                  <p>It looks like this password is not valid</p>
                </div>
              </div>
            <?php else : ?>
              <div class="search-form">
                <h4>Enter keywords to search this site:</h4>
                <form action="/" method="get">
                  <div class="search-form__content">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" style="margin-bottom: 8px"/>
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
