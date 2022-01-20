<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pensacola
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@500;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pensacola' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">
		<div class="row site-header-row">
			<div class="col-6 col-sm-4">
				<div class="site-branding">
				
          <?php if(has_custom_logo()) : ?>
    				<?php the_custom_logo(); ?>
    			<?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-logo"><?php echo get_bloginfo(); ?></a>
    			<?php endif; ?>					
				</div>
      </div>
      <div class="col-6 col-sm-8">
      
      <nav id="site-navigation" class="main-navigation">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
        ?>
        <?php get_template_part('template-parts/nav/hamburger') ?>

        </nav>

    	</div>
		</div>

	</div>
	</header>
  <?php get_template_part('template-parts/nav/mobile-menu') ?>

