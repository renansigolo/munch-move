<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1>RELATED LINKS</h1>

	<?php munch_move_post_thumbnail(); ?>
	<?php munch_move_post_thumbnail(); ?>
	<?php munch_move_post_thumbnail(); ?>
	<?php munch_move_post_thumbnail(); ?>
	<?php munch_move_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
  the_content();

  wp_link_pages(array(
      'before' =>
          '<div class="page-links">' . esc_html__('Pages:', 'munch-move'),
      'after' => '</div>'
  ));
  ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
