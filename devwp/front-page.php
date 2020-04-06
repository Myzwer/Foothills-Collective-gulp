<?php
/**
 * Template Name: Landing
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

    <div class="full-width gradient-background">
        <div class = "grid-container content-middle-medium">
            <div class="grid-x grid-padding-x padding-outer">
                <div class="small-12 medium-8 medium-order-2 large-6 large-order-2 cell relative">
                    <div class="content-middle-large">
                        <div id="countdown" data-date="2020-04-10" data-time="00:00:01">
                            <h1 class = "center">Life to the Lion</h1>
                            <h3 class="center padding-outer dark-color-invert">Foothills Collective's Debut Album</h3>
                            <div class="canvas-container">
                                <canvas id="days"></canvas>
                                <canvas id="hours"></canvas>
                                <canvas id="minutes"></canvas>
                                <canvas id="seconds"></canvas>
                            </div>
                        </div>
                        <div class="buttons center">
                            <a href = "https://foothills-church-shop.myshopify.com/products/life-to-the-lion-album?variant=32580850712664">
                                <button class="btn-hover color-1">Early Exclusive CD</button>
                            </a>
                            <a href = "https://foothillscollective.com/homepage">
                                <button class="btn-hover color-3">Continue to Site</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-4 large-6 large-order-1 cell">
                    <img src="https://foothillscollective.com/wp-content/uploads/2020/04/Life-to-the-Lion.jpg" alt="">
                </div>
            </div>
        </div>
    </div>






<?php get_footer();
