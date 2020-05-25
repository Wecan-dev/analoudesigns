<footer class="footer-landing " id="contact">


<?php $args = array( 'post_type' => 'footer');?>   
<?php $loop = new WP_Query( $args ); ?>
<?php if ( $loop->have_posts() ) : $loop->the_post();?>


    <div class="container-footer padding-right-left padding-top-bottom">
      <div class="row">
        <div class="col-lg-6 feed-instagram col-md-6">
          <div class="elfsight-app-5361803e-f3d5-47a3-86a3-79e957c6294a"></div>
        </div>
        <div class="col-lg-6 col-contact col-md-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="contact-us">
                <h2 class="title-section">Contact Us</h2>
                <ul>
                  <li>
                    <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                    <a href="<?php the_field('correo'); ?>">info@analodesigns.com</a>
                  </li>
                  <li>
                    <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                    <a href="<?php the_field('telefono_1'); ?>">+584266606379</a>
                  </li>
                  <li>
                    <i class="fa fa-whatsapp mr-2" aria-hidden="true"></i>
                    <a href="<?php the_field('whataspp'); ?>">+584121601282</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 ">
              <div class="follow-us">
                <h2 class="title-section">Follow Us</h2>
                <ul>
                  <li>
                    <a href="<?php the_field('facebook'); ?>" target="_blank">
                      <i class="fa fa-facebook icon-contact" aria-hidden="true"></i>
                    </a>
                    <a href="<?php the_field('instagram'); ?>" target="_blank">
                      <i class="fa fa-instagram icon-contact" aria-hidden="true"></i>
                    </a>
                    <a href="<?php the_field('pinterest'); ?>" target="_blank">
                      <i class="fa fa-pinterest-p icon-contact" aria-hidden="true"></i>
                    </a>
                    <a href="<?php the_field('tw'); ?>" target="_blank">
                      <i class="fa fa-twitter icon-contact" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<?php  endif; ?>

 </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
</body>

</html>

