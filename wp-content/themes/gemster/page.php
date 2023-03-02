<?php get_header(); ?>

<?php get_template_part('components/heros/hero-page'); ?>

<!-- static until i figure it out -->
<div class="featured-post">

   <!-- placeholder -->
   <?php $image = get_field('hero_image'); ?>
   <div class="featured-post-img-container">
   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
   </div>
   
   <h3> <em>Featured Post</em> </h3>
   <p>I want to share my daily routine with you all.</p>
   <button>Read More</button>

</div>


<?php get_template_part('components/content'); ?>

<?php

$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

?>


<?php get_footer(); ?>