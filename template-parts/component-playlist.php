<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Munch_&_Move
 */
?>
<?php if (get_row_layout() == 'playlist_block') : ?>
    <section class="playlist">
        <div class="row">
            <table class="full-width">
                <thead>
                    <tr class="playlist__header">
                        <th>
                            <h3>Song Title</h3>
                        </th>
                        <th class="text-center">
                            <h3>Runtime</h3>
                        </th>
                        <th class="text-right">
                            <h3>Song & Lyrics</h3>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php while (have_rows('audio')) : the_row() ?>
                        <tr class="playlist__song">
                            <?php
                            $file = get_sub_field('audio_file');
                            if ($file) : ?>
                                <td class="js-song-title" data-song="<?php echo $file['url']; ?>"><?php the_sub_field('song_title') ?></td>
                                <td class="text-center">01:00</td>
                                <td class="float-right">
                                    <a href="<?php echo $file['url']; ?>" download>Download Track</a>
                                <?php endif; ?>
                                </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>

            </table>
        </div>
        <div class="row">
            <audio class="full-width" controls>
                <source src="<?php echo get_template_directory_uri() . '/images/1.MunchMove.mp3' ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </section>
<?php endif ?>