<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<?php  
// $about_title = get_field('about_title');
// $about_subhead = get_field('about_subhead');
// $about_name = get_field('about_name');
// $about_position = get_field('about_position');
// $about_copy = get_field('about_copy');
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Favicons -->
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/img/favicon.png" rel="icon">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/glightbox/css/glightbox.min.css"
		rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php bloginfo('stylesheet_directory')?>/assets/css/style.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e( 'Skip to content', 'portfolio' ); ?>
		</a>

		<!-- ======= Mobile nav toggle button ======= -->
		<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

		<!-- nav -->
		<?php get_template_part('content', 'nav'); ?>



		<?php 
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* 
<!-- original -->

<header id="masthead" class="site-header">
	<div class="site-branding">
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a></h1>
		<?php
			else :
				?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a></p>
		<?php
			endif;
			$portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $portfolio_description || is_customize_preview() ) :
				?>
		<p class="site-description">
			<?php echo $portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php esc_html_e( 'Primary Menu', 'portfolio' ); ?>
		</button>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					)
					);
					?>
	</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
	?>