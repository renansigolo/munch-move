<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<section class="no-results not-found">
    <header class="container" style="margin-top: 32px">
        <h2><?php esc_html_e('Nothing Found', 'munch-move'); ?></h2>
    </header>

    <div class="search-content">
        <?php if (is_search()) : ?>
            <p><?php esc_html_e(
                    'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
                    'munch-move'
                ); ?></p>
        <?php
        endif; ?>
    </div>
</section>