<section class="content-block" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-sm-11">
        <?php $headingSize = get_field('content_block_heading'); ?>
        <?php if($headingSize == 'h2') : ?>
          <h2><?php the_field('content_block_title'); ?></h2>
        <?php elseif($headingSize == 'h3') : ?>
          <h3><?php the_field('content_block_title');  ?></h3>
        <?php elseif($headingSize == 'h4') : ?>
          <h4><?php the_field('content_block_title');  ?></h4>
        <?php endif; ?>
        
        <?php $columnLayout = get_field('content_block_columns'); ?>
        <?php if($columnLayout == 'onecol') : ?>
          <?php the_field('content_block_text') ?>
        <?php elseif($columnLayout == 'twocol') : ?>
          <div class="row">
            <div class="col-sm-6">
              <?php the_field('content_block_col1') ?>
            </div>
            <div class="col-sm-6">
              <?php the_field('content_block_col2') ?>
            </div>
          </div>
        <?php endif; ?>
        <?php $cta_link = get_field('content_block_ctalink') ?>
        <a class="button button-secondary" href="<?php echo $cta_link['url'] ?>"><?php the_field('content_block_cta') ?> <i class="fal fa-long-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>