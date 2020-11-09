<?php
/**
 * Template Name: Contact
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
            <div class="small-12 center cell">
                <h3>Looking to get in touch?</h3>
                <p>For press inquiries, publishing, touring, or any other questions, please contact worship@foothillschurch.com.</p>
                <hr>
            </div>
            <div class="small-12 center cell">
                <h3>Booking</h3>
                <p>For booking inquiries, please complete this form. We will get back to you as quickly as we can.</p>
            </div>
            <div class="small-12 medium-10 cell">
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