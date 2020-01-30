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

    <?php the_post_thumbnail('large', [
            'class' => 'featured-image'
        ]); ?>

    <div class="featured-image-actions">
        <div>
            <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
        </div>
        <div>
            <a href="#!" class="btn--print"></a>
            <a href="#!" class="btn--font-small zoomOut"></a>
            <a href="#!" class="btn--font-reset zoomReset"></a>
            <a href="#!" class="btn--font-big zoomIn"></a>
        </div>
    </div>

    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <div class="entry-content container">
        <?php
  the_content();

  wp_link_pages(array(
      'before' =>
          '<div class="page-links">' . esc_html__('Pages:', 'munch-move'),
      'after' => '</div>'
  ));
  ?>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()): ?>

    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->