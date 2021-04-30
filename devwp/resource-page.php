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
        <h1 class = "subpage-header uppercase center"><?php the_field('song_title'); ?></h1>
<!--        cta? video maybe-->
    </div>


    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x tb-padding">
                <div class="small-12 medium-6 cell">
                    <img class = "rounded box-shadow" src="<?php the_field('album_cover'); ?>" alt="">
                </div>
                <div class="small-12 medium-6 cell">
                    <h2 class = "uppercase"><?php the_field('song_title'); ?></h2>
                    <h4 class = "no-padding no-margin">Writers</h4>
                    <p class = "capitalize no-padding no-margin padding-bottom"><?php the_field('writer_names'); ?></p>

                    <h4 class = "no-padding no-margin margin-top-only" >Where to Listen</h4>
                    <!-- This looks like a lot, but it's really just checking to see if the field exists, and showing it if so   -->
                    <?php if( get_field('where_to_listen_spotify') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_spotify'); ?>" target="_blank"><i class="fab fa-spotify"></i> Listen On Spotify</a></p>
                    <?php endif; ?>

                    <?php if( get_field('where_to_listen_apple_music') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_apple_music'); ?>" target="_blank"><i class="fab fa-itunes"></i> Listen On Apple Music</a></p>
                    <?php endif; ?>

                    <?php if( get_field('where_to_listen_amazon') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_amazon'); ?>" target="_blank"><i class="fab fa-amazon"></i> Buy on Amazon</a></p>
                    <?php endif; ?>

                    <?php if( get_field('where_to_listen_youtube') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i> Watch on Youtube</a></p>
                    <?php endif; ?>

                    <?php if( get_field('where_to_listen_itunes') ): ?>
                        <p class = "no-padding no-margin padding-bottom"><a href="<?php the_field('where_to_listen_itunes'); ?>" target="_blank"><i class="fab fa-itunes-note"></i> Buy On iTunes</a></p>
                    <?php endif; ?>

                    <h4 class = "no-padding no-margin margin-top-only">Release Year</h4>
                    <p class = "capitalize no-padding"><?php the_field('release_year'); ?></p>

                </div>
            </div>
        </div>

        <div class = "grid-container">
            <div class="grid-x grid-padding-x tb-padding">
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
                <div class="small-12 medium-6 cell">
                    <div class="buttons">
                        <a href = "<?php the_field('multitracks_link'); ?>">
                            <button class="btn-hover btn-extended color-2"><i class="fas fa-external-link-alt"></i> Multitracks</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class = "grid-container">
            <div class="grid-x grid-padding-x tb-padding">
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

                        echo'<p class = "no-padding no-margin padding-bottom">';
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

