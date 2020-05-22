<section class="services" id="service">
    <img class="particle-3" src="<?php echo get_template_directory_uri();?>/assets/img/particle.svg" alt="" id="parallax-bg-3">
    <img class="particle-4" src="<?php echo get_template_directory_uri();?>/assets/img/particle.svg" alt="" id="parallax-bg-4">
    <div class="padding-right-left padding-top-bottom">
      <div class="row">
        <div class="col-lg-7">
          <div class="box-services">
                
                <?php $args = array( 'post_type' => 'servicio');?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                <div class="item-service animated wow bounceInRight" data-wow-duration="1s">
                  <div class="icon-service">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <h2 class="title-service"><?php the_title(); ?></h2>
                  <div class="description-service">
                   <p> <?php the_excerpt(); ?></p>
                  </div>
                  
                </div>
                <?php  endwhile; ?>
                <!-- <div class="item-service service-last animated wow bounceInRight" data-wow-duration="1s">
                  <div class="icon-service">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/balloon.svg" alt="">
                  </div>
                  <h2 class="title-service">Service 2</h2>
                  <p class="description-service">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptates provident.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="item-service animated wow bounceInRight" data-wow-duration="2s">
                  <div class="icon-service">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/diary.svg" alt="">
                  </div>
                  <h2 class="title-service">Service 3</h2>
                  <p class="description-service">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptates provident.
                  </p>
                </div>
                <div class="item-service animated wow bounceInRight" data-wow-duration="2s">
                  <div class="icon-service">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/gift.svg" alt="">
                  </div>
                  <h2 class="title-service">Service 4</h2>
                  <p class="description-service">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptates provident.
                  </p>
                </div>
              </div> -->
        </div>
      </div>
      <div class="col-lg-5 col-2-services">
          <div class="box-about">
            <div class="box-title">
              <h2 class="title-section">Awesome custome Services</h2>
              <img class="separator" src="<?php echo get_template_directory_uri();?>/assets/img/separator.svg" alt="">
            </div>
            <p class="description-service">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit hic fuga aliquid quasi architecto
              accusantium! Officia laboriosam maxime fuga, distinctio incidunt atque ipsam nesciunt dolorem nihil
              repudiandae provident sapiente sed Lorem.
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
          </div>
        </div>
    </div>
  </section>