<?php
/**
 * Template name: Blog page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container-main posts page">

            <ul class="blog-list page">

                <?php

                $args = [
                    'post_type' => 'post',
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'blog');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.//:

                global $wp_query;
                if (  $wp_query->max_num_pages > 1 ) : ?>
                    <script id="true_loadmore">
                      var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                      var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                      var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    </script>
                <?php endif;

                ; ?>

                <?php wp_reset_postdata(); ?>
            </ul>

        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
