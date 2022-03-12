<section class="content-business-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="xl headline"><?php the_field('cbb_title') ?></h2>
        <div class="content-business-text">
          <?php the_field('cbb_text') ?>
        </div>
        <ul class="content-business-list">
          <?php if (have_rows('cbb_list')) : while (have_rows('cbb_list')) : the_row(); ?>
            <li><?php the_sub_field('text') ?></li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>