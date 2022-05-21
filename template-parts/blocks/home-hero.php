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


<div class="hero-row hero-img">
  <div class="home-hero-slider">
    <?php if (have_rows('home_carousel')) : while (have_rows('home_carousel')) : the_row(); ?>
    <?php $img = get_sub_field('image') ?>
    <div>
      <img src="<?php echo $img['url'] ?>" alt="" />
    </div>
    <?php endwhile; endif; ?>
  </div>
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

