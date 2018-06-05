<?php
/**
 * Template part for displaying Contacts posts
 */

?>

<div class="contacts-item">
    <div class="footer-address page">
        <p class="address-title"><?php echo get_theme_mod('footer_address_title') ?></p>
        <p class="address-desc"><?php echo get_theme_mod('footer_address_desc') ?></p>
    </div>
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
</div>