<?php while (have_posts()) { the_post(); ?>
  <a class="post" href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
  <div class="post-main">
    <h3><?php
	    $terms = get_the_terms( $post->ID , 'portfolio_funds' );
        if ($terms) :
	    foreach ( $terms as $term ) {
	    echo $term->name ;
	    }
    endif;
	    ?></h3>
    <h4><?php echo get_the_title(); ?></h4>
    <p><strong>Status</strong>: Active</p>
  </div>
</a>
<?php } ?>