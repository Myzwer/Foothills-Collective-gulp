<?php
/**
 * Template Name: Resource Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Dalemyn
 * @since 1.0.0
 */

get_header(); ?>

    <video src="<?php the_field('video_background'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <h1 class = "nav-header uppercase center"><?php the_field('song_title'); ?></h1>
<!--        cta? video maybe-->
    </div>


    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-6 cell">
                    <img src="<?php the_field('album_cover'); ?>" alt="">
                </div>
                <div class="small-12 medium-6 cell">
                    <h2 class = "uppercase"><?php the_field('song_title'); ?></h2>
                    <h4 class = "no-padding no-margin">Writers</h4>
                    <p class = "capitalize no-padding no-margin"><?php the_field('writer_names'); ?></p>

                    <h4 class = "no-padding no-margin margin-top-only">Release Year</h4>
                    <p class = "capitalize no-padding"><?php the_field('release_year'); ?></p>

                    <h4 class = "no-padding no-margin margin-top-only" >Where to Listen</h4>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_spotify'); ?>"><i class="fab fa-spotify"></i> Listen On Spotify</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_apple_music'); ?>"><i class="fab fa-itunes"></i> Listen On Apple Music</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_amazon'); ?>"><i class="fab fa-amazon"></i> Buy on Amazon</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_youtube'); ?>"><i class="fab fa-youtube"></i> Watch on Youtube</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_itunes'); ?>"><i class="fab fa-itunes-note"></i> Buy On iTunes</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_google_play'); ?>"><i class="fab fa-google-play"></i> Listen on Google Play</a></p>
                </div>
            </div>
        </div>

        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h2 class = "center">Resources</h2>
                    <hr>
                </div>
                <div class="small-12 medium-6 cell">
                    <div class="buttons">
                        <a href = "<?php the_field('chord_chart_download'); ?>">
                            <button class="btn-hover btn-extended color-2"><i class="fas fa-download"></i> Chord Chart</button>
                        </a>
                    </div>
                </div>
                <div class="small-12 medium-6 cell">
                    <div class="buttons">
                        <a href = "<?php the_field('number_chart_download'); ?>">
                            <button class="btn-hover btn-extended color-2"><i class="fas fa-download"></i> Number Chart</button>
                        </a>
                    </div>
                </div>
                <div class="small-12 medium-6 cell">
                    <div class="buttons">
                        <a href = "<?php the_field('lyrics_download'); ?>">
                            <button class="btn-hover btn-extended color-2"><i class="fas fa-download"></i> Lyrics</button>
                        </a>
                    </div>
                </div>
<!--                <div class="small-12 medium-6 cell">-->
<!--                    <div class="buttons">-->
<!--                        <a href = "--><?php //the_field('multitracks_link'); ?><!--">-->
<!--                            <button class="btn-hover btn-extended color-2"><i class="fas fa-external-link-alt"></i> Multitracks</button>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>


        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h2 class = "center">Lyrics</h2>
                    <hr>
                </div>

                <?php
                // Start the Repeater Loop
                if( have_rows('song_section') ):
                    // Card Start
                    // Begin looping data
                    while ( have_rows('song_section') ) : the_row();
                        echo '<div class="small-12 medium-6 cell">';

                        echo'<h4 class = "margin-top-only">';
                        the_sub_field('song_section_single');
                        echo '</h4>';

                        echo'<p class = "no-padding no-margin">';
                        the_sub_field('lyrics');
                        echo '</p>';

                        echo '</div>';

                    endwhile;
                else :
                    // no rows found
                endif;
                ?>
                </div>

            </div>
        </div>
    </div>




<?php get_footer();

