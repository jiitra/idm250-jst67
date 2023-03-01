<?php get_header(); ?>

<div class="hero">

   <h1> <?php echo get_the_title(); ?> </h1>
   <h5> <?php echo get_field('subheader'); ?> </h5>
   <?php $image = get_field('hero_image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <div class="line"></div>

</div>

<?php get_template_part('components/content');

$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

?> 
<?php get_footer(); ?>