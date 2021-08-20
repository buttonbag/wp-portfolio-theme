  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <?php $num=1; $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $num++; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php the_title(); ?></h2>
                <p class="item-intro text-muted"><!-- Lorem ipsum dolor sit amet consectetur. --></p>

                <?php the_content(); ?>

                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endWhile; ?>

