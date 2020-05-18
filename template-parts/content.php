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

    <!-- Hero Banner -->
    <?php get_template_part('template-parts/component', 'hero'); ?>

    <div class="container entry-content">
        <div class="row">
            <!-- WP Content -->
            <div class="eight columns">
                <header class="entry-header">
                    <?php
                    the_title('<h1 class="entry-title">', '</h1>');
                    ?>
                </header>

                <div class="mm-content">
                    <?php the_content() ?>
                </div>
            </div>

            <!-- Related Links -->
            <div class="four columns" style="height: 60vh;">
                <?php get_template_part('template-parts/component', 'related-links'); ?>
            </div>
        </div>

        <div class="cards">
            <?php while (have_rows('content_blocks')) : the_row() ?>
                <?php get_template_part('template-parts/component', 'cards') ?>
            <?php endwhile ?>
        </div>

        <div class="row">
            <!-- ACF Content -->
            <div class="eight columns">
                <div class="mm-content">
                    <?php while (have_rows('content_blocks')) : the_row() ?>
                        <?php get_template_part('template-parts/component', 'accordion') ?>
                        <?php get_template_part('template-parts/component', 'info') ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

    </div>

    <?php if (get_edit_post_link()) : ?><?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->