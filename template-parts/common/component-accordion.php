<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'accordion_block') : ?>
    <section>
        <div class="row">
            <div class="<?php if (the_sub_field('columns')) ?> columns">
                <?php while (have_rows('accordion_list')) : the_row(); ?>
                    <div class="accordion-row">
                        <button class="accordion"><?php the_sub_field('accordion_title') ?></button>
                        <div class="panel">
                            <ul>
                                <?php while (have_rows('accordion_items')) : the_row();
                                    $item = get_sub_field('accordion_item');
                                    if ($item) :
                                        $item_url = $item['url'];
                                        $item_title = $item['title'];
                                        $item_target = $item['target'] ? $item['target'] : '_blank';
                                ?>
                                        <li><a href="<?php echo $item_url ?>" target="<?php echo $item_target ?>"><?php echo $item_title ?></a></li>
                                <?php
                                    endif;
                                endwhile;
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>
<?php endif ?>