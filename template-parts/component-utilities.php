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
        <div class="utility__menu">
            <div>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
            <div class="utility__actions">
                <ul>
                    <li id="print"><i class="fas fa-print"></i>Print</li>
                    <li id="share"><i class="fas fa-share-alt"></i>Share</li>
                    <li id="zoomOut">A-</li>
                    <li id="zoomReset">Ao</li>
                    <li id="zoomIn">A+</li>
                </ul>
            </div>
        </div>
    </div>
</div>