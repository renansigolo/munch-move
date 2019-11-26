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
			<img src="<?php echo get_template_directory_uri() . '/images/nsw-logo.svg' ?>" width="47px" alt="NSW Logo">
			<!-- <img src="<?php echo get_template_directory_uri() . '/images/hf-logo.svg' ?>" width="118px" alt="Hearth Foundation Logo"> -->
		</div>
		<div class="footer__copyright">
			<p>An initiative of NSW Ministry of Health,<br /> NSW Department of Education, Office<br /> of Sport and the Heart Foundation.<br /> Copyright 2019 Healthy Kids.</p>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>