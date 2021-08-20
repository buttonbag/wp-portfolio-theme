<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<!-- ======= Footer ======= -->
<footer id="footer" class="site-footer">
  <div class="container site-info">
    <div class="copyright">
    &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
    </div>
  </div>
</footer><!-- End  Footer -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>




</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
