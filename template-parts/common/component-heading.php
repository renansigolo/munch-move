<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'heading_block') : ?>

    <?php $heading_element = get_sub_field_object('heading_style')['value']; ?>

    <div class="row">
        <<?php echo esc_html($heading_element); ?>>
            <?php if (the_sub_field('heading')) ?>
        </<?php echo esc_html($heading_element); ?>>
    </div>
<?php endif ?>