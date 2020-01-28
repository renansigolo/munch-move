<?php

/**
 * The template for displaying the homepage
 *
 * @package YRTK
 */

get_header(); ?>

<div id="front-page">
  <main id="main">

    <section class="moving container">
      <div class="moving__header">
        <img src="<?php echo get_template_directory_uri() .
            '/images/logos/healthy-kids-logo.svg'; ?>" alt="Healthy Kids Logo">
        <h1>We're no longer available!</h1>
        <p>Thank you for visiting us over the years. Our website is no longer around, but we have moved our most popular information to our partner websites. Munch & Move content is still available, and you can access it <a href="https://www.healthykids.nsw.gov.au/campaigns-programs/about-munch-move.aspx" target="_blank" rel="noopener noreferrer">here</a>.
      </div>

      <div class="row">
        <div class="one-third column">
          <div class="card resources">
            <div class="card__title">
              <h2>Resources</h2>
              <img src="<?php echo get_template_directory_uri() .
                  '/images/front-page/resources.jpg'; ?>" alt="Resources Image">
            </div>
            <div class="card__content">
              <div>
                <h6>Healthy Kids Factsheets</h6>
                <p>Our factsheets can be found <a href="https://www.health.nsw.gov.au/heal/Pages/default.aspx" target="_blank" rel="noopener noreferrer">here</a>.</p>
              </div>
              <div>
                <h6>Supported Playgroups</h6>
                <p>Resources are available <a href="https://www.health.nsw.gov.au/heal/Pages/default.aspx" target="_blank" rel="noopener noreferrer">here</a>.</p>
              </div>
              <div>
                <h6>Recipes</h6>
                <p>Healthy recepies are available <a href="https://www.heartfoundation.org.au/recipes" target="_blank" rel="noopener noreferrer">here</a>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="one-third column">
          <div class="card schools">
            <div class="card__title">
              <h2>Schools</h2>
              <img src="<?php echo get_template_directory_uri() .
                  '/images/front-page/schools.jpg'; ?>" alt="Resources Image">
            </div>
            <div class="card__content">
              <div>
                <p>Information on Live Life Well @ School, Crunch & Sip and Out of School Hours care (OOSH) can be found <a href="https://www.health.nsw.gov.au/heal/primaryschools/Pages/default.aspx" target="_blank" rel="noopener noreferrer">here</a>.</p>
              </div>
              <div>
                <h6>Healthy School Canteens</h6>
                <p>Please visit <a href="https://healthyschoolcanteens.nsw.gov.au/" target="_blank" rel="noopener noreferrer">Healthy School Canteens</a> website for information.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="one-third column">
          <div class="card sports">
            <div class="card__title">
              <h2>Sports</h2>
              <img src="<?php echo get_template_directory_uri() .
                  '/images/front-page/sports.jpg'; ?>" alt="Resources Image">
            </div>
            <div class="card__content">
              <div>
                <h6>Active Kids Voucher</h6>
                <p>Find information on Active Kids voucher <a href="https://www.service.nsw.gov.au/transaction/apply-active-kids-voucher" target="_blank" rel="noopener noreferrer">here</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
</div>

<?php get_footer();
