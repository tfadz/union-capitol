<?php
/**

* Template Name: Strategy Page

 */

get_header(); 
?>

  <main id="primary" class="site-main">
    <?php get_template_part('template-parts/blocks/hero') ?>
    <?php get_template_part('template-parts/blocks/content-block') ?>
    <?php get_template_part('template-parts/blocks/hero-secondary') ?>
    <?php get_template_part('template-parts/blocks/content-industries') ?>
    <?php get_template_part('template-parts/blocks/strategy-block') ?>
    <?php get_template_part('template-parts/blocks/cards') ?>
  </main>

<?php
get_footer();
