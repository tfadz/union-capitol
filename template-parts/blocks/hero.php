<?php $heroimg = get_field('hero') ?>


<div class="hero-row">
  <h1 class="headline headline-start xl">
    <?php if(get_field('hero_title')) : ?>
      <?php the_field('hero_title') ?>
    <?php else : ?>
      <?php the_title(); ?>
    <?php endif; ?>
  </h1>
</div>


<div class="hero-row hero-img" style="background-image: url(<?php echo $heroimg['url'] ?>);">
  <h1 class="headline headline-change xl">
    <?php if(get_field('hero_title')) : ?>
      <?php the_field('hero_title') ?>
    <?php else : ?>
      <?php the_title(); ?>
    <?php endif; ?>
  </h1>
</div>

