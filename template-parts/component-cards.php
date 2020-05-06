<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'cards_block') :
    $category = get_sub_field('category');
    $grid_rows = get_sub_field_object('cards_per_row')['value'];
    $has_video = get_sub_field('video_cards');
?>
    <div class="row">
        <div class="grid-<?php echo $grid_rows ?> cards">
            <?php while (have_rows('cards')) : the_row(); ?>
                <div class="card-<?php echo $category ?>">
                    <?php
                    $card_image = get_sub_field('image');
                    ?>
                    <div class="card__header">
                        <?php if (!$has_video) : ?>
                            <img src="<?php echo $card_image['url'];  ?>" alt="<?php echo $card_image['alt'];  ?>">
                        <?php else :  ?>
                            <div class="embed-container">
                                <?php the_sub_field('video'); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="card__content">
                        <div>
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('description'); ?></p>
                        </div>
                        <?php
                        $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                            <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>">
                                <button class="btn-<?php echo $category ?>"><?php echo $button_title; ?></button>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>