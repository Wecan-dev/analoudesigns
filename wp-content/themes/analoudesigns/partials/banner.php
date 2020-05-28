
<section class="banner-home">
  <img id="parallax-bg-1" class="particle-1" src="<?php echo get_template_directory_uri();?>/assets/img/particle.svg" alt="">
  <img id="parallax-bg-2" class="particle-2" src="<?php echo get_template_directory_uri();?>/assets/img/particle.svg" alt="">
  <?php $args = array( 'post_type' => 'banner');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="img-banner" src="<?php echo get_template_directory_uri();?>/assets/img/analodesign.jpg" alt="" style ="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
      <div class="mask-banner">

      </div>
    </div>
    <div class="bg-banner">
      <h1 class="padding-right-left title-banner"><?php the_title(); ?></h1>
    </div>
  <?php  endwhile; ?>
</section>



