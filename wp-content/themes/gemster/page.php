<?php get_header(); ?>

<?php get_template_part('components/heros/hero-page'); ?>

<?php get_template_part('components/featured-post'); ?>

<?php get_template_part('components/content'); ?>

<?php

$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

?>


<?php get_footer(); ?>