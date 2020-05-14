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
    $video_cards_heading = get_sub_field('video_cards_heading'); ?>
    <div class="row">
        <div class="cards">
            <?php if ($grid_rows == 1) : ?> <div class="columns eight"> <?php endif ?>
                <?php if ($video_cards_heading) : ?>
                    <div class="line-throught-text cards__heading">
                        <h2><span><?php echo $video_cards_heading ?></span></h2>
                    </div>
                <?php endif ?>

                <div class="grid-<?php echo $grid_rows ?>">
                    <?php while (have_rows('cards')) : the_row(); ?>
                        <div class="card-<?php echo $category ?>">
                            <?php if (get_sub_field('individual_card_title')) : ?>
                                <h2 class="card__heading"><?php echo get_sub_field('individual_card_title') ?></h2>
                            <?php endif ?>
                            <div class="card__header">
                                <?php $card_image = get_sub_field('image'); ?>

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
                                <?php $button = get_sub_field('button');
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
                <?php if ($grid_rows == 1) : ?>
                </div>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>