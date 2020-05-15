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
                        <?php
                        $file = get_sub_field('audio_file');
                        if ($file) : ?>
                            <tr class="playlist__song track-<?php echo get_row_index() - 1; ?>">
                                <td class="song-title js-song-title" data-song-title="<?php the_sub_field('song_title') ?>" data-song-url="<?php echo $file['url']; ?>" data-song-index="<?php echo get_row_index() - 1; ?>"><?php the_sub_field('song_title') ?></td>
                                <td class="text-center js-song-length">01:00</td>
                                <td class="float-right">
                                    <a href="<?php echo $file['url']; ?>" class="download__mobile" download>Download</a>
                                    <a href="<?php echo $file['url']; ?>" class="download__desktop" download>Download Track</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endwhile ?>
                </tbody>

            </table>
        </div>

        <div class="row player">
            <button class="btn-rounded previous">
                <i class="fas fa-backward"></i>
            </button>
            <button class="btn-rounded play" onclick="playSong()">
                <i class="fas fa-play"></i>
            </button>
            <button class="btn-rounded pause" onclick="pauseSong()">
                <i class="fas fa-pause"></i>
            </button>
            <button class="btn-rounded forward"><i class="fas fa-forward"></i></button>

            <div id="song-player">
                <audio id="player" controls controlsList="nodownload">
                    <source src="<?php echo get_template_directory_uri() . '/images/1.MunchMove.mp3' ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>

            <!-- <button class="btn-rounded volume" onclick="document.getElementById('player').volume += 0.1">
                <i class="fas fa-volume-up"></i>
            </button> -->
            <!-- <div class="volume-slider">
                <input type="range" id="vol" name="vol" min="0" max="50">
            </div> -->

            <!-- <button class="btn-rounded volume" onclick="document.getElementById('player').volume -= 0.1">
                <i class="fas fa-volume-down"></i>
            </button>

            <button class="btn-rounded volume" onclick="document.getElementById('player').volume += 0.1">
                <i class="fas fa-volume-up"></i>
            </button> -->
        </div>

    </section>
<?php endif ?>