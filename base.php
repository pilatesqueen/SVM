<?php

use Roots\SVM\Setup;
use Roots\SVM\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'svm'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <!-- Check if it's a front page. This is designed for one page websites ONLY -->
    <?php if ( is_front_page() ): ?>
            <div class="wrap" role="document">
              <div class="content">
                <main>
                    <?php include Wrapper\template_path(); ?>
                  </main>
                </div>
              </div>
        <?php else: ?>

    <!-- In case the theme is not set as a one page layout use default settings. Defaults are unstyled -->

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  <?php endif; ?>

  <!-- Let's add a footer to the website -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
