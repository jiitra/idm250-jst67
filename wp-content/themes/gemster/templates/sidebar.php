<?php
/* Template Name: Page with Sidebar */
get_header();

get_template_part('components/heros/hero-page'); ?>



<div class="" data-component="sidebar-template">
  <div>
    <?php get_template_part('components/content'); ?>
  </div>
  <div class="sidebar">
    <?php get_template_part('components/sidebar'); ?>
  </div>
</div>
<?php get_footer(); ?>