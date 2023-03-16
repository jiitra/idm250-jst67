<?php
/**
 * This component is used to display a single blog post card.
 * It should be used inside a loop.
 */
?>

<a href="<?php echo get_the_permalink(); ?>">
<article data-component="blog-card" class="blog-card">
  <div>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image">
    <div ></div>
  </div>
  <div>
    <div>
      <h3>
          <?php echo get_the_title(); ?>
      </h3>
      <p>
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
  </div>
</article>
</a>
