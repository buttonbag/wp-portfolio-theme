<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resum&eacute;</h2>
      <a href="/pdf/louiecamacho20.pdf" Download><button class="btn btn-primary">Download Full PDF</button></a>
    </div>

    <div class="row">
      <div class="col-lg-12">

        <?php $loop = new WP_Query( array('post_type' => 'resume_entries', 'meta_key' => 'order_number', 'order' => 'DSC') );
        while ($loop -> have_posts()) : $loop->the_post(); ?>

        <div class="resume-item" data-aos="fade-up" data-aos-delay="100">
          <h4><?php echo the_title();?></h4>
          <h5><?php the_field('years_active');?></h5>
          <p><em><?php the_field('company_name');?>, <?php the_field('location');?></em></p>
          <?php the_field('overview');?>
          <!-- <h4>Lead Designer + Developer</h4>
          <h5>2010 - 2014</h5>
          <p><em>Media Made Great, Chicago, IL</em></p>
          <ul>
            <li>Lead in the design, development, and implementation of the graphic, layout, and production
              communication materials.</li>
            <li>Developed numerous marketing assets (logos, style guides, websites) as well as built and coded web
              collaterals (banner ads, promotional emails, websites, wireframes, storyboards).</li>
            <li>Managed up to 5 projects or tasks at a given time while under pressure.</li>
            <li>Consulted with clients and managers on the most appropriate technologies for each project.</li>
          </ul> -->
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->