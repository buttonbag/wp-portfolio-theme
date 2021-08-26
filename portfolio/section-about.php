<?php  
$about_title = get_field('about_title');
// $about_subhead = get_field('about_subhead');
// $about_image = get_field('about_image');
// $about_name = get_field('about_name');
// $about_position = get_field('about_position');
// $about_copy = get_field('about_copy');
?>
    
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2><?php echo $about_title;?></h2>
      <p>Louie Camacho works at Ogilvy Chicago (advertising, not the train station) as a designer and developer.
        Having designed (and illustrated) many logos, posters, advertisments, and web sites (including this one),
        Louie has developed a keen eye for design. Also, earning a bachelor's of arts/science didn't hurt. When he
        isn't melting faces with beautifully designed pieces, Louie uses his free time to learn new skills, practice
        his new wood working hobby, lose himself in video games, ponder about the world and think of clever ways to
        write in the third person.</p>
    </div>

    <div class="row">
      <div class="col-lg-8 pt-4 pt-lg-0 content">
        <h3>My Previous Roles:</h3>
        <p class="fst-italic">
          These are the jobs that I've had in the past that helped shape the person that I am today.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="0"><i
                  class="bi bi-chevron-right"></i><strong>Front End Web Developer</strong></li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100"><i
                  class="bi bi-chevron-right"></i><strong>Lead Design and Developer</strong></li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200"><i
                  class="bi bi-chevron-right"></i>Waiter / Server</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="300"><i
                  class="bi bi-chevron-right"></i>Customer Service Representative</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400"><i
                  class="bi bi-chevron-right"></i>Door to door office painting salesman</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="500"><i
                  class="bi bi-chevron-right"></i>Grocery Store Cashier</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="600"><i
                  class="bi bi-chevron-right"></i>Truck Driver</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="700"><i
                  class="bi bi-chevron-right"></i>Warehouse Order Picker</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="800"><i
                  class="bi bi-chevron-right"></i>Mail Sorter</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="900"><i
                  class="bi bi-chevron-right"></i><strong>Freelance Wordpress Developer</strong></li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="1000"><i
                  class="bi bi-chevron-right"></i><strong>Freelance Graphic Designer</strong></li>
              <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="1100"><i
                  class="bi bi-chevron-right"></i>Dishwasher</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->


<?php /* original
<!-- About -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"><?php echo $about_title; ?></h2>
        <!-- if there is text entered in services section body -->
        <?php if ( !empty($about_subhead)) : ?>
          <h3 class="section-subheading text-muted"><?php echo $about_subhead; ?></h3>
        <?php endif; ?>
        <!-- end if -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="<?php echo $about_image; ?>" alt="">
          <h4><?php echo $about_name; ?></h4>
          <p class="text-muted"><?php echo $about_position; ?></p>
          <ul class="list-inline social-buttons">

            <?php $loop = new WP_Query( array('post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

            <?php 
            while( $loop->have_posts() ) : $loop->the_post(); 
              $soc_link = get_field('soc_link');
              $soc_icon = get_field('soc_icon'); ?>

              <li class="list-inline-item">
                <?php if( !empty($soc_link) ) : ?>
                  <a href="<?php echo $soc_link; ?>">
                    <i class="<?php echo $soc_icon; ?>"></i>
                  </a>
                <?php endif; ?>
              </li>

              <?php endWhile; wp_reset_query(); ?>

            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted"><?php echo $about_copy; ?></p>
        </div>
      </div>
    </div>
</section>

*/ ?>