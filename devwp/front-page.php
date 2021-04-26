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



    <!--End Header-->


        <video src="<?php the_field('video_header'); ?>" autoplay loop playsinline muted></video>
        <div class="viewport-header">
            <div class="head-container">
                <div class="headline"><h1><?php the_field('title'); ?></h1></div>
                <hr style = "width: 50%;">
                <h2 class = "dark-color-invert"><?php the_field('subtitle'); ?></h2>

                <div id="modal-container">
                    <div class="modal-background">
                        <div class="modal">
                            <h2>Choose Your Platform.</h2>
                            <a href="https://accounts.spotify.com/en/login?continue=https:%2F%2Faccounts.spotify.com%2Fauthorize%3Fscope%3Duser-follow-modify%2Buser-read-email%2Buser-follow-read%2Buser-library-modify%2Buser-read-birthdate%2Bplaylist-modify-private%2Buser-read-recently-played%2Buser-top-read%26response_type%3Dcode%26redirect_uri%3Dhttp%253A%252F%252Fdistrokid.com%252Fspotify%252Fcallback%26state%3D0B7A%26client_id%3D4a85c6638c3743928bee71feacbbcbf5%26show_dialog%3Dfalse"><img class = "absolute" src="<?php the_field('spotify_logo'); ?>" alt=""></a>
                            <a href="#"><img src="<?php the_field('spotify_logo'); ?>" alt=""></a>
                            <a href="https://music.apple.com/us/album/resurrection-power-single/1562390105?uo=4&app=itunes&at=1001lry3&ct=dashboard"><img class = "absolute" src="<?php the_field('apple_logo'); ?>" alt=""></a>
                            <a href="#"><img src="<?php the_field('apple_logo'); ?>" alt=""></a>
                            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="buttons">
                    <?php if( have_rows('hero_button') ): ?>
                        <?php while( have_rows('hero_button') ): the_row(); ?>
                            <button id="one" class="button btn-hover color-1-alt"><?php the_sub_field('button_text'); ?></button>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                </div>
            </div>
        </div>




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
                        <div class="side-v2__bg" style = "background-image: url(https://foothillscollective.com/wp-content/uploads/2020/11/Collective-Podcast-BG-copy.jpg);
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
                    <h3 class = "dark-color-invert center add-padding"><?php the_field('split_title'); ?></h3>
                    <div class="full-width">
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="small-6 cell">
                                <a href="<?php the_field('left_link'); ?>">
                                    <img class = "box-shadow rounded" src="<?php the_field('album_artwork_left'); ?>" alt="">
                                    <h4 class = "dark-color-invert center"><?php the_field('album_title_left'); ?></h4>
                                </a>
                            </div>
                            <div class="small-6 cell">
                                <a href="<?php the_field('right_link'); ?>">
                                    <img class = "box-shadow rounded" src="<?php the_field('album_artwork_right'); ?>" alt="">
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
    ),url(https://foothillscollective.com/wp-content/uploads/2020/03/59-_DSC5732-copy.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-y">
                            <div class="small-12 medium-offset-1 medium-5 relative cell">
                                <img class = "box-shadow rounded add-padding" src="<?php the_field('album_artwork_featured'); ?>" alt="">
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