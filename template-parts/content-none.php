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
    <header>
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'munch-move'); ?></h1>
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