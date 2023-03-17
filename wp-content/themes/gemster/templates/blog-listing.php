<?php
/* Template Name: Blog Listing */
/**
 * This template is used to display the blog listing page. Clicking on these cards will go to the post that uses single.php
 * This is an alternative to using the archive.php template.
 */
get_header();

$args = [
    'post_type' => 'post', // This is the default post type for Wordpress
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date',
];
$blog_posts_query = new WP_Query($args);
?>

<div>
  <div>
    <div>
      <h2 class="div-center">
        <?php echo get_the_title(); ?>
      </h2>
      <div class="listing-grid">
        <?php
        // Check if there are any posts
        if ($blog_posts_query->have_posts()) {
            // Loop through the posts
            while ($blog_posts_query->have_posts()) {
                // This is where the post's data is set up
                $blog_posts_query->the_post();
                // This is where we include the blog card component
                get_template_part('components/blog-card');
            }
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            echo '<p>Sorry, no posts matched your criteria.</p>';
        }?>
      </div>
    </div>
  </div>
</div>
</div>


<?php get_footer(); ?>