<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'info_block') : ?>
    <section class="mm-content">
        <div class="row">
            <p><?php if (the_sub_field('info_content')) : ?> <?php endif ?></p>
        </div>
    </section>
<?php endif ?>