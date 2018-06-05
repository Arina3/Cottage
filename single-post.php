<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container-main post clearfix">
                <?php setPostViews(get_the_ID()); ?>

                <?php

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'post');

                    // If comments are open or we have at least one comment, load up the comment template.

                endwhile; // End of the loop.//:

                wp_reset_postdata();
                ?>

                <div class="container-related clearfix">

                    <?php global $post;

                    // тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
                    $related_tax = 'category';

                    // получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
                    $cats_tags_or_taxes = wp_get_object_terms($post->ID, $related_tax, array('fields' => 'ids'));

                    // массив параметров для WP_Query
                    $args = array(
                        'posts_per_page' => 3, // сколько похожих постов нужно вывести,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $related_tax,
                                'field' => 'id',
                                'include_children' => false, // нужно ли включать посты дочерних рубрик
                                'terms' => $cats_tags_or_taxes,
                                'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
                            )
                        )
                    );
                    $related_query = new WP_Query($args);

                    // если посты, удовлетворяющие нашим условиям, найдены
                    if ($related_query->have_posts()) :

                        // выводим заголовок блока похожих постов
                        echo '<h3>Related Posts</h3>'; ?>

                        <ul class="related-list">

                            <?php // запускаем цикл
                        while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <li class="related-list-item">
                                <div><?php the_post_thumbnail('medium'); ?></div>
                                <h4 class="related-heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <ul class="related-posts-details">
                                    <li class="related-info-item">By <?php the_author(); ?></li>
                                    <li class="related-info-item string">&#9474;</li>
                                    <li class="related-info-item"><?php comments_number('0 comment', '1 comment', '% comments'); ?></li>
                                </ul>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="related-post-link">Read more</a>
                            </li>

                        <?php endwhile; ?>

                        </ul>

                    <?php endif;

                    // не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
                    wp_reset_postdata();
                    ?>
                </div>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();