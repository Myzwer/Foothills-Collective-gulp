<?php
/**
 * Template Name: Album Resources
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
        <div class="content-middle margin-pull">
            <h1 class = "uppercase center"><?php the_field('song_title'); ?></h1>
            <h2 class = "uppercase dark-color-invert"><?php the_field('song_description'); ?></h2>
        </div>
    </div>


    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x tb-padding">
                <div class="small-12 medium-6 cell">
                    <img class = "rounded box-shadow" src="<?php the_field('album_artwork'); ?>" alt="">
                </div>
                <div class="small-12 medium-6 cell">
                    <h2 class = "uppercase"><?php the_field('song_title'); ?></h2>
<!--                    use the same song_title from the top for this -->
                    <hr>

                    <h4 class = "no-padding no-margin" >Where to Listen</h4>
                    <!-- This looks like a lot, but it's really just checking to see if the field exists, and showing it if so   -->
                    <?php if( get_field('streaming_links_spotify') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('streaming_links_spotify'); ?>" target="_blank"><i class="fab fa-spotify"></i> Listen On Spotify</a></p>
                    <?php endif; ?>

                    <?php if( get_field('streaming_links_apple_music') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('streaming_links_apple_music'); ?>" target="_blank"><i class="fab fa-itunes"></i> Listen On Apple Music</a></p>
                    <?php endif; ?>

                    <?php if( get_field('streaming_links_amazon') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('streaming_links_amazon'); ?>" target="_blank"><i class="fab fa-amazon"></i> Buy on Amazon</a></p>
                    <?php endif; ?>

                    <?php if( get_field('streaming_links_youtube') ): ?>
                        <p class = "no-padding no-margin"><a href="<?php the_field('streaming_links_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i> Watch on Youtube</a></p>
                    <?php endif; ?>

                    <?php if( get_field('streaming_links_itunes') ): ?>
                        <p class = "no-padding no-margin padding-bottom"><a href="<?php the_field('streaming_links_itunes'); ?>" target="_blank"><i class="fab fa-itunes-note"></i> Buy On iTunes</a></p>
                    <?php endif; ?>

                    <h4 class = "no-padding no-margin margin-top-only">Release Year</h4>
                    <p class = "capitalize no-padding"><?php the_field('release_year'); ?></p>
                </div>
            </div>
        </div>

        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x tb-padding">
                <div class="small-12 cell">
                    <h2 class = "uppercase">Track List</h2>
                    <hr class = "no-margin">
                </div>

                <?php
                // Start the Repeater Loop
                if( have_rows('track_list') ):
                    // Begin looping data - all this is normal.
                    while ( have_rows('track_list') ) : the_row();
                       echo '<div class="small-12 cell">';
                            echo '<span class = "float-left-soft">';
                                echo '<h4 class = "uppercase padding-top-only-2">';
                                    the_sub_field('song_title');
                                echo '</h4>';
                            echo '</span>';

                            // The actual button, and this is where things fall apart
                            echo '<span class = "float-right-soft tb-padding">';
                            // dropping OUT of php to use get_row_index(); which apparently doesn't work unless you weren't in php before.
                            ?>

                            <button class="btn-hover color-1 no-margin" type="button" data-toggle="resource-button-<?php echo get_row_index(); ?>">Resources</button>
                            </span>
                            <div class="dropdown-pane" id="resource-button-<?php echo get_row_index(); ?>" data-dropdown data-auto-focus="true">

                                <?php
                                //dropping back in for the last half of the repeater, linking the files. Pretty normal from here on out.

                                // Lyrics
                                if( get_field('lyric_chart') ):
                                    echo '<p class = "no-padding no-margin pink-link"><a href="';
                                    the_sub_field('lyric_chart');
                                    echo '" target="_blank"><i class="fas fa-download"></i> Lyric Chart</a></p>';
                                endif;

                                //Chord Charts
                                if( get_field('chord_chart') ):
                                    echo '<p class = "no-padding no-margin"><a href="';
                                    the_sub_field('chord_chart');
                                    echo '" target="_blank"><i class="fas fa-download"></i> Chord Chart</a></p>';
                                endif;


                                //Number Charts
                                if( get_field('number_chart') ):
                                    echo '<p class = "no-padding no-margin pink-link"><a href="';
                                    the_sub_field('number_chart');
                                    echo '" target="_blank"><i class="fas fa-download"></i> Number Chart</a></p>';
                                endif;

                                //Multitracks
                                if( get_field('multitracks_link') ):
                                    echo '<p class = "no-padding no-margin"><a href="';
                                    the_sub_field('multitracks_link');
                                    echo '" target="_blank"><i class="fas fa-external-link-alt"></i> Multitracks</a></p>';
                                endif;

                                if( get_field('lyrics_chart') || get_field('chord_chart') || get_field('number_chart') || get_field('multitracks_link') ):
                                    echo '<p>There are no resources available for this song.</p>';
                                endif;

                            echo '</div>';
                            echo '<hr class = "no-margin">';
                       echo '</div>';
                    endwhile;
                else :
                    // no rows found
                endif;
                ?>

            </div>
        </div>
    </div>




<?php get_footer();