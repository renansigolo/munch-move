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
$showCovidBanner = get_field('show_covid_banner', 'option');
if ($showCovidBanner) :
?>
    <section class="covid">
        <div class="container">
            <h2 class="covid__heading">COVID-19 updates</h2>
            <p class="covid__text">Information on this website may not reflect current public health advice on COVID-19. We recommend you keep up-to-date with official information and advice on COVID-19 on the <a href="https://preview.nsw.gov.au/covid-19" target="_blank">NSW Government website</a>. If you have any concerns about information on this website please contact <a href="mailto:SWSLHD-MunchAndMoveOPH@health.nsw.gov.au">SWSLHD-MunchAndMoveOPH@health.nsw.gov.au</a>.</p>
        </div>
    </section>
<?php endif; ?>