<?php

/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */

get_header();?>

<div id="front-page" class="content-area">
  <main id="main" class="site-main">

    <section class="hero">
      <div class="background-banner" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">    
        <div>
          <div class="row">
            <div class="five columns">
              <div class="hero__content">
                <h1>Munch & Move is NSW Health initiative that supports the healthy development of children birth to 5 years</h1>
                <button class="btn-blue">Watch Video</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="utility">
          <div class="container">
              <div class="utility__menu">
                  <div>
                      <?php
                          if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                          }
                      ?>
                  </div>
                  <div class="utility__actions">
                    <ul>
                      <li id="print"><i class="fas fa-print"></i>Print</li>
                      <li id="share"><i class="fas fa-share-alt"></i>Share</li>
                      <li id="zoomOut">A-</li>
                      <li id="zoomReset">Ao</li>
                      <li id="zoomIn">A+</li>
                    </ul>
                  </div>
              </div>
          </div>
    </div>

    <section class="section-intro">
      <div class="container">
        <div class="eight columns">
          <?php the_content(); ?>
        </div>
        <div class="four columns">
        If you represent a large ECEC service provider/organisation, ECEC policy company, food service provider or related organisation, and are interested in working with us to help provide a healthier future for children across NSW, please contact us at: SWSLHD-MunchAndMoveOPH@health.nsw.gov.au
        If you are seeking local implementation support, please refer the Munch & Move Support page to contact a local Munch & Move Support Officer.
        </div>
      </div>
    </section>

    <section class="section-category">
      <div class="container">
        <div class="row section-category__header">
          <div class="twelve columns">
            <img src="<?php echo get_template_directory_uri() . '/images/mascots/carrot.svg'; ?>" alt="">
          </div>
          <div class="eight columns">
            <h2>About Munch & Move</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi blandit massa id ante porta, in commodo velit pellentesque. Duis in rhoncus magna, nec molestie velit.</p>
          </div>
        </div>
        
        <div class="row">
            <div class="cards">
                    <div class="card-blue">
                        <div class="card__header">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                        </div>
                        <div class="card__content">
                            <h4>Resources for families</h4>
                            <p>Find out why Munch & Move is being offered to NSW early childhood services.</p>
                            <button class="btn-blue">Learn More</button>
                        </div>
                    </div>
                    <div class="card-blue">
                        <div class="card__header">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                        </div>
                        <div class="card__content">
                            <h4>Resources for families</h4>
                            <p>Find out why Munch & Move is being offered to NSW early childhood services.</p>
                            <button class="btn-blue">Learn More</button>
                        </div>
                    </div>
                    <div class="card-blue">
                        <div class="card__header">
                            <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                        </div>
                        <div class="card__content">
                            <h4>Resources for families</h4>
                            <p>Find out why Munch & Move is being offered to NSW early childhood services.</p>
                            <button class="btn-blue">Learn More</button>
                        </div>
                    </div>

            </div>
        </div>
      </div>
    </section>

  </main>
  
<?php get_footer();
