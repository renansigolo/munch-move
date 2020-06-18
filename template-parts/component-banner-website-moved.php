<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<?php
$bg_banner = get_template_directory_uri() . '/images/backgrounds/bg-banner-website-moved.png';
$logo_healthy_kids = get_template_directory_uri() . '/images/logo/healthy-kids-logo.svg';
$showRedirectNoticeBanner = get_field('show_redirect_notice_banner', 'option');
if ($showRedirectNoticeBanner) :
?>

    <section class="website-moved fixed-banner" style="background-image: url(<?php echo $bg_banner; ?>) ">
        <div class="dismiss">
            <p class="dismiss__text">Dismiss this message</p>
            <i class="fas fa-chevron-down dismiss__icon"></i>
        </div>
        <div class="container">
            <div class="we-moved">
                <img src="<?php echo $logo_healthy_kids; ?>" class="we-moved__logo" alt="Healthy Kids Logo">
                <div class="we-moved__content">
                    <h3 class="we-moved__title">Looking for the Healthy Kids website?</h3>
                    <p class="we-moved__text">Thank you for visiting us over the years. Our website is no longer around, but we have moved our most popular information to our partner websites.</p>
                </div>
                <a href="<?php echo site_url('404/#quick-links') ?>" rel="noopener noreferrer">
                    <button class="btn-general">See Quick Links</button>
                </a>
            </div>
        </div>
    </section>

<?php endif; ?>