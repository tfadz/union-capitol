

<section class="portfolio-section">
    <div class="container portfolio">
        <div class="row">
            <?php //global $post; ?>
            <section class="portfolio-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="portfolio-filter">
                                <?php echo do_shortcode('[facetwp facet="funds"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-row">
                        <?php echo do_shortcode('[facetwp template="portfolio"]'); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>