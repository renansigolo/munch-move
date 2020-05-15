<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>

<div class="utility">
    <div class="container">
        <div class="row">
            <div class="utility__menu">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>

                <div class="utility__actions">
                    <ul>
                        <li id="print"><i class="fas fa-print"></i>Print</li>
                        <div class="popup">
                            <li id="share"><i class="fas fa-share-alt"></i>Share</li>
                            <span class="popuptext" id="mmPopup">
                                <div class="popup__content">
                                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=The%20Healthy%20Kids%20website%20is%20a%20one%20stop%20shop%20of%20current%20and%20credible%20information%20about%20healthy%20eating%20and%20physical%20activity.%20&url=<?php the_permalink() ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&description=<?php the_title() ?>" target="_blank">
                                        <i class="fab fa-pinterest"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fas fa-star"></i>
                                    </a>

                                    <a href="mailto:no-reply@healthykids.nsw.gov.au?subject=<?php the_title() ?>&body=Check%20out%20this%20page%20from%20Munch%20%26%20Move%20<?php the_permalink() ?>">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </span>
                        </div>
                        <li id="zoomOut">A-</li>
                        <li id="zoomReset">Ao</li>
                        <li id="zoomIn">A+</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>