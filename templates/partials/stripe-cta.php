<!-- Focus Call to Action -->
<section class="bg-primary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 text-center">
        <h2 class="section-heading inline-heading script-font"><?php the_sub_field('cta_text'); ?></h2>
        <?php $link = get_sub_field('cta_button');
        if( $link ): ?>
        <div class="pt-4 text-center"><a href="<?php echo $link['url']; ?>"  target="<?php echo $link['target']; ?>" class="btn btn-secondary btn-xl">
          <?php echo $link['title']; ?></a></div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>
