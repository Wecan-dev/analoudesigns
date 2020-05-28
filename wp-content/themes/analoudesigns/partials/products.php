<section class="products" id="products">
  <div class="padding-right-left padding-top-bottom">
    <div class="box-title">
      <h2 class="title-section">Nuestros Productos</h2>
      <img class="separator" src="<?php echo get_template_directory_uri();?>/assets/img/separator.svg" alt="">
      <div class="controls">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
           <?php $args = array(

            'orderby' => 'slug',
            'order' => 'ASC'
          );
           $content_product1 = 1;
           $product_categories = get_terms($args);?>
           <?php foreach ($product_categories as $product_category):?>
            <a class="nav-item nav-link <?php if($content_product1 == 1){echo ' active';} ?>" id="nav-home-tab" data-toggle="tab" href="#nav-<?php echo $content_product1; ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $product_category->name; ?></a>
            <?php $content_product1++; endforeach; ?>
          </div>
        </nav>      
      </div>
    </div>

    <div class="pager-list">
      <!-- Pagination buttons will be generated here -->
    </div>

    
    <div class="tab-content" id="nav-tabContent">
      <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $content_product1 = 1;
      $product_categories = get_terms($args);?>
      <?php foreach ($product_categories as $product_category):?>
        <div class="tab-pane fade <?php if($content_product1 == 1){echo 'show active';} ?>" id="nav-<?php echo $content_product1; ?>" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="content-producto"> 
            <?php $args = array ('post_type' => 'producto' , 'category__in' =>  $product_category->term_id) ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
              <a href="<?php the_permalink(); ?>" >
                <div class="mix category" data-myorder="">
                  <img class="particle-5" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
                  <img class="particle-6" src="<?php echo get_template_directory_uri();?>/assets/img/particle-2.svg" alt="">
                  <div class="img-product" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                  </div>
                  <div class="body-product">
                    <h2 class="title-product"><?php the_title(); ?></h2>
                    <a class="btn-product" href="<?php the_permalink(); ?>">Ver más
                      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </a>
            <?php endwhile; ?>
          </div>
        </div>

        <?php $content_product1++; endforeach; ?>

      </div>
    </div>
  </section>

