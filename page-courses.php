<?php
/**
 * Template Name: All Courses
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <h1>Khóa học trực tuyến</h1>
        <?php echo do_shortcode('[learn_press_courses]'); ?>
    </div>
</main>

<?php get_footer(); ?>
