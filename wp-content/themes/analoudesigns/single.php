<?php get_header(); ?>
 <?php if ( have_posts() ) : the_post();?>
<section class="banner-single">
	<div class="banner-single__content">
    <p><?php the_title(); ?></p>
    <img src="<?php echo get_template_directory_uri();?>/assets/img/separator-white.svg">
	</div> 
 </section>
<section>
	<div class="producto-single pt-5 pb-5">
		<div class="producto-single__content container">
			<div class="content-single__slider">
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
				<div class="single-slider__img"><img src="<?php echo get_template_directory_uri();?>/assets/img/entrega.jpg"></div>
			</div>
		</div>
		<div class="producto-single__content container">
			<div class="content-single__text">
				<div class="single-text__title">
					<p>¿Que Ofrecemos?</p>
					<img class="separator" src="<?php echo get_template_directory_uri();?>/assets/img/separator.svg" alt="">
				</div>
				<div class="single-text__texto">
					<?php the_content(); ?>
				</div>
				<div class="single-text__categoria">
					<p>Categonría: <?php the_category(); ?></p> 
				</div>
			</div>
		</div>
	</div>
</section>
<?php  endif; ?>
<?php get_footer(); ?>