<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

    <video src="<?php the_field('video_background'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <h1 class = "hero-header"><?php the_field('site_title'); ?></h1>
    </div>

    <div class="full-width dark-background">
        <div class = "grid-container full-width">
            <div class="grid-x grid-padding-x">
                <div class="small-12 large-10 large-offset-1 cell">
                    <p class="featured-paragraph center"><?php the_field('featured_paragraph'); ?></p>
                    <div class="buttons">
                        <a href = "<?php the_field('button_link'); ?>">
                            <button class="btn-hover color-1"><?php the_field('button_text'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="full-width main-background">
        <div class = "grid-container ">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="large-12 cell">
                    <div class="image-banner rounded" style = "background: url(https://foothillscollective.com/wp-content/uploads/2020/02/New-Album-Background.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;">

                        <div class = "content-middle">
                            <h2 class = "text-overlay center"><?php the_field('top_featured_image_text_line_1'); ?></h2>
                            <h3 class = "text-overlay center"><?php the_field('top_featured_image_text_line_2'); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-6 cell">
                    <a href="<?php the_field('left_image_link_image_link'); ?>">
                        <div class="image-banner rounded" style = "background: url(<?php the_field('left_image_link_background'); ?>);background-position: center center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;">
                            <div class = "content-middle">
                                <h2 class = "text-overlay uppercase center"><?php the_field('left_image_link_text_line_1'); ?></h2>
                                <p class = "text-overlay-p center"><?php the_field('left_image_link_text_line_2'); ?></p>
                                <div class="arrow bounce">
                                    <div class="fa fa-arrow-down fa-2x"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="small-12 medium-6 cell">
                    <a href="<?php the_field('right_image_link_image_link'); ?>">
                        <div class="image-banner rounded" style = "background: url(<?php the_field('right_image_link_background'); ?>);background-position: center center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;">
                            <div class = "content-middle">
                                <h2 class = "text-overlay uppercase center"><?php the_field('right_image_link_text_line_1'); ?></h2>
                                <p class = "text-overlay-p center"><?php the_field('right_image_link_text_line_2'); ?></p>
                                <div class="arrow bounce">
                                    <div class="fa fa-arrow-down fa-2x"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="small-12 cell">
                    <div class="image-banner-large rounded" style = "background: url(<?php the_field('bottom_featured_image_background'); ?>);background-position: center center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;">
                        <div class = "content-middle">
                            <h2 class = "text-overlay center"><?php the_field('bottom_featured_image_text_line_1'); ?></h2>
                            <div class="buttons center">
                                <a href = "<?php the_field('bottom_featured_image_button_link'); ?>">
                                    <button class="btn-hover color-1"><?php the_field('bottom_featured_image_button_text'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();