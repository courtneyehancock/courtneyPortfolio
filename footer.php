<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="col-lg-4">
        <!--Middle Left Space-->
        <?php dynamic_sidebar('middle-left-footer'); ?>
      </div>

      <div class="col-lg-2">
        <!--Menu Title Widget-->
        <?php dynamic_sidebar('menu-title-footer'); ?>
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>

      <div class="col-lg-3">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
        <!--Social Widget-->
        <?php dynamic_sidebar('social-footer'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!--Copyright-->
        <p class="text-center font-italic">&copy; Courtney Hancock 2020</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
