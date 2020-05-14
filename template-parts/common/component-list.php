<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'list_block') : ?>
    <div class="row">
        <div class="eight columns <?php if (the_sub_field('list_style')) ?>">
            <ul>
                <?php while (have_rows('list')) : the_row();
                    $link = get_sub_field('arrow_list_item');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                        <li>
                            <a href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                        </li>
                <?php
                    endif;
                endwhile;
                ?>
        </div>
    </div>
<?php endif ?>