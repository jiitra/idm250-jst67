<footer>
<img src="<?php echo get_template_directory_uri(); ?>/dist/img/gemster-white.svg" alt="Logo">
    <?php wp_footer();

    wp_nav_menu(['theme_location' => 'footer-menu']); ?>
    
    <div>
      <img id="twitter" src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter-light.svg" alt="Twitter">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/insta-light.svg" alt="Instagram">
</div>

    <p class="copyright"> &copy; GEMSTER <?php echo date('Y'); ?> | ALL RIGHTS RESERVED </p>

</footer>

</body>

</html>