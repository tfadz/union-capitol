<?php $fhero = get_field('hero_image') ?>

  <div class="feature-hero">
    <div class="feature-hero-slider">
    <?php if (have_rows('hero_slider')) : while (have_rows('hero_slider')) : the_row(); ?>
    <?php $img = get_sub_field('image') ?>
    <div>
      <figure style="background-image: url(<?php echo $img['url'] ?>);"></figure>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="feature-hero-main">
          <h1 class="headline">
            <?php if(get_field('hero_title')) : ?>
              <?php the_field('hero_title') ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>
          </h1>
        </div>
        </div>
      </div>
    </div>
  </div>

