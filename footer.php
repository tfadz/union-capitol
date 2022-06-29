<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

<footer id="colophon" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
      <div class="footer-primary">
        <div class="footer-primary-content"><?php the_field('footer_content', 'options') ?></div>
        <a href="/contact" class="button">LET'S TALK</a>
      </div>
      </div>
      <div class="col-md-3">
        <a target="_blank" class="linkedin" href="https://www.linkedin.com/company/unioncapitalassociatesllc/about/"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" alt="" /></a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="footer-legal">
          &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?>  | <a href="/privacy-policy">Privacy Policy</a>
        </div>
      </div>
    </div>
  </div>
  
</footer>

<div class="modal-wrapper">
	<div class="close-modal">X</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
