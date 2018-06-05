<?php
/**
 * Template part for displaying Features posts on the Features page
 */

?>

<li class="feature-item feature-item-<?php the_ID() ?>">
    <div class="feature-icon">
        <span href="#" class="feature-icon"></span>
    </div>
    <div class="feature-details">
        <h3 class="feature-heading">
            <?php the_field('feature_title'); ?>
        </h3>
        <p class="feature-desc">
            <?php the_content(); ?>
        </p>
    </div>

</li>
<style>
    .feature-item-<?php the_ID()?> span.feature-icon {
        background-image: url("<?php the_field('feature_icon')?>");
        background-repeat: no-repeat;
    }
</style>