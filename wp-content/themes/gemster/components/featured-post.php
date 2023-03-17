<?php

   $featured_post = get_field('featured_post');
   $permalink = get_permalink( $featured_post->ID );
   $excerpt = get_the_excerpt( $featured_post);
   $image = get_the_post_thumbnail_url($featured_post);


   if( $featured_post ): ?>
      <div class="featured-post">

         <div class="featured-post-img-container">
            <img src="<?php echo get_the_post_thumbnail_url($featured_post); ?>"
            alt="<?php echo get_the_title($featured_post); ?> Featured Image">
         </div>

            <h5> <?php echo get_field('subtitle'); ?> </h5>
            <h3><em><?php echo esc_html( $featured_post->post_title ); ?></em></h3>

            <p><?php echo $excerpt; ?></p>


            <button onclick="window.location.href = '<?php echo esc_url( $permalink ); ?>';">
            <?php echo get_field('button_text'); ?>
            </button>
      </div>

   <?php endif; ?>