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

<div id="search-template">
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
            <?php
            // WP Default Content Block
            the_content();
            ?>

            <?php
            $page_id = get_the_ID();
            if ($page_id  === 131) : ?>
              <div class="search-form">
                <h4>Enter password:</h4>
                <div class="search-form__content">
                  <input class="search-bar" type="password" name="password">
                  <button class="btn-general" id="navbar-btn-search">Login</button>
                </div>
              </div>
            <?php else : ?>
              <div class="search-form">
                <h4>Enter keywords to search this site:</h4>
                <div class="search-form__content">
                  <input class="search-bar" type="text" name="Search">
                  <button class="btn-general" id="navbar-btn-search">Search</button>
                </div>
              </div>

              <div class="search-results">
                <div>
                  <h2>
                    Munch & Move Resources
                  </h2>
                  <p>
                    There are a range of Munch & Move resources available to assist educators working in early childhood services to implement the Munch & Move key messages…
                  </p>
                </div>
                <div>
                  <h2>
                    Resource Order Forms
                  </h2>
                  <p>
                    Preschools and long day care services located in NSW can order Munch & Move program resources by completing and emailing or faxing the Order Form listed...
                  </p>
                </div>
                <div>
                  <h2>
                    Staff Development Kit and Resource Manual
                  </h2>
                  <p>
                    Please enter the password supplied to you by your Munch & Move Support Officer to access the Munch & Move Staff Development Kit and Munch & Move Resource Manual…
                  </p>
                </div>
              </div>
            <?php endif ?>
          </div>


        </div>

        <!-- Related Links -->
        <div class="four columns">
          <?php
          get_template_part('template-parts/component', 'related-links');
          ?>
        </div>
      </div>
    </div>
  </main><!-- #ID-<?php the_ID(); ?> -->
</div>

<?php get_footer();
