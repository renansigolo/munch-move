<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'accordion_block') : ?>
    <section>
        <div class="row">
            <?php while (have_rows('accordions')) : the_row(); ?>
                <div>
                    <button class="accordion"><?php the_sub_field('accordion_title') ?></button>
                    <div class="panel">
                        <ul>
                            <?php while (have_rows('accordion_links')) : the_row();
                                $link = get_sub_field('accordion_link')
                            ?>
                                <li><a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a></li>
                            <?php endwhile ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </section>
<?php endif ?>