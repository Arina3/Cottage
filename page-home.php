<?php
/**
 * For Home page
 */

get_header('home'); ?>

<section class="about-company">
    <div class="container-main about">
        <p class="about-desc">
            <?php echo get_theme_mod('about_desc'); ?>
        </p>
    </div>
</section>

    <section class="features">
        <div class="container-main feature">

            <ul class="features-list">

                <?php $args = [
                    'post_type' => 'feature',
                    'posts_per_page' => 3,
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'feature');

                endwhile; // End of the loop.//:
                ; ?>

                <?php wp_reset_postdata(); ?>

            </ul>

        </div>
    </section>

    <section class="our-works">
        <div class="container-main work">
            <div class="our-works-details">
                <h2 class="our-works-heading"><?php echo get_theme_mod('works_heading'); ?></h2>
                <span class="our-works-subheading"><?php echo get_theme_mod('works_subheading'); ?></span>
            </div>

            <ul class="works-list">

                <?php $args = [
                    'post_type' => 'work',
                    'posts_per_page' => 8,
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'work');

                endwhile; // End of the loop.//:
                ; ?>

                <?php wp_reset_postdata(); ?>

            </ul>

        </div>
    </section>

    <section class="reviews">
        <div class="container-main review">
            <div class="container-reviews-small">

                <div class="reviews-details">
                    <h2 class="reviews-heading"><?php echo get_theme_mod('reviews_heading'); ?></h2>
                </div>

                <?php
                $args = array(
                    'post_type' => 'review',
                );

                $the_slider = new WP_Query($args); ?>

                <?php if ($the_slider->have_posts()) : ?>
                    <div class="reviews-slider">

                        <?php while ($the_slider->have_posts()) : $the_slider->the_post();

                            get_template_part('template-parts/content', 'review');

                        endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="prices">
        <div class="container-main price">
            <div class="prices-details">
                <h2 class="prices-heading"><?php echo get_theme_mod('prices_heading'); ?> </h2>
                <span class="prices-subheading"><?php echo get_theme_mod('prices_subheading'); ?></span>
            </div>


            <ul class="prices-list">

                <?php $args = [
                    'post_type' => 'price',
                    'posts_per_page' => 3,
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'prices');

                endwhile; // End of the loop.//:
                ; ?>

                <?php wp_reset_postdata(); ?>

            </ul>

        </div>
    </section>

    <section class="faq">
        <div class="container-main questions">
            <div class="faq-details">
                <h2 class="faq-heading"><?php echo get_theme_mod('faq_heading'); ?> </h2>
                <span class="faq-subheading"><?php echo get_theme_mod('faq_subheading'); ?></span>
            </div>

            <ul class="faq-list">

                <?php $args = [
                    'post_type' => 'faqs',
                    'posts_per_page' => 4,
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'faq');

                endwhile; // End of the loop.//:
                ; ?>

                <?php wp_reset_postdata(); ?>

            </ul>
            
        </div>
    </section>

    <section class="blog">
        <div class="container-main posts">
            <div class="blog-details">
                <h2 class="blog-heading"><?php echo get_theme_mod('blog_heading'); ?> </h2>
                <span class="blog-subheading"><?php echo get_theme_mod('blog_subheading'); ?></span>
            </div>

            <ul class="blog-list">

                <?php

                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part( 'template-parts/content', 'blog' );

                endwhile; // End of the loop.

                wp_reset_postdata();

                ?>

            </ul>

            <div class="post-item-button">
                <a href="<?php echo get_theme_mod('blog_button_url'); ?>" class="view-more-button">
                    <?php echo get_theme_mod('blog_button_title'); ?>
                </a>
            </div>

        </div>
    </section>

<?php
get_sidebar();
get_footer();
