<?php $fhero2 = get_field('hero_sec_image') ?>

<div class="feature-hero secondary" style="background-image: url(<?php echo $fhero2['url'] ?>);">
  <div class="container">
    <div class="row">
      <div class="col">
      <div class="feature-hero-main">
        <h1>
          <?php if(get_field('hero_sec_title')) : ?>
            <?php the_field('hero_sec_title') ?>
          <?php else : ?>
            <?php the_title(); ?>
          <?php endif; ?>
        </h1>
      </div>
      </div>
    </div>
  </div>
</div>

