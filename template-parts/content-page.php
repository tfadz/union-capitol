<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pensacola
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php if (!has_block('acf/hero')) : ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header>
        </div>
      </div>
    </div>
  <?php endif; ?>


	<?php Pensacola_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pensacola' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
