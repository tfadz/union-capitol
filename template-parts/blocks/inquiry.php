<section class="inquiry">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php $iemail = get_field('inquiry_email') ?>
        <h3><?php the_field('inquiry_title') ?></h3>
        <p><?php the_field('inquiry_text') ?></p>
        <p><a class="email" href="mailto:<?php echo $iemail ?>"><i class="fas fa-comments-alt"></i>  <?php echo $iemail ?></a></p>
      </div>
    </div>
  </div>
</section>