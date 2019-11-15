<?php

/**
 * The template for displaying the homepage
 *
 * @package YRTK
 */

get_header();
?>

<div id="front-page" class="content-area">
  <main id="main" class="site-main">
</div>

<section class="hero">

  <!-- <div class="hero__clouds">
    <div></div>
  </div> -->

  <div class="hero__title">
    <h1>We’ve moved!</h1>
    <p>Welcome to munchandmove.com.au<br />(formerly healthykids.nsw.gov.au)</p>
  </div>

  <div class="hero__banner">
    <div class="container">
      <div class="row">
        <div class="eight columns u-max-full-width">
          <img src="<?php echo get_template_directory_uri() . '/images/mm-hero.svg' ?>" alt="Munch & Move Logo">
        </div>
      </div>
    </div>
  </div>

  <div class="hero__content">
    <div class="container">
      <div class="row">
        <div class="eight columns">
          <h3>Lorem Ipsum is simply dummy text</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>
      <form action="submit" class="hero__form">
        <input type="text" name="firstName" id="firstName" placeholder="First Name" aria-placeholder="First Name">
        <input type="email" name="email" id="email" placeholder="Email" aria-placeholder="Email">
        <button type="submit">Notify me when live!</button>
      </form>
    </div>
  </div>

</section>

</main>
</div>

<?php
get_footer();
