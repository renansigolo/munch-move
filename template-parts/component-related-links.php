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
// Get the Category Selected on each page
$category_selected = get_field('related_links_category');

// Loop through the Related Links Options list
while (have_rows('related_links_options', 'option')) : the_row();
    // If it matches the selected option
    // retrieves the values from this option list
    if (get_sub_field('category_title') === $category_selected) :
?>
        <aside class="related-links">
            <h2>Related Links</h2>
            <ul>
                <?php
                while (have_rows('category_links')) : the_row();
                    $link = get_sub_field('link')
                ?>
                    <li><a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a></li>
                <?php endwhile; ?>

            </ul>
        </aside>
<?php
    endif;
endwhile; ?>

<!-- If the Category selected is Custom -->
<?php if ($category_selected === 'Custom') : ?>
    <aside class="related-links">
        <h2>Related Links</h2>
        <ul>
            <?php
            while (have_rows('related_links')) : the_row();
                $link = get_sub_field('link')
            ?>
                <li><a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a></li>
            <?php endwhile; ?>
        </ul>
    </aside>
<?php endif; ?>