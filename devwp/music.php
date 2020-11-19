<?php
/**
 * Template Name: Music
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

<div class="grid-container full-width">
    <div class="grid-x grid-padding-x full-background" style = "background: url(<?php the_field('hero_section_background'); ?>);  background-position: center center;">
        <div class="large-12 cell">
            <div class="content-middle">
                <h1 class = "subpage-header center"><?php the_field('hero_section_title_text'); ?></h1>
            </div>
        </div>
    </div>
</div>


<div class="full-width main-background">
    <div class = "grid-container">
        <div class="grid-x grid-padding-x tb-padding">
            <?php
            // Start the Repeater Loop
            if( have_rows('songs') ):
                // Card Start
                // Begin looping data
                while ( have_rows('songs') ) : the_row();
                    echo '<div class="small-12 medium-4 cell">';
                    // Album Artwork
                    echo '<img class = "rounded box-shadow" src="';
                    the_sub_field('album_cover');
                    echo '">';
                    echo '</div>';

                    //Song Title
                    echo '<div class="small-12 medium-8 cell">';
                    echo '<h3 class = "uppercase padding-top-mobile">';
                    the_sub_field('song_title');
                    echo '</h3>';

                    //Song Description paragraph
                    echo '<p class = "no-padding">';
                    the_sub_field('song_description');
                    echo '</p>';

                    //Button Group
                    echo '<div class="buttons">';
                    echo '<a href = "';
                    the_sub_field('button_link'); //Button Link URL
                    echo '">';

                    echo '<button class="btn-hover color-1">';
                    the_sub_field('button_text');
                    echo '</button>';
                    echo '</a>';

                    echo '</div>';
                    echo '</div>';

                    echo '<div class="small-12 cell">';
                    echo '<hr>';
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
