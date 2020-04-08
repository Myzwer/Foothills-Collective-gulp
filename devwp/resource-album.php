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
        <h1 class = "nav-header uppercase center"><?php the_field('song_title'); ?></h1>
        <!--        cta? video maybe-->
    </div>








<?php get_footer();