<?php
/**
 * Template part for displaying Works posts
 */

?>

<li class="work-item">
    <a href="<?php the_permalink(); ?>" class="work-link">
        <div class="work-image">
            <img src="<?php the_field('work_image'); ?>">
        </div>
        <div class="work-details">
            <h3 class="work-heading">
                <?php the_field('project_title'); ?>
            </h3>
            <p class="work-desc">
                <?php the_field('project_desc'); ?>
            </p>
        </div>
    </a>
</li>
