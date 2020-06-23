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
$logo_edge = get_template_directory_uri() . '/images/logo/browser/edge.png';
$logo_chrome = get_template_directory_uri() . '/images/logo/browser/chrome.png';
$logo_firefox = get_template_directory_uri() . '/images/logo/browser/firefox.png';
$logo_opera = get_template_directory_uri() . '/images/logo/browser/opera.png';
$logo_safari = get_template_directory_uri() . '/images/logo/browser/safari.png';
$ieBanner = get_field('show_ie_banner', 'option');
if ($ieBanner) :
?>
    <section class="ie-banner" id="ie-banner">
        <div class="container ie-container">
            <div class="five columns">
                <h2>Unsupported Browser Detected</h2>
                <p>It looks like you’re using an unsupported browser to view this site. We recommend upgrading to one of the following modern browsers for a better viewing experience and security updates.</p>
            </div>
            <div class="seven columns browsers">
                <a href="https://www.microsoft.com/en-us/edge" target="_blank" class="browser-logo">
                    <img src="<?php echo $logo_edge ?>" alt="Browser Logo">
                    <span>Edge</span>
                </a>
                <a href="https://www.google.com/chrome/" target="_blank" class="browser-logo">
                    <img src="<?php echo $logo_chrome ?>" alt="Browser Logo">
                    <span>Chrome</span>
                </a>
                <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" class="browser-logo">
                    <img src="<?php echo $logo_firefox ?>" alt="Browser Logo">
                    <span>Firefox</span>
                </a>
                <a href="https://www.opera.com/download" target="_blank" class="browser-logo">
                    <img src="<?php echo $logo_opera ?>" alt="Browser Logo">
                    <span>Opera</span>
                </a>
                <a href="https://www.apple.com/au/safari/" target="_blank" class="browser-logo">
                    <img src="<?php echo $logo_safari ?>" alt="Browser Logo">
                    <span>Safari</span>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>