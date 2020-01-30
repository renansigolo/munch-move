<?php
/* Template Name: Privacy Policy - Page */
?>

/**
* The template for displaying the homepage
*
* @package Munch_&_Move
*/<?php
/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */
?>get_header(); ?>

<div id="privacy-policy-template">
  <main id="main">

    <section class="container">

      <?php while (have_posts()):
        the_post();
        get_template_part('template-parts/content', 'page');
    endwhile; ?>

    </section>

  </main>
</div>

<?php get_footer();