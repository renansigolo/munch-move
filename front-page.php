<?php

/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */

<<<<<<< HEAD
<<<<<<< HEAD
get_header();
?>

<div id="front-page" class="content-area">
  <main id="main" class="site-main">
</div>

<section class="hero">

  <!-- <div class="hero__clouds">
    <div></div>
  </div> -->

  <div class="hero__title">
    <h1>We’ve moved!</h1>
    <p>Welcome to munchandmove.com.au<br />(formerly healthykids.nsw.gov.au)</p>
  </div>

  <div class="hero__banner">
    <div class="container">
      <div class="row">
        <div class="eight columns u-max-full-width">
          <img src="<?php echo get_template_directory_uri() . '/images/mm-hero.svg' ?>" alt="Munch & Move Logo">
        </div>
      </div>
    </div>
  </div>

  <div class="hero__content">
    <div class="container">
      <div class="row">
        <div class="eight columns">
          <h3>Lorem Ipsum is simply dummy text</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>

      <div class="hero__form">
        <?php echo do_shortcode( '[contact-form-7 id="11" title="Notify Form"]' ); ?>
      </div>

    </div>
  </div>

</section>

</main>
</div>
=======
get_header(); ?>
>>>>>>> develop
=======
get_header(); ?>
>>>>>>> staging

<?php
$banner_button = get_field('banner_button');
if ($banner_button) :
    $banner_button_url = $banner_button['url'];
    $banner_button_title = $banner_button['title'];
    $banner_button_target = $banner_button['target'] ? $banner_button['target'] : '_self';
?>
<?php endif ?>

<div id="front-page">
    <main id="main">
        <section class="hero">
            <div class="hero__desktop">
                <div class="background-banner limit-height" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="seven columns">
                                <div class="hero-content limit-height">
                                    <h1><?php the_field('banner_title') ?></h1>
                                    <a href="<?php echo $banner_button_url; ?>" target="<?php echo $banner_button_target; ?>">
                                        <button class="btn-general"><?php echo $banner_button_title ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__mobile">
                <img src="<?php echo the_post_thumbnail_url() ?>" height="160px" alt="Hero Image">
                <div class="mobile-hero-content">
                    <div class="container">
                        <h1><?php the_field('banner_title') ?></h1>
                        <div class="row flex-center">
                            <div class="ten columns">
                                <a href="<?php echo $banner_button_url; ?>" target="<?php echo $banner_button_target; ?>">
                                    <button class="btn-general"><?php echo $banner_button_title ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Utilities Bar -->
<<<<<<< HEAD
        <?php
        get_template_part('template-parts/component', 'utilities');
        ?>
=======
        <?php get_template_part('template-parts/component', 'utilities'); ?>
>>>>>>> staging

        <?php
        while (have_rows('content-rows')) : the_row();
            if (get_row_layout() == 'home_intro') :
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $excerpt = get_sub_field('excerpt');
        ?>
                <section class="section-intro">
                    <div class="container">
                        <div class="row">
                            <div class="seven columns">
                                <h1><?php echo $title ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="seven columns">
                                <p><?php echo $description ?></p>
                            </div>
                            <div class="one column"></div>
                            <div class="four columns">
                                <div class="side-article">
                                    <?php echo $excerpt ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <?php
            endif;
        endwhile;
        ?>

        <section class="section-category">
            <div class="container">
                <?php
                while (have_rows('content-rows')) : the_row();
                    if (get_row_layout() == 'highlighted_content') :
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $category = get_sub_field('category');
                        $cards = get_sub_field('highlighted_content_row_cards');
                        $grid_rows = get_sub_field_object('cards_per_row')['value'];
                ?>
                        <div class="row section-category__header">
                            <div class="twelve columns">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <hr class="mascot-hr-<?php echo $category ?>">
                            </div>
                            <div class="eight columns">
                                <h1><?php echo $title; ?></h1>
                                <p><?php echo $description; ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="grid-<?php echo $grid_rows ?> cards">
                                <?php while (have_rows('cards')) : the_row(); ?>
                                    <div class="card-<?php echo $category ?>">
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
                                                    <button class="btn-<?php echo $category ?>"><?php echo $button_title; ?></button>
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
        </section>
    </main>

    <?php get_footer();
