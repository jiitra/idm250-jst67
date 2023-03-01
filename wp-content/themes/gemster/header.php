<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo get_the_title(); ?> | Gemster</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicon.png">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header>
    <div class="content">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/gemster-brand.svg" alt="Logo">
        <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
      </a>

      <div>
        <a href="https://twitter.com/home" target="_blank">
          <img id="twitter" src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter-brand.svg" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/?hl=en" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/insta-brand.svg" alt="Instagram">
        </a>
      </div>
    </div>

  </header>