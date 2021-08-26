<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
    </div>

    <!-- <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-filters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div> -->

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
      <?php $num=1; $loop = new WP_Query( array('post_type' => 'work'/* , 'orderby' => 'post_date', 'order' => 'ASC' */) ); ?>
      <?php while( $loop->have_posts()) : $loop->the_post();?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <a href="<?php echo get_permalink();?>" class="portfolio-lightbox" data-width="80vw" data-height="100vh">
            <img src="<?php the_field('work_image'); ?>" class="img-fluid" alt="">
            <div class="portfolio-links">
              <?php echo the_title();?>
            </div>
          </a>
        </div>
      </div>
      <?php endWhile; ?>
      <?php wp_reset_query(); ?>
    </div>

  </div>
</section><!-- End Portfolio Section -->

<?php /* original

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <?php $num=1; $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_date', 'order' => 'ASC') ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="col-md-4 col-sm-6 portfolio-item">
  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $num++; ?>">
    <div class="portfolio-hover">
      <div class="portfolio-hover-content">
        <i class="fas fa-plus fa-3x"></i>
      </div>
    </div>
    <img class="img-fluid" src="<?php the_field('work_image'); ?>" alt="">
  </a>
  <div class="portfolio-caption">
    <h4>
      <!-- Threads -->
      <?php the_title(); ?>
    </h4>
    <p class="text-muted">
      <?php foreach((get_the_category()) as $category){
        echo $category->name."<br>";
      } ?>
    </p>
  </div>
</div>

<?php endWhile; wp_reset_query(); ?>

</div>
</div>
</section>

<!-- edit pop up modals in footer -->
*/
?>