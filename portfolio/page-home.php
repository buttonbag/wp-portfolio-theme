<?php
/**
	Template Name: Home Page
 */

// $twitter_url = get_field('twitter_url');
// $codepen_url = get_field('codepen_url');
// $linkedin_url = get_field('linkedin_url');


get_header();
?>
  <?php get_template_part('content', 'hero'); ?>


  <main id="main">

    
    
    <!-- About -->
    <?php get_template_part('content', 'about'); ?>
    
    <!-- Skills -->
    <?php get_template_part('content', 'skills'); ?>
    
    <!-- resume -->
    <?php get_template_part('content', 'resume'); ?>  

    
    <?php get_template_part('content', 'portfolio'); ?>  
    
    <!-- blog -->
    <?php get_template_part('content', 'blog'); ?>  
    
    <!-- Contact -->
    <?php get_template_part('content', 'contact'); ?>
    
  </main>

<?php
get_footer(); ?>
