<?php while (have_posts()) { the_post(); ?>
  <div class="col-lg-3 col-md-6">
  <a class="post" href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
  <div class="featured-img">
    <?php $featured_img_url = get_the_post_thumbnail_url($p->ID,'medium'); ?>
    <?php if($featured_img_url) : ?>
    <img src="<?php echo $featured_img_url ?>" alt="">
    <?php endif; ?>
  </div>
  <div class="post-main">
    <h4><?php echo get_the_title(); ?></h4>
    <p><?php the_field('location_portfolio') ?></p>
    <p><?php the_content(); ?></p>
    <p>Status: <?php
    $terms = get_the_terms( $post->ID , 'status_type' );
    foreach ( $terms as $term ) {
    echo $term->name ;
    }
    ?></p>
  </div>
</a>
</div>

<?php } ?>