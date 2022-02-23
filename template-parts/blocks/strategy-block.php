<section class="strategy-graphic">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div data-aos="fade-up" data-aos-delay="150">
            <?php the_field('sgb_block') ?>
        </div>
      
      </div>
      <div class="col-sm-12">
        <div class="strategy-graphic-img" data-aos="fade-up" data-aos-delay="200">
          <?php $sgb = get_field('sgb_graphic') ?>
          <img src="<?php echo $sgb['url'] ?>" alt="<?php echo $sgb['alt'] ?>">
        </div>
      </div>
    </div>
  </div>
</section>