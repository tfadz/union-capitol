<section>
  <div class="container">
    <div class="row">
      <div class="col">

          <div class="tabbed-block">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home"><?php the_field('tab1_title') ?></a></li>
              <li><a data-toggle="tab" href="#menu1"><?php the_field('tab2_title') ?></a></li>
            </ul>
            
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <p><?php the_field('tab_1_text') ?></p>
              </div>
              <div id="menu1" class="tab-pane">
                <p><?php the_field('tab_2_text') ?></p>
              </div>
              
            </div>
          </div>
        </div>
    </div>
    
  </div>
</section>

<section class="timeline">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php echo do_shortcode("[et id='209']"); ?>

      </div>
    </div>
  </div>
</section>