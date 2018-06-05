<?php
/**
 * Template name: Prices
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container-main price page">
                <div class="prices-details">
                    <h2 class="prices-heading"><?php echo get_theme_mod('prices_heading'); ?> </h2>
                </div>

                <ul class="prices-list page">

                    <?php

                    $args = [
                        'post_type' => 'price',
                    ];

                    query_posts($args);

                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'prices' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.//:
                    ; ?>
                    <?php the_posts_pagination($args);
                    ?>

                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
