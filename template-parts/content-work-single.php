<?php
/**
 * Template part for displaying single Work post
 */

?>

<li class="work-item single">
    <h3 class="work-heading single">
        <?php the_field('project_title'); ?>
    </h3>
    <p class="work-desc single">
        <?php the_field('project_desc'); ?>
    </p>
    <div class="work-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="work-details">
        <p class="work-desc">
            <?php the_content(); ?>
        </p>
    </div>
</li>
