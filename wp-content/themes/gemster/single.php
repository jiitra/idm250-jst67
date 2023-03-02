<?php get_header(); ?>

<?php get_template_part('components/heros/hero-single'); ?>

<?php get_template_part('components/content');

$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

?> 

<?php get_footer(); ?>