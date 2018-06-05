<?php
/**
 * Template part for displaying Reviews posts on the Reviews page
 */

?>

<li class="review-item">
    <div class="reviewer-details">
        <p class="reviewer-image">
            <img src="<?php the_field('reviewer_image'); ?>">
        </p>
        <p class="reviewer-name">
            <?php the_field('reviewer_name'); ?>
        </p>
        <p class="reviewer-position">
            <?php the_field('reviewer_position'); ?>
        </p>
    </div>
    <blockquote class="review-desc">
        <i class="fa fa-quote-right"></i>
        <?php the_field('review_desc'); ?>
    </blockquote>
</li>
