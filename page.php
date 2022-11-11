<?php get_header(); /* Template Name: Generic Page Template */ ?>
<main>
    <div class="container">
        <?php
        while (have_posts()) {
            the_post(); ?>
        <?php if (get_the_title()) { ?>
        <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php if (get_the_content()) { ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php } ?>

        <?php } ?>
    </div>
</main>
<?php get_footer(); ?>