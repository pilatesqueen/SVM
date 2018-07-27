<!-- Contact -->
<section id="newsletter">
  <div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
          <?php if ( get_theme_mod('cta_header') != ''): ?>
              <h2 class="section-heading text-uppercase"><?php echo get_theme_mod('cta_header'); ?></h2>
          <?php endif; ?>
          <?php if ( get_theme_mod('cta_subheading') != ''): ?>
              <h3 class="section-subheading"><?php echo get_theme_mod('cta_subheading'); ?></h3>
          <?php endif; ?>
          <?php if ( get_theme_mod('phone') != ''): ?>
            <a class="btn btn-primary btn-xl" href="tel:1-<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
          <?php endif; ?>
        </div>
      </div>

    </div>

</section>

<!-- Footer -->
<footer>
  <div class="footer-block-1">
  <div class="container">

    <div class="row ">
      <div class="col-sm-4 text-center">
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
      <ul class="list-inline social-buttons">
            <?php if ( get_theme_mod('social_facebook') != ''): ?>
              <li class="list-inline-item">
          <a target="_blank" href="<?php echo get_theme_mod('social_facebook'); ?>">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <?php endif; ?>
        <?php if ( get_theme_mod('social_instagram') != ''): ?>
        <li class="list-inline-item">
          <a  target="_blank" href="<?php echo get_theme_mod('social_instagram'); ?>">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      <?php endif; ?>
    <?php if ( get_theme_mod('social_twitter') != ''): ?>
        <li class="list-inline-item">
          <a  target="_blank" href="<?php echo get_theme_mod('social_twitter'); ?>">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <?php endif; ?>
        <?php if ( get_theme_mod('social_youtube') != ''): ?>
            <li class="list-inline-item">
              <a  target="_blank" href="<?php echo get_theme_mod('social_youtube'); ?>">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <?php endif; ?>
      </ul>
      </div>
      <div class="col-sm-4 text-center">
          <?php dynamic_sidebar('sidebar-footer-2'); ?>


      </div>
      <div class="col-sm-4 text-center">
          <?php dynamic_sidebar('sidebar-footer-3'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col text-center text-small mt-4">

        &copy; <?php bloginfo('name'); ?> <?php echo date( 'Y' ); ?> - All Rights Reserved.
		  <?php if ( function_exists( 'the_privacy_policy_link' ) ) {
  				echo "Read our ", the_privacy_policy_link();
				}; ?>.
		  Site by <a href="http://pilatesbridge.com/website-services" target="_blank" rel="designer">Pilates Website Services</a>
      </div>
    </div>
    </div>

  </div>
</div>

</footer>
