<?php
/**
 * Template Name: Live
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
        <div class="grid-x grid-padding-x full-background" style = "background: url(https://foothillscollective.com/wp-content/uploads/2020/02/IMG_0523-copy.jpg);  background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "center" >We're Live!</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container ">
            <div class="grid-x grid-padding-x tb-padding">
                <div class="small-12 cell">
                    <h1 class = "color-inverse ">Worship With Us</h1>
                    <div id="la1-video-player" data-embed-id="e4df9c4a-e1d6-4ba0-85c2-160980140490">&nbsp;</div>
                    <script src="https://control.livingasone.com/webplayer/loader.min.js" type="application/javascript"></script>
                    <div class="buttons">
                        <a href = "https://foothillschurch.com/">
                            <button class="btn-hover color-1">Foothills Church</button>
                        </a>
                        <a href = "https://foothillschurch.com/give/">
                            <button class="btn-hover color-1">Give Online</button>
                        </a>
                        <a href = "https://foothills.typeform.com/to/NWebCq">
                            <button class="btn-hover color-1">Connect With Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer();
