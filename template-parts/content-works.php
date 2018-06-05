<?php
/**
 * Template part for displaying Works posts on the Our works page
 */

?>

<li class="work-item">
    <a href="<?php the_permalink(); ?>" class="work-link">
        <h3 class="work-heading">
            <?php the_field('project_title'); ?>
        </h3>
        <p class="work-desc">
            <?php the_field('project_desc'); ?>
        </p>
    </a>
    <div class="work-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="work-details">
        <p class="work-desc">
            <?php the_content(); ?>
        </p>
    </div>
</li>
