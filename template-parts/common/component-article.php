<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'article_block') : ?>
    <div class="row">
        <div class="six columns">
            <?php $image = get_sub_field('image');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="six columns">
            <?php the_sub_field('text_area') ?>
        </div>
    </div>
<?php endif ?>