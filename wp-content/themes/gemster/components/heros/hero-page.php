<div class="hero-page div-center">

    <div class="horizontal-line hero-line"></div>

    <?php $image = get_field('hero_image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    
    <h5> <?php echo get_field('subheader'); ?> </h5>
    <h1> <?php echo get_the_title(); ?> </h1>

    <div class="vertical-line"></div>

</div>