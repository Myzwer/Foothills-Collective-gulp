<?php
/**
 * The template for displaying the footer of the Yestau Theme
 *
 * Contains the opening of the footer of all pages and all subsequent content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

?>
<script>
    jQuery(document).foundation();
</script>



<!-- FOOTER START -->
<div class="footer">
    <div class="contain">
        <div class="col">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-column-1' ) ); ?>
        </div>

        <div class="col">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-column-2' ) ); ?>
        </div>

        <div class="col">
<!--            Had to do it this way to the sections look the same-->
            <ul>
                <li class = "section-title"> <a>Let's Be Social</a></li>
            </ul>
            <div class="social-icons">
                <a href="https://www.facebook.com/foothillscollective/"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/foothills.collective/?hl=en"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCX_IiZ45InnY5o85cB1i-BA"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- END OF FOOTER -->





<?php wp_footer(); ?>

</body>
</html>
