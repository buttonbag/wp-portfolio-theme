<!-- Team -->
<section class="bg-light page-section" id="team">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 text-center">
    <h2 class="section-heading text-uppercase">Meet the Team</h2>
    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet.</h3>
  </div>
</div>
<div class="row">

  <?php $loop = new WP_Query( array('post_type' => 'team_members', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

   <div class="col-sm-4">
    <div class="team-member">
     <div class="mx-auto">
      <img class="rounded-circle" src="<?php the_field('team_member_image'); ?>">
    </div>
    <h4><?php the_title(); ?></h4>
    <p class="text-muted"><?php the_field('team_position'); ?></p>
    <ul class="list-inline social-buttons">

      <?php if( get_field('social_link') ) : ?>
       <li class="list-inline-item">
         <a href="<?php the_field('social_link'); ?>">
          <i class="<?php the_field('social_icon'); ?>"></i>
        </a>
      </li>
    <?php endif; ?>
    <?php if( get_field('social_link_2') ) : ?>
      <li class="list-inline-item">
       <a href="<?php the_field('social_link_2'); ?>">
        <i class="<?php the_field('social_icon_2'); ?>"></i>
      </a>
    </li>
  <?php endif; ?>
  <?php if( get_field('social_link_3') ) : ?>
    <li class="list-inline-item">
      <a href="<?php the_field('social_link_3'); ?>">
        <i class="<?php the_field('social_icon_3'); ?>"></i>
      </a>
    </li>
  <?php endif; ?>

</ul>
</div>
</div>

<?php endWhile; ?>

</div>
</div>
</section>