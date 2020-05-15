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
                            <li id="share" onclick="showPopup()"><i class="fas fa-share-alt"></i>Share</li>
                            <span class="popuptext" id="myPopup">
                                <div class="popup__content">
                                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Check it out&url=<?php the_permalink() ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&description=<?php the_title() ?>" target="_blank">
                                        <i class="fab fa-pinterest"></i>
                                    </a>

                                    <!-- <a href="http://" target="_blank">
                                        <i class="fas fa-star"></i>
                                    </a> -->

                                    <a href="mailto:no-reply@munch-and-move.com.au">
                                        <i class="fas fa-envelope"></i>
                                    </a>

                                    <a href="javascript:void(0)" onClick="return bookmarkPage(this);">
                                        <i class="fas fa-bookmark"></i>
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

<!-- <script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<amp-social-share type="system"></amp-social-share>
<amp-social-share type="twitter"></amp-social-share>
<amp-social-share type="facebook"></amp-social-share>
<amp-social-share type="pinterest"></amp-social-share> -->