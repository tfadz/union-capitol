<?php global $post; ?>


<section class="team-section">
  <div class="container">
      <?php 
      $args = array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'order' => 'DSC'
      );

      $query = new WP_Query( $args ); ?>
      
      <?php if ( $query->have_posts() ) : ?>
        
        <div class="row">   
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-sm-3">
              <a class="post" href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
                <div class="featured-img"  style="<?php $featured_img_url = get_the_post_thumbnail_url($p->ID,'large'); ?>
                <?php if($featured_img_url) : ?>
                background: url(<?php echo $featured_img_url ?>) top/cover no-repeat;
                <?php else : ?>
                background: url(<?php bloginfo('template_directory'); ?>/assets/build/images/placeholder.jpg) top/cover no-repeat;<?php endif; ?>"></div>
                <div class="post-main">
                  <h3><?php echo get_the_title(); ?></h3>
                  <p><?php the_field('team_title', $post->ID) ?></p>
                </div>
              </a>
            </div>
            
          <?php endwhile; ?>
        <?php endif; ?>
        
        <?php wp_reset_postdata(); ?>
      </div>
  </div>
</section>