<div class="container">
  <div class="row content-list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="-100">
      <?php if (have_rows('locations')) : while (have_rows('locations')) : the_row(); ?>
        <div class="col col-md-6">
          <div class="location">
            <div class="map">
              <?php $map = get_sub_field('google_map') ?>
              <?php echo $map; ?>
            </div>
            <h3><?php the_sub_field('title') ?></h3>
            <p><?php the_sub_field('text') ?></p>
            <div class="phone"><i class="fas fa-phone-alt"></i> <a href="tel:<?php the_sub_field('phone') ?>" target="_blank"><?php the_sub_field('phone') ?></a></div>
            <div class="email"><i class="fas fa-comments-alt"></i> <a href="mailto:<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a></div>
          </div>
        </div>
      <?php endwhile; endif; ?>
  </div>
</div>