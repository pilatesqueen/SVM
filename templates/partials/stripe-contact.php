<!-- Focus Call to Action -->
<section id="front-block">
  <div class="container">
    <?php if ( !empty(get_sub_field('title')) ) : ?>
      <div class="row">
        <div class="col-lg-12 text-center">
            <?php if ( !empty(get_sub_field('section')) ) : ?>
              <a name="<?php the_sub_field('section'); ?>"></a><?php endif; ?>
              <h2 class="section-heading text-uppercase"><?php the_sub_field('title'); ?></h2>
            <?php if ( !empty(get_sub_field('subtitle')) ) : ?>
          <h3 class="section-subheading text-muted"><?php the_sub_field('subtitle'); ?></h3>
        <?php endif; ?>
        </div>
      </div>
    </div>

    <?php endif; ?>
  <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center">
          <?php
                  $address = get_sub_field ('address');
                  $name = get_sub_field ('business_name');
                  $phone = get_sub_field('phone_number');
                  $email = get_sub_field('email');
                  $map = get_sub_field('google_maps');
                   ?>
          <?php if( !empty($name) ):?>
            <h4><?php echo $name; ?></h4>
                <?php endif; ?>
          <?php if( !empty($phone) ):?>
            <p><a href="tel:1-<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                <?php endif; ?>
          <?php if( !empty($address) ): echo $address; endif; ?>

          <?php if( !empty($email) ):?>
            <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <?php endif; ?>
            <?php if( !empty($map) ):?>
              <?php echo $map; ?>
                  <?php endif; ?>

        </div>

            <div class="col-lg-6">
              <?php if ( !empty(get_sub_field('contact_form')) ) : the_sub_field('contact_form'); endif; ?>
            </div>

      </div>



  </div>
</section>
