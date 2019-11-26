<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Munch_&_Move
 */

?>

</div><!-- #content -->

<footer id="colophon" class="footer">

	<div class="container">
		<div class="footer__partners">
			<img src="<?php echo get_template_directory_uri() . '/images/logos/nsw-logo.svg' ?>" width="47px" alt="NSW Logo">
			<img src="<?php echo get_template_directory_uri() . '/images/logos/heart-foundation-logo.svg' ?>" width="118px" alt="Hearth Foundation Logo">
		</div>
		<div class="footer__copyright">
			An initiative of NSW Ministry of Health, NSW Department of Education, Office of Sport and the Heart Foundation.
		</div>
		<div class="footer__accessibility">
			<div class="row">Share</div>
			<div class="row">Copyright 2019 Healthy Kids</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>