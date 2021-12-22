<?php $heroimg = get_field('home_hero') ?>
<div class="hero-row hero-row-start">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="headline headline-start">
          <?php if(get_field('home_hero_title')) : ?>
            <?php the_field('home_hero_title') ?>
          <?php else : ?>
            <?php the_title(); ?>
          <?php endif; ?>
        </h1>
      </div>
    </div>
  </div>
</div>


<div class="hero-row hero-img" style="background-image: url(<?php echo $heroimg['url'] ?>);">
  <div class="container">
    <div class="row">
      <div class="col">

        <h1 class="headline headline-change">
          <?php if(get_field('home_hero_title')) : ?>
            <?php the_field('home_hero_title') ?>
          <?php else : ?>
            <?php the_title(); ?>
          <?php endif; ?>
        </h1>
      </div>
    </div>
  </div>
</div>

