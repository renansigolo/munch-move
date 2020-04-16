<?php
/**
 * Template part for displaying the footer in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<div id="footer-copyright">
	<div class="container">
		<div class="footer__logo">
			<img src="<?php echo get_template_directory_uri() .
       '/images/logo/nsw-logo.svg'; ?>" height="60px" alt="NSW Logo">
		</div>
		<div class="footer__navigation">
		<?php wp_nav_menu(array(
            'theme_location' => 'footer_menu'
        )); ?>
		<p class="footer_copyright">Copyright © 2020 Munch & Move</p>
		</div>
	</div>
</div>