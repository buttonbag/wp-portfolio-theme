<!-- blog -->
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2>Blog</h2>
        </div>

        <div class="row">

            <!-- main content -->
            <?php $num=1; $loop = new WP_Query( array('post_type' => 'post'/* , 'orderby' => 'post_date', 'order' => 'ASC' */) ); ?>
            <?php while( $loop->have_posts()) : $loop->the_post();?>
            
            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="0">
                <h4><?php echo the_title();?></h4>
                <?php echo the_excerpt(); ?>
                <a href="<?php echo get_permalink();?>" class="btn btn-outline-secondary btn-sm">
                Continue...</a>
            </div>
                    
            <?php endWhile; ?>
            <?php wp_reset_query(); ?>
            <!-- end main content -->

            <!-- <div class="col-lg-4 col-md-6 ">
                <ul>
                    <?php $num=1; $loop = new WP_Query( array('post_type' => 'post'/* , 'orderby' => 'post_date', 'order' => 'ASC' */) ); ?>
                    <?php while( $loop->have_posts()) : $loop->the_post();?>
                    <li data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="0"
                        class="aos-init aos-animate"><i class="bi bi-chevron-right"></i>
                        <a href="<?php echo get_permalink();?>" class="">
                            <?php echo the_title();?>
                        </a>
                    </li>
                    <?php endWhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div> -->
            <!-- end main content -->

        </div> <!-- end row -->

    </div>

</section>
<!-- end blog -->