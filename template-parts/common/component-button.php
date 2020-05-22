<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'button_block') : ?>
    <div class="row">
        <?php if (get_sub_field('button'));
        $link = get_sub_field('button');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a href="<?php echo $link_url ?>" target="<?php echo $link_target ?>">
                <button type="button" class="btn-general">
                    <?php echo $link_title ?>
                </button>
            </a>
        <?php endif ?>
    </div>
<?php endif ?>