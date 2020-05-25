<section class="products">
    <div class="padding-right-left padding-top-bottom">
      <div class="box-title">
        <h2 class="title-section">Our Products</h2>
        <img class="separator" src="<?php echo get_template_directory_uri();?>/assets/img/separator.svg" alt="">
        <div class="controls">
          <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $product_categories = get_terms($args);
      $count = count($product_categories);


      if ($count > 0):
        foreach ($product_categories as $product_category):
          ?>

            <button class="filter" data-filter=".category-1"><?php echo $product_category->name; ?></button>
          <?php  endforeach; endif;
           ?>
        </div>
      </div>

      <div class="pager-list">
        <!-- Pagination buttons will be generated here -->
      </div>

      <div id="Container" class="box-products">

      <?php $args = array( 'post_type' => 'producto');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="mix category-1" data-myorder="1">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      <?php  endwhile; ?>
        <!-- <div class="mix category-1" data-myorder="2">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-1" data-myorder="3">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-2" data-myorder="4">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-1" data-myorder="5">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-1" data-myorder="6">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-2" data-myorder="7">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="mix category-2" data-myorder="8">
          <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
          <div class="img-product" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/product-1.jpg')">
          </div>
          <div class="body-product">
            <h2 class="title-product">Lorem Ipsum</h2>
            <a class="btn-product" href="">See More
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </section>