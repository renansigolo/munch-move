<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'text_block') : ?>
    <div class="row">
        <div class="<?php if (the_sub_field('columns')) ?> columns">
            <?php if (the_sub_field('text_area')) ?>
        </div>
    </div>
<?php endif ?>