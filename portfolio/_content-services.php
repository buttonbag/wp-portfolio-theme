<?php 
$services_section_image = get_field('services_section_image');
$services_section_title = get_field('services_section_title');
$services_section_body = get_field('services_section_body');
?>

<!-- Services -->
<section class="page-section" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase"><?php echo $services_section_title; ?></h2>
				<!-- if there is text entered in services section body -->
				<?php if ( !empty($services_section_body)) : ?>
					<h3 class="section-subheading text-muted"><?php echo $services_section_body; ?></h3>
				<?php endif; ?>
				<!-- end if -->
			</div>
		</div>
		<div class="row text-center">

			<?php $loop = new WP_Query( array('post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="<?php the_field('services_icon'); ?>"></i>
					</span>
					<h4 class="service-heading"><?php the_title(); ?></h4>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
				</div>

				<?php endWhile; ?>

			</div>
		</div>
</section>