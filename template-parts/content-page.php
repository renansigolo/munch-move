<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Featured Image -->
    <?php the_post_thumbnail('large', [
        'class' => 'featured-image'
    ]); ?>

    <!-- Utilities Bar -->
    <?php
    get_template_part('template-parts/content', 'utilities');
    ?>


    <div class="container entry-content">
        <div class="row">
            <!-- WP Content -->
            <div class="eight columns">
                <?php
                the_content();
                ?>
            </div>

            <!-- Related Links -->
            <div class="four columns">
                <?php
                get_template_part('template-parts/content', 'related-links');
                ?>
            </div>
        </div>

        <?php
        while (have_rows('content_sections')) : the_row();
        ?>
            <?php if (get_row_layout() == 'cards_section') : ?>
                <div class="row">
                    <div class="cards">
                        <?php while (have_rows('cards')) : the_row(); ?>
                            <div class="card-<?php echo $category_color ?>">
                                <?php
                                $card_image = get_sub_field('image');
                                if ($card_image) :
                                ?>
                                    <div class="card__header">
                                        <img src="<?php echo $card_image['url'];  ?>" alt="<?php echo $card_image['alt'];  ?>">
                                    </div>
                                <?php endif; ?>
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
                                            <button class="btn-<?php echo $category_color ?>"><?php echo $button_title; ?></button>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
        <?php
            endif;
        endwhile;
        ?>



    </div>

    <?php if (get_edit_post_link()) : ?>

    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->