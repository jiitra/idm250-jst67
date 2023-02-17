<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header>
    <p class="header-logo">Gemster logo</p>
    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
    <p class="socials">Twitter logo Instagram logo</p>
  </header>