<?php
/**
 * Template part for displaying FAQ posts
 */

?>

<li class="faq-item">
    <div class="faq-info">
        <h3 class="faq-heading">
            <?php the_field('question_title'); ?>
        </h3>
        <p class="faq-desc">
            <?php the_field('question_answer'); ?>
        </p>
    </div>
</li>