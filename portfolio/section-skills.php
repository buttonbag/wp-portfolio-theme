<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Skills</h2>
        <p>I'm constantly learning, improving, and growing as a developer, designer, and as a person in general. It's impossible to know everything in tech because the industry, like the universe, is constantly expanding but here is my best guess of where I'm at.</p>
    </div>

    <div class="row skills-content">

        <?php 
            $loop   =   new WP_Query(array('post_type'=>'skills', 'orderby' => 'post_date', 'order' => 'asc')); 
            while ( $loop->have_posts() ) : $loop->the_post();
            $name   =   get_field('skill');
            $level  =   get_field('level'); 
            ?>
            
            <div class="col-lg-6" data-aos="fade-up">
            <div class="progress">
                <span class="skill"><?php echo $name; ?> <i class="val"><?php echo $level; ?></i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="<?php echo $level; ?>">
                </div>
                </div>
            </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>

    </div>
    </div>
</section><!-- End Skills Section -->