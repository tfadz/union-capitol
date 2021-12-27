<?php $fhero = get_field('hero_image') ?>

  <div class="feature-hero" style="background-image: url(<?php echo $fhero['url'] ?>);">
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

