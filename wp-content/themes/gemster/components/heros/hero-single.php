<div class="hero-single">

   <h1> <?php echo get_the_title(); ?> </h1>
   <h5> <?php echo get_field('subheader'); ?> </h5>
   <?php $image = get_field('hero_image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <div class="box-line"></div>

</div>