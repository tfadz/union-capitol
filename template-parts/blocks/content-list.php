<section class="content-list-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="content-list-main">
          <h2 class="xl headline"><?php the_field('content_list_title') ?></h2>
          <div class="content-list-text" data-aos="fade-up" data-aos-delay="200">
            <p>
              <?php the_field('content_list_text') ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row content-list" data-aos="fade-up" data-aos-delay="200">
        <?php if (have_rows('content_list')) : while (have_rows('content_list')) : the_row(); ?>
          <div class="col-md-6">
            <h3><?php the_sub_field('title') ?></h3>
            <p><?php the_sub_field('text') ?></p>
          </div>
        <?php endwhile; endif; ?>
    </div>
  </div>
</section>