<?php
/**
 * Template part for displaying Single post
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

    <header class="entry-header post">

        <?php the_post_thumbnail(); ?>

        <?php
        if (is_singular()) :

            the_title('<h1 class="entry-title">', '</h1>');
        else :

            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) : ?>
            <div class="entry-meta-container">
                <div class="entry-meta-post">
                    <span class="entry-meta">By <?php the_author(); ?> &#9474; </span> <span
                            class="entry-meta"><?php the_category(); ?> &#9474; </span>
                    <span class="entry-meta"><?php comments_number('0 comment', '1 comment', '% comments'); ?>
                        &#9474; </span> <span class="entry-meta"><?php the_time('j F, Y'); ?> &#9474; </span> <span
                            class="entry-meta"><i
                                class="fa fa-heart"></i> <?php echo getPostViews(get_the_ID()); ?></span>
                </div>
            </div><!-- .entry-meta -->
        <?php
        endif; ?>

    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

</article>
<div class="sidebar-post clearfix">
    <ul class="sidebar-list">
        <?php dynamic_sidebar('tags-post-sidebar'); ?>
        <?php dynamic_sidebar('archives-post-sidebar'); ?>
        <?php dynamic_sidebar('recent-post-sidebar'); ?>
    </ul>
</div>
