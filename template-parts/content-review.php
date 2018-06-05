<?php
/**
 * Template part for displaying Reviews posts
 */

?>

<div class="review-item">
    <blockquote class="review-desc">
        <?php the_field('review_desc'); ?>
    </blockquote>
    <div class="reviewer-details">
        <p class="reviewer-name"><?php the_field('reviewer_name'); ?></p>
        <p class="reviewer-position"><?php the_field('reviewer_position'); ?></p>
    </div>
</div>
