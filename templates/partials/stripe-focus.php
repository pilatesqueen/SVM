<!-- Specials -->
<section class="specials">
  <div class="container">
      <?php
      $sectiontitle = get_sub_field('section_title');
      $sectionsub = get_sub_field('section_subtitle');
      $titlefont = get_sub_field('title_font');
      if( !empty($sectiontitle) ): ?>
      <div class="row">
        <div class="col-lg-12 text-center text-large">
          <?php if ( !empty(get_sub_field('section')) ) : ?>
            <a name="<?php the_sub_field('section'); ?>"></a><?php endif; ?>
          <?php if ($titlefont == 'script-font'): ?>
          <h2 class="section-heading script-font text-uppercase">
              <?php else: ?>
            <h2 class="section-heading text-uppercase">
            <?php endif; ?>
            <?php echo $sectiontitle ?></h2>
            <?php  if( !empty($sectionsub) ):  ?>
          <h3 class="section-subheading text-muted"><?php echo $sectionsub; ?></h3>
          <?php endif;
       ?>

        </div>
      </div>

    <?php endif; ?>
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


      <div class="row align-items-center no-gutters">

            <div class="<?php if (get_sub_field('right_left') == 'left'): echo 'col-lg-6 col-xl-6 col-img';
          else: echo 'col-img col-lg-6 order-lg-last col-xl-6 offset-xl-1 order-xl-last'; endif;?>">
            <?php if( !empty($image) ): ?>
          	   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid <?php if (get_sub_field('image_crop') == 'bottom'): echo 'crop-bottom'; endif;?>"/>
            <?php endif; ?>
          </div>
            <div class="<?php if (get_sub_field('right_left') == 'left'): echo 'col-md-10 offset-md-1 col-lg-6 offset-lg-0 col-xl-4 offset-xl-1 p-5 p-xl-0 text-' . $textalign ;
          else: echo 'col-md-10 offset-md-1 col-lg-6 offset-lg-0 col-xl-4 offset-xl-1 order-lg-first p-5 p-xl-0 order-xl-first text-' . $textalign; endif;  ?>">
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
