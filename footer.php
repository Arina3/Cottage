<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cottage
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <section class="footer-nav">
        <div class="container-main footer">
            <div class="footer-logo">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_theme_mod( 'footer_logo' ); ?>">
                    </a>
                </div>
                <p class="footer-nav-desc"><?php echo get_theme_mod('footer_desc'); ?></p>
            </div>
            <div class="footer-phone">
                <?php dynamic_sidebar('footer-sidebar-phone'); ?>
            </div>
            <div class="footer-address">
                <?php dynamic_sidebar('footer-sidebar-address'); ?>
            </div>
            <div class="footer-contact-link">
                <a href="<?php echo get_theme_mod('footer_contact_url'); ?>" class="footer-contact-link"><?php echo get_theme_mod('footer_contact_button'); ?></a>
            </div>
        </div>
    </section>

    <section class="footer-copyright">
        <div class="container-main footer">
            <div class="site-info">
                <?php dynamic_sidebar('footer-sidebar-copyright'); ?>
            </div><!-- .site-info -->
            <nav class="footer-nav-social">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-socials-menu',
                    'container_class' => 'custom-footer-socials',
                ));
                ?>
            </nav>
        </div>
    </section>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
