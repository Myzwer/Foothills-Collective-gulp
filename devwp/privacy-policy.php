<?php
/**
 * Template Name: Privacy Policy
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
        <div class="grid-x grid-padding-x full-background" style = "background: url(<?php the_field('background'); ?>);  background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class = "subpage-header center"><?php the_field('title_text'); ?></h1>
                </div>
            </div>
        </div>
    </div>


    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x tb-padding">
                <div class="small-12 medium-10 color-inverse cell dont-break-out">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



<?php get_footer();
