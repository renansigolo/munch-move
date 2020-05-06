<?php

/**
 * 
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Munch_&_Move
 */

get_header(); ?>

<?php
$main_content = get_field('404_main_content', 'option');
$quick_links = get_field('404_quick_links', 'option');
$bottom_content = get_field('404_bottom_content', 'option');
if ($main_content) {
    $image = $main_content['image'];
}

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="error-404 not-found container">
            <section class="section-decomissioned-content">
                <h1><?php echo $main_content['title']; ?></h1>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <div class="row flex-center">
                    <div class="eight columns">
                        <p><?php echo $main_content['description']; ?></p>
                    </div>
                </div>
            </section>

            <section class="section-quick-links">
                <h1><?php echo $quick_links['title'] ?></h1>

                <div class="quick-links">
                    <?php
                    while (have_rows('404_quick_links', 'option')) : the_row();
                        while (have_rows('cards')) : the_row();
                            $title = get_sub_field('title');
                    ?>
                            <div class="card-general">
                                <div class="card__header">
                                    <?php
                                    $card_image = get_sub_field('image');
                                    if ($card_image) :
                                    ?>
                                        <img src="<?php echo $card_image['url'];  ?>" alt="<?php echo $card_image['alt'];  ?>">
                                </div>
                                <div class="card__content">
                                    <h4><?php echo $title ?></h4>
                                    <ul>
                                        <?php while (have_rows('links')) : the_row(); ?>
                                            <li><a href="<?php echo get_sub_field('link')['url'] ?>" rel="noopener noreferrer"><?php echo get_sub_field('link')['title'] ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endwhile; ?>

                </div>
            </section>

            <section class="section-mascots">
                <img src="<?php echo get_template_directory_uri() . '/images/404/divider-fruits.svg'; ?>" alt="Divider Fruits">
                <h1><?php echo $bottom_content['title'] ?></h1>
                <a href="<?php echo $bottom_content['button']['url']; ?>">
                    <button class="btn-general"><?php echo $bottom_content['button']['title']; ?></button>
                </a>
            </section>
        </div>

    </main>
</div>

<?php get_footer();
