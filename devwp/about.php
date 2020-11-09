<?php
/**
 * Template Name: About
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
    <div class = "grid-container ">
        <div class="grid-x grid-padding-x tb-padding">
            <div class="small-12 cell">
                <h1 class = "color-inverse center"><?php the_field('headline'); ?></h1>
            </div>
            <div class="small-12 cell">
                <hr>
            </div>
            <div class="small-12 cell">
                <h2 class = "center"><?php the_field('tagline'); ?></h2>
            </div>
            <div class="small-12 cell">
            <p><?php the_field('about_section'); ?></p>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
