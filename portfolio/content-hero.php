<?php 
/* ACF variables */
$hero_headline = get_field('hero_headline');
$hero_copy = get_field('hero_copy');
$hero_btn_txt = get_field('hero_btn_txt');
$background_image = get_field('background_image');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="
  background: url('<?php echo $background_image; ?>') top center; 
  background-size: cover;
">
  <div class="hero-container" data-aos="fade-in">
    <h1>Louie Camacho</h1>
    <p>I am <span class="typed"
        data-typed-items="a serious designer., a serious developer., a serious freelancer., a complex individual., serious., serious seriously."></span>
    </p>
  </div>
</section><!-- End Hero -->

<?php /*
  <!-- hero -->
  <header class="masthead" style="background: center / cover no-repeat url('<?php echo $background_image; ?>');">
    <div class="container">
      <div class="intro-text">
        <h1 class="intro-lead-in"><?php echo $hero_headline; ?></h1>
        <p class="lead"><?php echo $hero_copy; ?></p>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><?php echo $hero_btn_txt; ?></a>
      </div>
    </div>
  </header>
*/ ?>
