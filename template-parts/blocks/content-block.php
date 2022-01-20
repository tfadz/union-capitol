  <section class="content-block marvin">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <div class="content-block-wrapper">
            <?php $headingSize = get_field('content_block_heading'); ?>
            <?php if($headingSize == 'h2') : ?>
              <h2 class="headline"><?php the_field('content_block_title'); ?></h2>
            <?php elseif($headingSize == 'h3') : ?>
              <h3 class="headline"><?php the_field('content_block_title');  ?></h3>
            <?php elseif($headingSize == 'h4') : ?>
              <h4 class="headline"><?php the_field('content_block_title');  ?></h4>
            <?php endif; ?>
            
            <?php $columnLayout = get_field('content_block_columns'); ?>
            <?php if($columnLayout == 'onecol') : ?>
              <div class="content-block-main">
                <?php the_field('content_block_text') ?>
              </div>
            <?php elseif($columnLayout == 'twocol') : ?>
              <div class="content-block-main">
              <div class="row">
                <div class="col-sm-6">
                  <?php the_field('content_block_col1') ?>
                </div>
                <div class="col-sm-6">
                  <?php the_field('content_block_col2') ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php $cta_link = get_field('content_block_ctalink') ?>
            <?php if($cta_link) :  ?>
            <a class="button button-secondary" href="<?php echo $cta_link['url'] ?>"><?php the_field('content_block_cta') ?> <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow--gray.svg" alt="">
  </a>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>