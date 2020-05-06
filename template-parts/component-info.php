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
    <section class="content">
        <div class="row">
            <h2><?php if (the_sub_field('info_heading')) : ?><?php endif ?></h2>
            <p><?php if (the_sub_field('info_content')) : ?> <?php endif ?></p>
            <?php
            $button = get_sub_field('info_button');
            if ($button) :
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
                <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>">
                    <button class="btn-general"><?php echo $button_title; ?></button>
                </a>
            <?php endif; ?>
        </div>
    </section>
<?php endif ?>