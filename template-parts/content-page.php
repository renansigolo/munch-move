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

    <!-- Utilities Bar -->
    <?php
    get_template_part('template-parts/content', 'utilities');
    ?>

    <!-- <div class="utility">
        <div class="container">
            <div class="utility__menu">
                <div>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
                <div class="utility__actions">
                    <ul>
                        <li id="print"><i class="fas fa-print"></i>Print</li>
                        <li id="share"><i class="fas fa-share-alt"></i>Share</li>
                        <li id="zoomOut">A-</li>
                        <li id="zoomReset">Ao</li>
                        <li id="zoomIn">A+</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container entry-content">
        <div class="row">
            <div class="eight columns">
                <?php
                the_content();
                ?>
            </div>

            <!-- Related Links -->
            <div class="four columns">
                <?php
                get_template_part('template-parts/content', 'related-links');
                ?>
            </div>
        </div>

    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>

    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->