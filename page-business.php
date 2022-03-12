<?php
/**

* Template Name: Business Owners

 */

get_header(); 
?>

  <main id="primary" class="site-main">
    <?php get_template_part('template-parts/blocks/hero') ?>
    <?php get_template_part('template-parts/blocks/content-block') ?>
    <?php get_template_part('template-parts/blocks/hero-secondary') ?>
    <?php get_template_part('template-parts/blocks/content-business') ?>
    <?php get_template_part('template-parts/blocks/text-block') ?>
  </main>

<?php
get_footer();
