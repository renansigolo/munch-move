<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Munch_&_Move
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="error-404 not-found container">
            <section class="section-decomissioned-content">
                <h1>Are you looking for the Healthy Kids website?</h1>
                <img src="<?php echo get_template_directory_uri() . '/images/404/macbook.png'; ?>" alt="Macbook">
                <div class="row flex-center">
                    <div class="eight columns">
                        <p>Thank you for visiting us over the years. Our website is no longer around, but we have moved our most popular information to our partner websites.</p>
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
                    <button class="btn-type-b">Visit Munch & Move</button>
            </section>
        </div>

    </main>
</div>

<?php get_footer();