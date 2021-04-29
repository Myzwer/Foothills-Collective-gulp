<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Dalemyn
 * @since 1.0.0
 */

get_header(); ?>


    <video src="<?php the_field('video_header'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container">
            <div class="center add-padding">
                <h1><?php the_field('band_name'); ?></h1>
            </div>
            <hr style="width: 50%;">
            <h2 class = "center lr-padding no-margin dark-color-invert"><?php the_field('title'); ?></h2>
            <h3 class = "center lr-padding no-margin dark-color-invert"><?php the_field('subtitle'); ?></h3>

            <div class="buttons">
                <?php if (have_rows('hero_button')): ?>
                    <?php while (have_rows('hero_button')): the_row(); ?>
                        <a href="<?php the_sub_field('button_link'); ?>">
                            <button class="button btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!--
    *
    *
    ************ End Hero ************
    ************ Start AS IT IS PROMO ************
    *
    *
    -->

    <!--Mobile-->
    <div class="show-for-mobile">
        <div class="full-width main-background">
            <div class="grid-x">
                <div class="small-12 large-6 cell">
                    <?php if (have_rows('background_settings_featured_release')): ?>
                    <?php while (have_rows('background_settings_featured_release')):
                    the_row(); ?>
                    <div class="image-banner-xlarge" style="
                        background: linear-gradient(rgba(54, 54, 54, .1), rgba(54, 54, 54, 1)),url(<?php the_sub_field('background_image'); ?>);
                        background-position: <?php the_sub_field('vertical_alignment'); ?> center;
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-size: cover;">
                        <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="grid-container">
                            <div class="grid-x grid-padding-y">
                                <div class="small-12 relative cell height-lock-mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 large-6 cell dark-background">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-y">
                            <div class="small-12 medium-6 relative center cell">
                                <h1 class=""><?php the_field('featured_title'); ?></h1>
                                <h3 class="dark-color-invert"><?php the_field('featured_subtitle'); ?></h3>
                                <div id="modal-container">
                                    <div class="modal-background">
                                        <div class="modal">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RN5xUtzqs3Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <div class="center"><a href="https://youtu.be/RN5xUtzqs3Q">Watch on Youtube >></a></div>

                                            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%"
                                                 height="100%"
                                                 preserveAspectRatio="none">
                                                <rect x="0" y="0" fill="none" width="226" height="162" rx="3"
                                                      ry="3"></rect>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <?php if (have_rows('featured_button')): ?>
                                        <?php while (have_rows('featured_button')): the_row(); ?>
                                            <button id="one"
                                                    class="button btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!--desktop-->
    <div class="show-for-desktop">
        <div class="full-width main-background">
            <div class="grid-x">
                <div class="small-12 large-6 cell">
                    <div class="image-banner-xlarge" style="
                        background: linear-gradient(to right, rgba(54, 54, 54, .1), rgba(54, 54, 54, 1)),url(https://dalemyn.local/wp-content/uploads/2021/04/As-it-is-Background.jpg);
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-size: cover;">

                        <div class="grid-container">
                            <div class="grid-x grid-padding-y">
                                <div class="small-12 medium-offset-1 medium-5 relative cell height-lock-mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 large-6 cell dark-background">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-y">
                            <div class="small-12 medium-6 relative center cell">
                                <h1 class="padding-top margin-top">As it is</h1>
                                <h2 class="dark-color-invert">Watch the Exclusive Youtube Release</h2>
                                <div class="buttons">
                                    <?php if (have_rows('hero_button')): ?>
                                        <?php while (have_rows('hero_button')): the_row(); ?>
                                            <button id="one"
                                                    class="button btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
    *
    *
    ************ End AS IT PROMO ************
    ************ Start Resources ************
    *
    *
    -->

    <div class="full-width main-background">
        <div class="grid-x">
            <div class="small-12 cell">
                <div class="image-banner-xlarge add-padding" style="
                background: linear-gradient(
      rgba(0, 0, 0, 0.0),
      rgba(0, 0, 0, 0.0)
    ),url(https://foothillscollective.com/wp-content/uploads/2020/11/MTMTE-Background-White-Only.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="content-middle-medium add-padding">
                        <h2 class="text-overlay light-color-invert center"><?php the_field('resources_title'); ?></h2>
                        <hr>
                        <h3 class="text-overlay light-color-invert center"><?php the_field('resources_subtitle'); ?></h3>
                        <div class="buttons">
                            <?php if (have_rows('resources_button')): ?>
                                <?php while (have_rows('resources_button')): the_row(); ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    *
    *
    ************ End Resources ************
    ************ Start Truly Promo ************
    *
    *
    -->


    <!--DESKTOP-->
    <div class="full-width main-background show-for-desktop">
        <div class="grid-x">
            <div class="medium-12 cell">
                <div class="block">
                    <div class="side-v2 side-v2--left">
                        <div class="side-v2__bg" style="background-image: url(https://foothillscollective.com/wp-content/uploads/2020/10/Truly-Website-Background.jpg);
    background-size: cover;">
                        </div>

                        <div class="side-v2__inner">
                            <div class="side-v2__title">
                                <h3 class="dark-color-invert"><?php the_field('left_header'); ?></h3>
                                <div class="buttons">
                                    <?php if (have_rows('left_button')): ?>
                                        <?php while (have_rows('left_button')): the_row(); ?>
                                            <a href="<?php the_sub_field('button_link'); ?>">
                                                <button class="btn-hover color-3"><?php the_sub_field('button_text'); ?></button>
                                            </a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="side-v2 side-v2--right">
                        <div class="side-v2__bg" style="background-image: url(https://foothillscollective.com/wp-content/uploads/2020/11/Collective-Podcast-BG-copy.jpg);
    background-size: cover;">
                        </div>

                        <div class="side-v2__inner">
                            <div class="side-v2__title">
                                <h3 class="dark-color-invert">Check Out our BTS of Truly!</h3>
                                <div class="buttons">
                                    <?php if (have_rows('right_button')): ?>
                                        <?php while (have_rows('right_button')): the_row(); ?>
                                            <a href="<?php the_sub_field('button_link'); ?>">
                                                <button class="btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                            </a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END DESKTOP-->

    <!--MOBILE-->
    <div class="full-width main-background show-for-mobile">
        <div class="grid-x">
            <div class="small-12 cell">
                <?php if (have_rows('background_settings_mobile')): ?>
                <?php while (have_rows('background_settings_mobile')):
                the_row(); ?>
                <div class="slants" style="background: linear-gradient(
                        rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>),
                        rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>)
                        ),url(<?php the_sub_field('background_image'); ?>);
                        background-position: <?php the_sub_field('vertical_alignment'); ?> center;
                        background-size: cover;">
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <h3 class="dark-color-invert center add-padding"><?php the_field('split_title'); ?></h3>
                    <div class="full-width">
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="small-6 cell">
                                <a href="<?php the_field('left_link'); ?>">
                                    <img class="box-shadow rounded" src="<?php the_field('album_artwork_left'); ?>"
                                         alt="">
                                    <h4 class="dark-color-invert center"><?php the_field('album_title_left'); ?></h4>
                                </a>
                            </div>
                            <div class="small-6 cell">
                                <a href="<?php the_field('right_link'); ?>">
                                    <img class="box-shadow rounded" src="<?php the_field('album_artwork_right'); ?>"
                                         alt="">
                                    <h4 class="dark-color-invert center"><?php the_field('album_title_right'); ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MOBILE-->

    <!--
    *
    *
    ************ End Truly Promo ************
    ************ Start Youtube Promo ************
    *
    *
    -->

    <div class="full-width main-background">
        <div class="grid-x">
            <div class="small-12 cell">
                <div class="image-banner-xlarge add-padding" style="
                background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(https://foothillscollective.com/wp-content/uploads/2020/02/IMG_0523-copy.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="content-middle-medium add-padding">
                        <h2 class="text-overlay center"><?php the_field('social_title'); ?></h2>
                        <h3 class="text-overlay center"><?php the_field('social_subtitle'); ?></h3>
                        <div class="buttons">
                            <?php if (have_rows('social_button')): ?>
                                <?php while (have_rows('social_button')): the_row(); ?>
                                    <a href="<?php the_sub_field('button_link'); ?>">
                                        <button class="btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    *
    *
    ************ End YT Promo ************
    ************ Start About Section ************
    *
    *
    -->


    <div class="full-width main-background padding-bottom">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x">
                <div class="small-12 large-10 large-offset-1 cell">
                    <p class="featured-paragraph"><?php the_field('featured_paragraph'); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();