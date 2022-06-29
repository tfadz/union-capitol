<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pensacola
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" data-aos="fade-up">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title alt">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		
		<?php endif; ?>
    <h3><?php the_field('team_title') ?></h3>
	</header><!-- .entry-header -->


<div class="entry-content">
  <div class="bio-main">
    <figure data-aos="fade-up" data-aos-delay="100"><?php Pensacola_post_thumbnail(); ?></figure>
    <article class="bio-primary">
      <div class="bio-content" data-aos="fade-up" data-aos-delay="300">
        <?php
        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pensacola' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
            )
          );
          ?>
          <h5>CONTACT</h5>
          <ul class="bio-contact">
            <li class="phone"><i class="fas fa-phone-alt"></i><a href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a></li>
            <li class="email"><i class="fas fa-comments-alt"></i><a class="" href="mailto:<?php the_field('email') ?>">Email me</a></li>
          </ul>
          <div class="bio-contact-footer">
            <a class="linkedin" target="_blank" href="<?php the_field('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div><a href="/team" class="button">BACK TO TEAM</a></div>
    </article>
  
  </div>


	</div>

	<footer class="entry-footer">
		<?php Pensacola_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
