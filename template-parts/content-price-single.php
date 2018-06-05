<?php
/**
 * Template part for displaying single Price post
 */

?>

<li class="price-item">
    <div class="price-item-main">
        <div class="price-item-header">
            <img src="<?php the_field('price_image'); ?>">
            <div class="price-item-header-info">
                <div class="container-price-title">
                    <h3 class="price-title"><?php the_field('price_title'); ?></h3>
                </div>
                <div class="container-price-amount">
                    <p class="price-amount"><?php the_field('price'); ?></p>
                </div>
            </div>
        </div>
        <ul class="price-features-list">
            <li class="feature-item clearfix">
                <div class="feature-icon">
                    <img src="<?php the_field('price_icon_base'); ?>">
                </div>
                <div class="base-item details">
                    <h4 class="feature-title"><?php the_field('base_title'); ?></h4>
                    <p class="feature-desc"><?php the_field('base_desc'); ?></p>
                </div>
            </li>
            <li class="feature-item clearfix">
                <div class="feature-icon">
                    <img src="<?php the_field('price_icon_roof'); ?>">
                </div>
                <div class="base-item details">
                    <h4 class="feature-title"><?php the_field('roof_title'); ?></h4>
                    <p class="feature-desc"><?php the_field('roof_desc'); ?></p>
                </div>
            </li>
            <li class="feature-item clearfix">
                <div class="feature-icon">
                    <img src="<?php the_field('facade_icon'); ?>">
                </div>
                <div class="base-item details">
                    <h4 class="feature-title"><?php the_field('facade_title'); ?></h4>
                    <p class="feature-desc"><?php the_field('facade_desc'); ?></p>
                </div>
            </li>
            <li class="feature-item clearfix">
                <div class="feature-icon">
                    <img src="<?php the_field('interior_icon'); ?>">
                </div>
                <div class="base-item details">
                    <h4 class="feature-title"><?php the_field('interior_title'); ?></h4>
                    <p class="feature-desc"><?php the_field('interior_desc'); ?></p>
                </div>
            </li>
            <li class="feature-item clearfix">
                <div class="feature-icon">
                    <img src="<?php the_field('systems_interior_icon'); ?>">
                </div>
                <div class="base-item details">
                    <h4 class="feature-title"><?php the_field('systems_title'); ?></h4>
                    <p class="feature-desc"><?php the_field('systems_desc'); ?></p>
                </div>
            </li>
        </ul>
    </div>
    <div class="price-contact-link">
        <a href="<?php the_field('price_contact_link'); ?>">Contact us</a>
    </div>
</li>

