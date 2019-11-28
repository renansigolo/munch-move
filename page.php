<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()):
      the_post();
  endwhile;
// End of the loop.
?>

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
							<img src="<?php echo get_template_directory_uri() .
           '/images/mm-hero.svg'; ?>" alt="Munch & Move Logo">
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

					<div class="hero__form">
						<?php echo do_shortcode('[contact-form-7 id="11" title="Notify Form"]'); ?>
					</div>

				</div>
			</div>

		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
