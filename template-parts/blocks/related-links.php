<?php

/**
 * Related Links Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'related-links-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'related-links';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$related_links = get_field('related_links');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
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

</div>