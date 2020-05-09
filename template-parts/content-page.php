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
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="mm-content">
                    <?php
                    // WP Default Content Block
                    the_content();

                    // Accordion Block
                    while (have_rows('content_blocks')) : the_row();
                        get_template_part('template-parts/component', 'accordion');
                    endwhile ?>
                </div>
            </div>
            <!-- Related Links -->
            <div class="four columns">
                <?php
                get_template_part('template-parts/component', 'related-links');
                ?>
            </div>
        </div>

        <div class="cards">
            <!-- Cards Block -->
            <?php while (have_rows('content_blocks')) : the_row();
                get_template_part('template-parts/component', 'cards');
            endwhile; ?>
        </div>

        <div class="row">
            <!-- ACF Content -->
            <div class="eight columns">
                <div class="mm-content">
                    <?php while (have_rows('content_blocks')) : the_row();
                        get_template_part('template-parts/component', 'info');
                        get_template_part('template-parts/component', 'playlist');
                    endwhile ?>
                </div>
            </div>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->