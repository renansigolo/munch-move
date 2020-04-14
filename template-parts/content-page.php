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

    <div class="utility">
        <div class="container">
            <div class="utility__menu">
                <div>
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                </div>
                <div class="utility__actions">
                    <a href="#!" class="">
                        <i class="fas fa-print"></i>
                        Print
                    </a>
                    <a href="#!" class="">
                        <i class="fas fa-share-alt"></i>
                        Share
                    </a>
                    <a href="#!" class="">A-</a>
                    <a href="#!" class="">Ao</a>
                    <a href="#!" class="">A+</a>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content container">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
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