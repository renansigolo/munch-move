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
if (have_rows('related_links')) :
?>
    <aside class="related-links">
        <h2>Related Links</h2>
        <ul>
            <?php
            while (have_rows('related_links')) : the_row();
                $link = get_sub_field('link');
            ?>
                <li><a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a></li>
            <?php
            endwhile;
            ?>
        </ul>
    </aside>

<?php else : ?>
    <aside class="related-links">
        <h2>Related Links</h2>
        <ul>
            <li><a href="#">About Munch & Move</a></li>
            <li><a href="#">Munch & Move Training</a></li>
            <li><a href="#">Munch & Move Resources</a></li>
            <li><a href="#">Munch & Move Case Studies</a></li>
            <li><a href="#">Munch & Move Reports</a></li>
        </ul>
    </aside>

<?php endif; ?>