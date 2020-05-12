<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Munch_&_Move
 */

get_header();
?>

<section id="tpl-search">
    <main id="main">

        <section>
            <!-- Hero Banner -->
            <img src="<?php echo get_template_directory_uri() . '/images/search.jpg' ?>" class="featured-image" alt="Search banner">

            <!-- Utilities Bar -->
            <?php get_template_part('template-parts/component', 'utilities'); ?>
        </section>

        <div class="container">
            <div class="row">
                <div class="eight columns">
                    <header>
                        <h1 class="page-title">
                            <!-- <?php
                                    /* translators: %s: search query. */
                                    printf(esc_html__('Search Results for: %s', 'munch-move'), '<span>' . get_search_query() . '</span>');
                                    ?> -->
                            Search:
                        </h1>
                    </header>

                    <div class="mm-content">
                        <p>To search this site, please enter your keywords in the search box below.</p>
                        <div class="search-form">
                            <h4>Enter keywords to search this site:</h4>
                            <form action="/" method="get">
                                <div class="search-form__content">
                                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
                                    <button class="btn-general">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="search-results">
                            <?php if (have_posts()) : ?>
                                <?php
                                /* Start the Loop */
                                while (have_posts()) :
                                    the_post();
                                    the_title('<h1 class="entry-title">', '</h1>'); ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>">Read More...</a>

                                    <!-- <p>
                                    <?php
                                    $my_content = apply_filters('the_content', get_the_content());
                                    $my_content = wp_strip_all_tags($my_content);
                                    echo wp_trim_words($my_content, 55, $moreLink);
                                    ?>
                                </p> -->
                                <?php
                                endwhile;
                                ?>
                        </div>
                    </div>
                </div>

                <!-- Related Links -->
                <div class="four columns">
                    <?php get_template_part('template-parts/component', 'related-links'); ?>
                </div>
            </div>

        <?php
                            else :
                                get_template_part('template-parts/content', 'none');
                            endif;
        ?>
        </div>

    </main>
</section>

<?php
get_footer();
