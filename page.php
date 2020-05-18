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

get_header();
?>

<div id="primary" class="content-area">
	<div id="menu-overlay" class="active"></div>
	<main id="main" class="site-main">
		<?php get_template_part('template-parts/content', 'page'); ?>
	</main>
</div>

<?php get_footer();
