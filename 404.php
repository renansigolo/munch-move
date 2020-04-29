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
                <h1>Healthy Kids Quick Links</h1>
                <div class="quick-links">
                    <div class="card-blue">
                        <div class="card__header">
                            <img src="<?php echo get_template_directory_uri() . '/images/404/card-1.png'; ?>" alt="Card Image">
                        </div>
                        <div class="card__content">
                            <h4>Resources for families</h4>
                            <ul>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Heart Foundation Recipes</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Active Kids voucher</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Healthy Kids factsheets</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Lunchbox ideas</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Make Healthy Normal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-blue">
                        <div class="card__header">
                            <img src="<?php echo get_template_directory_uri() . '/images/404/card-2.png'; ?>" alt="Card Image">
                        </div>
                        <div class="card__content">
                            <h4>Schools and Playgroups</h4>
                            <ul>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Live Life Well @ School, Crunch & Sip and Out of School Hours care (OOSH)</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Healthy School Canteens</a></li>
                                <li><a href="#!" target="_blank" rel="noopener noreferrer">Supported Playgroups Resources</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-mascots">
                <img src="<?php echo get_template_directory_uri() . '/images/404/divider-fruits.svg'; ?>" alt="Divider Fruits">
                <h1>Munch & Move Content is Still Available!</h1>
                <button class="btn-blue">Visit Munch & Move</button>
            </section>
        </div>

    </main>
</div>

<?php get_footer();
