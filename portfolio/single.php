<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

// get_header();
?>

<?php $is_post = 'post' === get_post_type();?>
<style>
	.site-header, nav, .mobile-nav-toggle, #wpadminbar, .site-footer {display: none; visibility: hidden;}
</style>

	<div id="main" class="
	my-5 m-3
		">		
		<div class="container">
			<div class="row">	
				<div class="col-lg-12">	

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
		
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
				if ( $is_post ) : 
					get_sidebar();
				endif; 


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		
				</div>
			</div>
		<?php
		?>
		</div>
		
	</div>

<?php
if ( $is_post ) : 
get_footer();
endif;