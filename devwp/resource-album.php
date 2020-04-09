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


    <video src="https://foothillscollective.com/wp-content/uploads/2020/04/Over-and-Over-Web.mp4" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="content-middle margin-pull">
            <h1 class = "uppercase center">Life to the Lion</h1>
            <h2 class = "uppercase dark-color-invert">Foothills Collective's Debut Album</h2>
        </div>
    </div>


    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-6 cell">
                    <img src="https://foothillscollective.com/wp-content/uploads/2020/04/Life-to-the-Lion.jpg" alt="">
                </div>
                <div class="small-12 medium-6 cell">
                    <h2 class = "uppercase">Life to the Lion</h2>
                    <hr>

                    <h4 class = "no-padding no-margin" >Where to Listen</h4>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_spotify'); ?>" target="_blank"><i class="fab fa-spotify"></i> Listen On Spotify</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_apple_music'); ?>" target="_blank"><i class="fab fa-itunes"></i> Listen On Apple Music</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_amazon'); ?>" target="_blank"><i class="fab fa-amazon"></i> Buy on Amazon</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i> Watch on Youtube</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_itunes'); ?>" target="_blank"><i class="fab fa-itunes-note"></i> Buy On iTunes</a></p>
                    <p class = "no-padding no-margin"><a href="<?php the_field('where_to_listen_google_play'); ?>" target="_blank"><i class="fab fa-google-play"></i> Listen on Google Play</a></p>

                    <h4 class = "no-padding no-margin margin-top-only">Release Year</h4>
                    <p class = "capitalize no-padding"><?php the_field('release_year'); ?></p>
                </div>
            </div>
        </div>

        <div class = "grid-container">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 cell">
                    <h2 class = "uppercase">Track List</h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>




<?php get_footer();