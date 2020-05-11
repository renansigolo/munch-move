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
                                $link = get_sub_field('accordion_link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                    <li><a href="<?php echo $link_url ?>"><?php echo $link_title ?></a></li>
                            <?php
                                endif;
                            endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </section>
<?php endif ?>