<?php
/**
	Template Name: Home Page
 */

// $twitter_url = get_field('twitter_url');
// $codepen_url = get_field('codepen_url');
// $linkedin_url = get_field('linkedin_url');


get_header();
?>
  <?php get_template_part('section', 'hero'); ?>


  <main id="main">

    
    
    <!-- About -->
    <?php get_template_part('section', 'about'); ?>
    
    <!-- Skills -->
    <?php get_template_part('section', 'skills'); ?>
    
    <!-- resume -->
    <?php get_template_part('section', 'resume'); ?>  

    
    <?php get_template_part('section', 'portfolio'); ?>  
    
    <!-- blog -->
    <?php get_template_part('section', 'blog'); ?>  
    
    <!-- Contact -->
    <?php get_template_part('section', 'contact'); ?>
    
  </main>

<?php
get_footer(); ?>
