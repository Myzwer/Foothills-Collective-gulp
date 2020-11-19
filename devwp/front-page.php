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


    <?php if( have_rows('background_settings_hero') ): ?>
        <?php while( have_rows('background_settings_hero') ): the_row(); ?>
            <div class="grid-container full-width">
                <div class="grid-x grid-padding-x front-page-hero" style = "background: linear-gradient(
                    rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>),
                    rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>)
                    ),url(<?php the_sub_field('background_image'); ?>);
                    background-position: <?php the_sub_field('vertical_alignment'); ?> center;
                    background-repeat: no-repeat;
                    background-attachment: scroll;
                    background-size: cover;">
                <?php endwhile; ?>
            <?php endif; ?>

                <div class="large-12 cell">
                    <div class="content-middle">
                        <h1 class = "center light-color-invert"><?php the_field('title'); ?></h1>
                        <h2 class = "center light-color-invert"><?php the_field('subtitle'); ?></h2>
                        <div class="buttons">
                            <?php if( have_rows('hero_button') ): ?>
                                <?php while( have_rows('hero_button') ): the_row(); ?>
                                    <a href = "<?php the_sub_field('button_link'); ?>">
                                        <button class="btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--End Header-->



    <!--DESKTOP-->
    <div class="full-width main-background show-for-desktop">
        <div class="grid-x">
            <div class="medium-12 cell">
                <div class="block">
                    <div class="side-v2 side-v2--left">
                        <div class="side-v2__bg" style = "background-image: url(https://foothillscollective.com/wp-content/uploads/2020/10/Truly-Website-Background.jpg);
    background-size: cover;">
                            </div>

                            <div class="side-v2__inner">
                                <div class="side-v2__title">
                                    <h3 class = "dark-color-invert"><?php the_field('left_header'); ?></h3>
                                    <div class="buttons">
                                        <?php if( have_rows('left_button') ): ?>
                                            <?php while( have_rows('left_button') ): the_row(); ?>
                                                <a href = "<?php the_sub_field('button_link'); ?>">
                                                    <button class="btn-hover color-3"><?php the_sub_field('button_text'); ?></button>
                                                </a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="side-v2 side-v2--right">
                        <div class="side-v2__bg" style = "background-image: url(https://dalemyn.local/wp-content/uploads/2020/11/Collective-Podcast-BG.jpg);
    background-size: cover;">
                        </div>

                        <div class="side-v2__inner">
                            <div class="side-v2__title">
                                <h3 class = "dark-color-invert">Check Out our BTS of Truly!</h3>
                                <div class="buttons">
                                    <?php if( have_rows('right_button') ): ?>
                                        <?php while( have_rows('right_button') ): the_row(); ?>
                                            <a href = "<?php the_sub_field('button_link'); ?>">
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
                <?php if( have_rows('background_settings_mobile') ): ?>
                <?php while( have_rows('background_settings_mobile') ): the_row(); ?>
                <div class="slants" style = "background: linear-gradient(
                        rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>),
                        rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>)
                        ),url(<?php the_sub_field('background_image'); ?>);
                        background-position: <?php the_sub_field('vertical_alignment'); ?> center;
                        background-size: cover;">
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="slant-top"></div>
                    <h3 class = "dark-color-invert center add-padding"><?php the_field('split_title'); ?></h3>
                    <div class="full-width">
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="small-6 cell">
                                <a href="<?php the_field('left_link'); ?>">
                                    <img class = "box-shadow" src="<?php the_field('album_artwork_left'); ?>" alt="">
                                    <h4 class = "dark-color-invert center"><?php the_field('album_title_left'); ?></h4>
                                </a>
                            </div>
                            <div class="small-6 cell">
                                <a href="<?php the_field('right_link'); ?>">
                                    <img class = "box-shadow" src="<?php the_field('album_artwork_right'); ?>" alt="">
                                    <h4 class = "dark-color-invert center"><?php the_field('album_title_right'); ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MOBILE-->



        <div class="full-width main-background">
            <div class="grid-x">
                <div class = "small-12 cell"
                <div class="image-banner-xlarge" style = "
                background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(https://dalemyn.local/wp-content/uploads/2020/03/59-_DSC5732-copy.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-y">
                            <div class="small-12 medium-offset-1 medium-5 relative cell">
                                <img class = "box-shadow" src="<?php the_field('album_artwork_featured'); ?>" alt="">
                            </div>
                            <div class="small-12 medium-6 relative cell">
                                <div class="content-middle-medium add-padding">
                                <h2 class = "text-overlay center"><?php the_field('album_title'); ?></h2>
                                <h3 class = "text-overlay center"><?php the_field('album_subtitle'); ?></h3>
                                    <hr>
                                    <div class="buttons">
                                        <?php if( have_rows('album_button') ): ?>
                                            <?php while( have_rows('album_button') ): the_row(); ?>
                                                <a href = "<?php the_sub_field('button_link'); ?>">
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
    </div>


    <div class="full-width main-background">
        <div class="grid-x">
            <div class="small-12 cell">
                <div class="image-banner-xlarge" style = "
                background: linear-gradient(
      rgba(0, 0, 0, 0.0),
      rgba(0, 0, 0, 0.0)
    ),url(https://foothillscollective.com/wp-content/uploads/2020/11/MTMTE-Background-White-Only.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="content-middle-medium add-padding">
                        <h2 class = "text-overlay light-color-invert center"><?php the_field('resources_title'); ?></h2>
                        <h3 class = "text-overlay light-color-invert center"><?php the_field('resources_subtitle'); ?></h3>
                        <div class="buttons">
                            <?php if( have_rows('resources_button') ): ?>
                                <?php while( have_rows('resources_button') ): the_row(); ?>
                                    <a href = "<?php the_sub_field('button_link'); ?>">
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


    <div class="full-width main-background">
        <div class="grid-x">
            <div class="small-12 cell">
                <div class="image-banner-xlarge" style = "
                background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),url(https://foothillscollective.com/wp-content/uploads/2020/02/IMG_0523-copy.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="content-middle-medium add-padding">
                        <h2 class = "text-overlay center"><?php the_field('social_title'); ?></h2>
                        <h3 class = "text-overlay center"><?php the_field('social_subtitle'); ?></h3>
                        <div class="buttons">
                            <?php if( have_rows('social_button') ): ?>
                                <?php while( have_rows('social_button') ): the_row(); ?>
                                    <a href = "<?php the_sub_field('button_link'); ?>">
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





    <div class="full-width main-background padding-bottom">
        <div class = "grid-container full-width">
            <div class="grid-x grid-padding-x">
                <div class="small-12 large-10 large-offset-1 cell">
                    <p class="featured-paragraph"><?php the_field('featured_paragraph'); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();