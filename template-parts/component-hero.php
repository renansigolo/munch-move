<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<section>
    <!-- Featured Image -->
    <?php the_post_thumbnail('large', ['class' => 'featured-image']); ?>

    <!-- Utilities Bar -->
    <?php get_template_part('template-parts/component', 'utilities'); ?>
</section>