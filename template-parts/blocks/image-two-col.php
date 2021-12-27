<section class="image-two-col">
  <?php $imagetwoMedia = get_field('image_two_col_media') ?>
  <figure class="image-two-col__media image-two-col-row" style="background: url(<?php echo $imagetwoMedia['url'] ?>) center/cover no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2><?php the_field('image_two_col_title') ?></h2>
        </div>
      </div>
    </div>
  </figure>
  <div class="image-two-col__content image-two-col-row">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2><?php the_field('image_two_col_title') ?></h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-6">
        <article class="primary">
            <?php the_field('image_two_col_primary') ?>
        </article>
        </div>
        <div class="col-sm-6">
        <article class="secondary" data-aos="fade-up" data-aos-delay="200">
          <ul class="secondary-facts">
          <?php if (have_rows('image_two_col_facts')) : while (have_rows('image_two_col_facts')) : the_row(); ?>
          <li>
            <h3><?php the_sub_field('headline') ?></h3>
            <span><?php the_sub_field('text') ?></span>
          </li>
          <?php endwhile; endif; ?>
          </ul>
        </article>
        </div>
      </div>
      
    </div>
  </div>
</section>