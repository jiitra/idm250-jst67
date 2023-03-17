<div class="div-center">

    <h1> <?php echo get_field('header') ?> </h1>
    <div class="vertical-line"></div>

    <p>
        <?php echo get_field('text') ?>
    </p>

    <button onclick="window.location.href = '<?php echo get_field('button_link') ?>';">
            <?php echo get_field('button_text'); ?>
    </button>


    <?php $image = get_field('bg_img'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    

</div>