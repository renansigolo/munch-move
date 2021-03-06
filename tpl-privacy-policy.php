<?php

/**
 * 
 * Template Name: Privacy Policy
 * 
 * The template for displaying the Privacy Policy
 *
 * @package Munch_&_Move
 */

get_header();
?>

<div id="privacy-policy-template">
  <main id="main">

    <section>
      <?php while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
      endwhile; ?>

    </section>

  </main>
</div>

<?php get_footer();
