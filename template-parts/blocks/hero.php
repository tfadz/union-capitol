<?php $heroimg = get_field('hero') ?>


<div class="hero-row" >
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="headline headline-start xl slide-up" data-aos="fade-up">
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


<div class="hero-row hero-img" style="background-image: url(<?php echo $heroimg['url'] ?>);">
  <div class="container">
    <div class="row">
      <div class="col">

        <h1 class="headline headline-change xl">
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

