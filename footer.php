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
			<div class="row"></div>
			<div class="row"></div>
			<img src="<?php echo get_template_directory_uri() .
       '/images/logos/nsw-logo.svg'; ?>" height="60px" alt="NSW Logo">
			<img src="<?php echo get_template_directory_uri() .
       '/images/logos/heart-foundation-logo.svg'; ?>" height="60px" alt="Hearth Foundation Logo">
		</div>
		<div class="footer__copyright">
			<p id="copyright-text">Copyright 2019 Healthy Kids</p>
			<p>An initiative of NSW Ministry of Health, NSW Department of Education, Office of Sport and the Heart Foundation.</p>
		</div>
		<div class="footer__accessibility">
			<div class="row footer__accessibility--actions">
				<!-- <a href="#" onclick="window.print(); return false;" title="Print this page">Print this page</a> -->
				<!-- <button onclick="window.print(); return false;">Print</button> -->
				<!-- <button id="btn-print">P</button> -->
				<!-- <button id="btn-zoom-out">A-</button> -->
				<!-- <button id="btn-zoom-reset">A0</button> -->
				<!-- <button id="btn-zoom-in">A+</button> -->

				<a href="#!" class="custom-icon--mail"></a>
				<a href="#!" class="custom-icon--print"></a>
				<a href="#!" class="custom-icon--font"></a>



			</div>
			<div class="row">Copyright 2019 Healthy Kids</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>