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
$logo_edge = get_template_directory_uri() . '/images/logo/edge.png';
$logo_chrome = get_template_directory_uri() . '/images/logo/chrome.png';
$logo_firefox = get_template_directory_uri() . '/images/logo/firefox.png';
$logo_opera = get_template_directory_uri() . '/images/logo/opera.png';
$logo_safari = get_template_directory_uri() . '/images/logo/safari.png';
$ieBanner = get_field('show_ie_banner', 'option');
if ($ieBanner) :
?>
    <section class="ie-banner" id="ie-banner">
        <div class="container">
            <div class="five columns">
                <h2>Unsupported Browser Detected</h2>
                <p>It looks like you’re using an unsupported browser to view this site. We recommend upgrading to one of the following modern browsers for a better viewing experience and security updates.</p>
            </div>
            <div class="seven columns browsers">
                <div class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </div>
                <div class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </div>
                <div class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </div>
                <div class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </div>
                <div class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>