<section class="video-slider-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 data-aos="fade-up"><?php the_field('video_slider_title') ?></h3>
      </div>
    </div>
  </div>
  <div class="video-slider">
    <?php if (have_rows('video_slider')) : while (have_rows('video_slider')) : the_row(); ?>
      <?php 
        $img =  get_sub_field('image');
        $vid = get_sub_field('video'); 
      ?>
      <div class="item">
        <div class="card">
          <h4 class="xl"><?php if(get_sub_field('title')) : ?><?php the_sub_field('title') ?><?php endif; ?></h4>
          <button class="play-video"><i class="fal fa-play"></i></button>
        </div>
        
        <div class="featured-img-wrapper">
          <figure class="featured-img" style="background: url(<?php echo $img['url'] ?>) center/cover no-repeat;">
          <?php if($vid) : ?>

        <!-- Modal -->
        <div class="modal">
          <div class="modal-main">
            <?php

            if ( $vid ) {
              if ( preg_match('/src="(.+?)"/', $vid, $matches) ) {
                $src = $matches[1];
                $params = array(
                  'controls'    => 0,
                  'hd'        => 1,
                  'autoplay' => 0,
                  'loop' => 1
                );
                $new_src = add_query_arg($params, $src);
                $vid = str_replace($src, $new_src, $vid);
                $attributes = 'frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen';
                $vid = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $vid);
              }
              echo '<div class="video-embed video-iframe">',  $vid, '</div>';
            }
            ?>
          </div>
        </div>
      <?php endif; ?> 
      </figure>
      </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
  
</section>