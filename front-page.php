<?php

/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */

get_header();?>

<div id="front-page">
  <main id="main">

    <section class="moving container">
      <div class="moving__header">
        <img src="<?php echo get_template_directory_uri() .
    '/images/logo/healthy-kids-logo.svg'; ?>" alt="Healthy Kids Logo">
        <h1>We're no longer available!</h1>
        <p>Thank you for visiting us over the years. Our website is no longer around, but we have moved our most popular
          information to our partner websites. Munch & Move content is still available, and you can access it <a
            href="https://www.healthykids.nsw.gov.au/campaigns-programs/about-munch-move.aspx" target="_blank"
            rel="noopener noreferrer">here</a>.
      </div>
    </section>

  </main>
</div>

<?php get_footer();