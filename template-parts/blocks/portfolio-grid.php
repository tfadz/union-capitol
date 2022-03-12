<?php global $post; ?>


<section class="portfolio-section">
  <div class="container portfolio">
    <?php global $post; ?>
    <section class="portfolio-section">
      <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <div class="portfolio-filter">
            <?php echo do_shortcode('[facetwp facet="status"]'); ?>
            <?php echo do_shortcode('[facetwp facet="industry"]'); ?>
          </div>
        </div>
        </div>
        <div class="portfolio-row">
          <?php echo do_shortcode('[facetwp template="portfolio"]'); ?>
        </div>
      </div>
      </div>
    </section>
  </div>
  </div>
</section>