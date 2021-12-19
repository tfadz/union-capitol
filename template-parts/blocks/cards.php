<section class="cards-block-section">
  <div class="container">
    <div class="row">
      <div class="col">
        
        <div class="cards-block">
          <?php if (have_rows('cards')) : while (have_rows('cards')) : the_row(); ?>
          <?php $cardslink = get_sub_field('link') ?>
          <a href="<?php echo $cardslink['url'] ?>" class="cards-block-item">
          <h5><?php the_sub_field('title') ?></h5>
          <div class="content"><?php the_sub_field('text') ?></div>
          <div class="cards-block-item-cta"><img src="<?php bloginfo('template_directory'); ?>/images/right-arrow.svg" alt="" /></div>
          </a>
          <?php endwhile; endif; ?>
        </div>
        
      </div>
      
    </div>
    
  </div>
</section>