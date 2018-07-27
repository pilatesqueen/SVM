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
            <div class="col">
              <?php the_sub_field('content'); ?>
            </div>
      </div>

      <?php // check current row layout
            if( have_rows('row_content') ): ?>


            <?php  while( have_rows('row_content') ): the_row();
                    $image = get_sub_field ('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $button = get_sub_field('button');
                    $textalign = get_sub_field('text_alignment')
                     ?>


            <div class="row align-items-center">

                  <div class="<?php if (get_sub_field('right_left') == 'left'): echo 'col-md-4  col-xl-3';
                else: echo 'col-md-8 order-md-last col-xl-9 order-xl-last'; endif;?>">
                  <?php if( !empty($image) ): ?>
                	   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                  <?php endif; ?>
                </div>
                  <div class="<?php if (get_sub_field('right_left') == 'left'): echo 'col-md-8 col-xl-9 text-' . $textalign ;
                else: echo 'col-md-4 col-xl-3  order-md-first order-md-first text-' . $textalign; endif;  ?>">
                    <?php if( !empty($title) ): ?>
                      <h3 class="text-uppercase"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if( !empty($text) ): ?>
                      <p class="text-muted"><?php echo $text; ?></p>
                    <?php endif; ?>

                    <?php if( !empty($button) ): ?>
                        <center><a href="<?php echo $button['url']; ?>"  class="btn btn-primary btn-xl"><?php echo $button['title']; ?></a></center>
                    <?php endif; ?>
                  </div>
                </div>

        <?php endwhile; endif;?>

  </div>
</section>
