<header id="header" class="site-header">
			<div class="d-flex flex-column">

				<div class="profile">
					<img src="<?php $about_image = get_field('about_image', 5); 
                    echo $about_image; 
                    ?>" alt="" class="img-fluid rounded-circle">
					<h1 class="text-light">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
						</div><!-- .site-branding -->
					</h1>

					<div class="social-links mt-3 text-center">

					<?php $loop = new WP_Query( array('post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

					<?php 
					while( $loop->have_posts() ) : $loop->the_post(); 
					$soc_link = get_field('soc_link');
					$soc_icon = get_field('soc_icon'); ?>
					
					<?php if( !empty($soc_link) ) : ?>
						<a href="<?php echo $soc_link; ?>">
							<i class="<?php echo $soc_icon; ?>"></i>
						</a>
					<?php endif; ?>
					<?php endwhile; ?> 
					<?php wp_reset_query(); ?>

					</div>

				</div>

			<?php /* original nav
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav> 
			*/ ?>

				<nav id="navbar" class="nav-menu navbar">
					<ul>
						<li><a href="<?php echo esc_html(home_url('/'));?>#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
								<span>Home</span></a></li>
						<li><a href="<?php echo esc_html(home_url('/'));?>#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
						</li>
						<li><a href="<?php echo esc_html(home_url('/'));?>#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
								<span>Resum&eacute;</span></a></li>
						<li><a href="<?php echo esc_html(home_url('/'));?>#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
								<span>Portfolio</span></a></li>
						<li><a href="<?php echo esc_html(home_url('/'));?>#blog" class="nav-link scrollto"><i class="bx bx-book"></i> <span>Blog</span></a>
						</li>
						<li><a href="<?php echo esc_html(home_url('/'));?>#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
								<span>Contact</span></a></li>
					</ul>
				</nav>
			</div>
		</header>