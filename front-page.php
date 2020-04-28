<?php

/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */

get_header(); ?>

<?php
$homePage = get_field('home-page');
?>

<div id="front-page" class="content-area">
    <main id="main" class="site-main">
        <section class="hero">
            <div class="hero__desktop">
                <div class="background-banner" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
                    <div class="row">
                        <div class="five columns">
                            <div class="hero-content">
                                <h1>Munch & Move is NSW Health initiative that supports the healthy development of
                                    children birth to 5 years</h1>
                                <button class="btn-blue">Watch Video</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__mobile">
                <img src="<?php echo the_post_thumbnail_url() ?>" alt="">
                <div class="mobile-hero-content">
                    <div class="container">
                        <h1>Munch & Move is NSW Health initiative that supports the healthy development of
                            children birth to 5 years</h1>
                        <div class="row flex-center">
                            <div class="ten columns">
                                <button class="btn-blue">Watch Video</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="utility">
            <div class="container">
                <div class="utility__menu">
                    <div>
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                        }
                        ?>
                    </div>
                    <div class="utility__actions">
                        <ul>
                            <li id="print"><i class="fas fa-print"></i>Print</li>
                            <li id="share"><i class="fas fa-share-alt"></i>Share</li>
                            <li id="zoomOut">A-</li>
                            <li id="zoomReset">Ao</li>
                            <li id="zoomIn">A+</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-intro">
            <div class="container">
                <div class="row">
                    <div class="seven columns">
                        <?php the_content(); ?>
                    </div>
                    <div class="one column"></div>
                    <div class="four columns">
                        <div class="side-article">
                            If you represent a large ECEC service provider/organisation, ECEC policy company, food
                            service provider or related organisation, and are interested in working with us to help
                            provide a healthier future for children across NSW, please contact us at: <a href="mailto:SWSLHD-MunchAndMoveOPH@health.nsw.gov.au">SWSLHD-MunchAndMoveOPH@health.nsw.gov.au</a>
                            If you are seeking local implementation support, please refer the <a href="#!" target="_blank" rel="noopener noreferrer">Munch & Move Support</a> page to contact a
                            local Munch & Move Support Officer.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-category">
            <div class="container">
                <?php     // Loop through rows.
                while (have_rows('content-rows')) : the_row();
                    // Case: Paragraph layout.
                    if (get_row_layout() == 'highlighted_content_row') :
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $category_color = get_sub_field('category');
                        $cards = get_sub_field('highlighted_content_row_cards');
                ?>
                        <div class="row section-category__header">
                            <div class="twelve columns">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <hr class="mascot-hr-<?php echo $category_color ?>">
                            </div>
                            <div class="eight columns">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $description; ?></p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="cards">
                                <?php while (have_rows('cards')) : the_row(); ?>
                                <div class="card-<?php echo $category_color ?>">
                                        <div class="card__header">
                                            <img src="<?php echo get_sub_field('image')['url'];  ?>" alt="<?php echo get_sub_field('image')['alt'];  ?>">
                                        </div>
                                        <div class="card__content">
                                            <div>
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p><?php the_sub_field('description'); ?></p>
                                            </div>
                                            <button class="btn-<?php echo $category_color ?>">Learn More</button>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>

                <?php
                    // Case: Download layout.
                    elseif (get_row_layout() == 'download') :
                        $file = get_sub_field('file');
                    // Do something...

                    endif;

                // End loop.
                endwhile;

                ?>
            </div>
        </section>

        <!-- <section class="section-video">
            <div class="container">
                <div class="row section-category__header">
                    <div class="twelve columns">
                        <h2><span>Introduction</span></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="cards">
                        <div class="card-red">
                            <div class="card__header">
                                <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            </div>
                            <div class="card__content">
                                <h4>Resources for families</h4>
                                <button class="btn-orange">Download Transcript</button>
                            </div>
                        </div>
                        <div class="card-red">
                            <div class="card__header">
                                <img src="<?php echo get_template_directory_uri() . '/images/why.png'; ?>" alt="Card Image">
                            </div>
                            <div class="card__content">
                                <h4>Resources for families</h4>
                                <button class="btn-orange">Download Transcript</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="accordion-list">
            <div class="container">
                <button class="accordion">Section 3</button>
                <div class="panel">
                    <ul>
                        <li>Helloe</li>
                        <li>Helloe</li>
                        <li>Helloe</li>
                    </ul>
                </div>
            </div>
        </section> -->

    </main>

    <?php get_footer();