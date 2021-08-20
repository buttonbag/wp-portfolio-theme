<?php 
$contact_title = get_field('contact_title');
$contact_subhead = get_field('contact_subhead');
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact"
      style="background: url('<?php bloginfo("template_directory")?>/assets/img/webb.png') fixed repeat;">
  <div class="container">

    <div class="section-title">
      <h2>
        <?php echo $contact_title; ?>
      </h2>
      <p>
        <?php echo $contact_subhead; ?>
      </p>
    </div>

    <div class="row justify-content-center" data-aos="fade-in">

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <?php echo do_shortcode('[contact-form-7 id="181" title="contact 2021"]'); ?>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->