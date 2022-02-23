<section class="content-industry-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="content-industry-main">
          <h2 class="xl headline"><?php the_field('content_industry_title') ?></h2>
          <div class="content-list-text" data-aos="fade-up" data-aos-delay="200">
            <p>
              <?php the_field('content_industry_text') ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up" data-aos-offset="0">
      <div class="col-md-6">
        <div class="content-industry-leftcol">
          <?php the_field('content_industry_left') ?>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Industries</h3>
        <div class="content-industry-list">
          <?php if (have_rows('content_industry_right')) : while (have_rows('content_industry_right')) : the_row(); ?>
            <?php $img = get_sub_field('image') ?>
            <div class="item">
              <img src="<?php echo $img['url'] ?>" alt="">
              <p><?php the_sub_field('title') ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>