<?php get_header(); ?>
<?php $args = array( 'post_type' => 'producto');?> 
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
					<?php if(get_field('imagen_1')): ?>
						<a onclick="openModal();currentSlide(1)" class="single-slider__img"><img src="<?php the_field('imagen_1'); ?>"></a>
						<?php else: ?>
						<?php endif ?>
						<?php if(get_field('imagen_2')): ?>
							<a onclick="openModal();currentSlide(2)" class="single-slider__img"><img src="<?php the_field('imagen_2'); ?>"></a>
							<?php else: ?>
							<?php endif ?>
							<?php if(get_field('imagen_3')): ?>
								<a onclick="openModal();currentSlide(3)" class="single-slider__img"><img src="<?php the_field('imagen_3'); ?>"></a>
								<?php else: ?>
								<?php endif ?>
								<?php if(get_field('imagen_4')): ?>
									<a onclick="openModal();currentSlide(4)" class="single-slider__img"><img src="<?php the_field('imagen_4'); ?>"></a>
									<?php else: ?>
									<?php endif ?>
									<?php if(get_field('imagen_5')): ?>
										<a onclick="openModal();currentSlide(5)" class="single-slider__img"><img src="<?php the_field('imagen_5'); ?>"></a>
										<?php else: ?>
										<?php endif ?>
										<?php if(get_field('imagen_6')): ?>
											<a onclick="openModal();currentSlide(6)" class="single-slider__img"><img src="<?php the_field('imagen_6'); ?>"></a>
											<?php else: ?>
											<?php endif ?>
											<?php if(get_field('imagen_7')): ?>
												<a onclick="openModal();currentSlide(7)" class="single-slider__img"><img src="<?php the_field('imagen_7'); ?>"></a>
												<?php else: ?>
												<?php endif ?>
												<?php if(get_field('imagen_8')): ?>
													<a onclick="openModal();currentSlide(8)" class="single-slider__img"><img src="<?php the_field('imagen_8'); ?>"></a>
													<?php else: ?>
													<?php endif ?>
													<?php if(get_field('imagen_9')): ?>
														<a onclick="openModal();currentSlide(9)" class="single-slider__img"><img src="<?php the_field('imagen_9'); ?>"></a>
														<?php else: ?>
														<?php endif ?>
														<?php if(get_field('imagen_10')): ?>
															<a onclick="openModal();currentSlide(10)" class="single-slider__img"><img src="<?php the_field('imagen_10'); ?>"></a>
															<?php else: ?>
															<?php endif ?>
															<?php if(get_field('imagen_11')): ?>
																<a onclick="openModal();currentSlide(11)" class="single-slider__img"><img src="<?php the_field('imagen_11'); ?>"></a>
																<?php else: ?>
																<?php endif ?>
																<?php if(get_field('imagen_12')): ?>
																	<a onclick="openModal();currentSlide(12)" class="single-slider__img"><img src="<?php the_field('imagen_12'); ?>"></a>
																	<?php else: ?>
																	<?php endif ?>
																	<?php if(get_field('imagen_13')): ?>
																		<a onclick="openModal();currentSlide(13)" class="single-slider__img"><img src="<?php the_field('imagen_13'); ?>"></a>
																		<?php else: ?>
																		<?php endif ?>
																		<?php if(get_field('imagen_14')): ?>
																			<a onclick="openModal();currentSlide(14)" class="single-slider__img"><img src="<?php the_field('imagen_14'); ?>"></a>
																			<?php else: ?>
																			<?php endif ?>
																			<?php if(get_field('imagen_15')): ?>
																				<a onclick="openModal();currentSlide(15)" class="single-slider__img"><img src="<?php the_field('imagen_15'); ?>"></a>
																				<?php else: ?>
																				<?php endif ?>
																				<?php if(get_field('imagen_16')): ?>
																					<a onclick="openModal();currentSlide(16)" class="single-slider__img"><img src="<?php the_field('imagen_16'); ?>"></a>
																					<?php else: ?>
																					<?php endif ?>
																					<?php if(get_field('imagen_17')): ?>
																						<a onclick="openModal();currentSlide(17)" class="single-slider__img"><img src="<?php the_field('imagen_17'); ?>"></a>
																						<?php else: ?>
																						<?php endif ?>
																						<?php if(get_field('imagen_18')): ?>
																							<a onclick="openModal();currentSlide(18)" class="single-slider__img"><img src="<?php the_field('imagen_18'); ?>"></a>
																							<?php else: ?>
																							<?php endif ?>
																							<?php if(get_field('imagen_19')): ?>
																								<a onclick="openModal();currentSlide(19)" class="single-slider__img"><img src="<?php the_field('imagen_19'); ?>"></a>
																								<?php else: ?>
																								<?php endif ?>
																								<?php if(get_field('imagen_20')): ?>
																									<a onclick="openModal();currentSlide(20)" class="single-slider__img"><img src="<?php the_field('imagen_20'); ?>"></a>
																									<?php else: ?>
																									<?php endif ?>
																									<?php if(get_field('imagen_21')): ?>
																										<a onclick="openModal();currentSlide(21)" class="single-slider__img"><img src="<?php the_field('imagen_21'); ?>"></a>
																										<?php else: ?>
																										<?php endif ?>
																										<?php if(get_field('imagen_22')): ?>
																											<a onclick="openModal();currentSlide(22)" class="single-slider__img"><img src="<?php the_field('imagen_22'); ?>"></a>
																											<?php else: ?>
																											<?php endif ?>
																											<?php if(get_field('imagen_23')): ?>
																												<a onclick="openModal();currentSlide(23)" class="single-slider__img"><img src="<?php the_field('imagen_23'); ?>"></a>
																												<?php else: ?>
																												<?php endif ?>
																												<?php if(get_field('imagen_24')): ?>
																													<a onclick="openModal();currentSlide(24)" class="single-slider__img"><img src="<?php the_field('imagen_24'); ?>"></a>
																													<?php else: ?>
																													<?php endif ?>
																													<?php if(get_field('imagen_25')): ?>
																														<a onclick="openModal();currentSlide(25)" class="single-slider__img"><img src="<?php the_field('imagen_25'); ?>"></a>
																														<?php else: ?>
																														<?php endif ?>
																														<?php if(get_field('imagen_26')): ?>
																															<a onclick="openModal();currentSlide(26)" class="single-slider__img"><img src="<?php the_field('imagen_26'); ?>"></a>
																															<?php else: ?>
																															<?php endif ?>
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
																																<p>Categoría: <?php the_category(); ?></p> 
																															</div>
																														</div>
																													</div>
																												</div>
																											</section>

																											<!-- MODAL -->


																											<div id="myModal" class="modal">


																												<div class="modal-content">
																													<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal()">
																														<span aria-hidden='true' class='fa fa-close'></span>
																													</button>

																													<?php if(get_field('imagen_1')): ?>
																														<div class="mySlides">			
																															<div class="main-details__slick--items" >
																																<div class="main-details__slick--img">
																																	<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_1');?>">
																																</div>
																															</div>
																														</div>
																														<?php else: ?>

																														<?php endif ?>

																														<?php if(get_field('imagen_2')): ?>
																															<div class="mySlides">			
																																<div class="main-details__slick--items" >
																																	<div class="main-details__slick--img">
																																		<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_2');?>">
																																	</div>
																																</div>
																															</div>
																															<?php else: ?>

																															<?php endif ?>

																															<?php if(get_field('imagen_3')): ?>
																																<div class="mySlides">			
																																	<div class="main-details__slick--items" >
																																		<div class="main-details__slick--img">
																																			<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_3');?>">
																																		</div>
																																	</div>
																																</div>
																																<?php else: ?>

																																<?php endif ?>
																																<?php if(get_field('imagen_4')): ?>
																																	<div class="mySlides">			
																																		<div class="main-details__slick--items" >
																																			<div class="main-details__slick--img">
																																				<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_4');?>">
																																			</div>
																																		</div>
																																	</div>
																																	<?php else: ?>

																																	<?php endif ?>

																																	<?php if(get_field('imagen_5')): ?>
																																		<div class="mySlides">			
																																			<div class="main-details__slick--items" >
																																				<div class="main-details__slick--img">
																																					<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_5');?>">
																																				</div>
																																			</div>
																																		</div>
																																		<?php else: ?>

																																		<?php endif ?>

																																		<?php if(get_field('imagen_6')): ?>
																																			<div class="mySlides">			
																																				<div class="main-details__slick--items" >
																																					<div class="main-details__slick--img">
																																						<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_6');?>">
																																					</div>
																																				</div>
																																			</div>
																																			<?php else: ?>

																																			<?php endif ?>

																																			<?php if(get_field('imagen_7')): ?>
																																				<div class="mySlides">			
																																					<div class="main-details__slick--items" >
																																						<div class="main-details__slick--img">
																																							<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_7');?>">
																																						</div>
																																					</div>
																																				</div>
																																				<?php else: ?>

																																				<?php endif ?>

																																				<?php if(get_field('imagen_8')): ?>
																																					<div class="mySlides">			
																																						<div class="main-details__slick--items" >
																																							<div class="main-details__slick--img">
																																								<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_8');?>">
																																							</div>
																																						</div>
																																					</div>
																																					<?php else: ?>

																																					<?php endif ?>

																																					<?php if(get_field('imagen_9')): ?>
																																						<div class="mySlides">			
																																							<div class="main-details__slick--items" >
																																								<div class="main-details__slick--img">
																																									<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_9');?>">
																																								</div>
																																							</div>
																																						</div>
																																						<?php else: ?>

																																						<?php endif ?>

																																						<?php if(get_field('imagen_10')): ?>
																																							<div class="mySlides">			
																																								<div class="main-details__slick--items" >
																																									<div class="main-details__slick--img">
																																										<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_10');?>">
																																									</div>
																																								</div>
																																							</div>
																																							<?php else: ?>

																																							<?php endif ?>
																																							<?php if(get_field('imagen_11')): ?>
																																								<div class="mySlides">			
																																									<div class="main-details__slick--items" >
																																										<div class="main-details__slick--img">
																																											<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_11');?>">
																																										</div>
																																									</div>
																																								</div>
																																								<?php else: ?>

																																								<?php endif ?>
																																								<?php if(get_field('imagen_12')): ?>
																																									<div class="mySlides">			
																																										<div class="main-details__slick--items" >
																																											<div class="main-details__slick--img">
																																												<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_12');?>">
																																											</div>
																																										</div>
																																									</div>
																																									<?php else: ?>

																																									<?php endif ?>
																																									<?php if(get_field('imagen_13')): ?>
																																										<div class="mySlides">			
																																											<div class="main-details__slick--items" >
																																												<div class="main-details__slick--img">
																																													<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_13');?>">
																																												</div>
																																											</div>
																																										</div>
																																										<?php else: ?>

																																										<?php endif ?>
																																										<?php if(get_field('imagen_14')): ?>
																																											<div class="mySlides">			
																																												<div class="main-details__slick--items" >
																																													<div class="main-details__slick--img">
																																														<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_14');?>">
																																													</div>
																																												</div>
																																											</div>
																																											<?php else: ?>

																																											<?php endif ?>
																																											<?php if(get_field('imagen_15')): ?>
																																												<div class="mySlides">			
																																													<div class="main-details__slick--items" >
																																														<div class="main-details__slick--img">
																																															<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_15');?>">
																																														</div>
																																													</div>
																																												</div>
																																												<?php else: ?>

																																												<?php endif ?>
																																												<?php if(get_field('imagen_16')): ?>
																																													<div class="mySlides">			
																																														<div class="main-details__slick--items" >
																																															<div class="main-details__slick--img">
																																																<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_16');?>">
																																															</div>
																																														</div>
																																													</div>
																																													<?php else: ?>

																																													<?php endif ?>
																																													<?php if(get_field('imagen_17')): ?>
																																														<div class="mySlides">			
																																															<div class="main-details__slick--items" >
																																																<div class="main-details__slick--img">
																																																	<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_17');?>">
																																																</div>
																																															</div>
																																														</div>
																																														<?php else: ?>

																																														<?php endif ?>
																																														<?php if(get_field('imagen_18')): ?>
																																															<div class="mySlides">			
																																																<div class="main-details__slick--items" >
																																																	<div class="main-details__slick--img">
																																																		<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_18');?>">
																																																	</div>
																																																</div>
																																															</div>
																																															<?php else: ?>

																																															<?php endif ?>
																																															<?php if(get_field('imagen_19')): ?>
																																																<div class="mySlides">			
																																																	<div class="main-details__slick--items" >
																																																		<div class="main-details__slick--img">
																																																			<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_19');?>">
																																																		</div>
																																																	</div>
																																																</div>
																																																<?php else: ?>

																																																<?php endif ?>
																																																<?php if(get_field('imagen_20')): ?>
																																																	<div class="mySlides">			
																																																		<div class="main-details__slick--items" >
																																																			<div class="main-details__slick--img">
																																																				<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_20');?>">
																																																			</div>
																																																		</div>
																																																	</div>
																																																	<?php else: ?>

																																																	<?php endif ?>
																																																	<?php if(get_field('imagen_21')): ?>
																																																		<div class="mySlides">			
																																																			<div class="main-details__slick--items" >
																																																				<div class="main-details__slick--img">
																																																					<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_21');?>">
																																																				</div>
																																																			</div>
																																																		</div>
																																																		<?php else: ?>

																																																		<?php endif ?>
																																																		<?php if(get_field('imagen_22')): ?>
																																																			<div class="mySlides">			
																																																				<div class="main-details__slick--items" >
																																																					<div class="main-details__slick--img">
																																																						<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_22');?>">
																																																					</div>
																																																				</div>
																																																			</div>
																																																			<?php else: ?>

																																																			<?php endif ?>
																																																			<?php if(get_field('imagen_23')): ?>
																																																				<div class="mySlides">			
																																																					<div class="main-details__slick--items" >
																																																						<div class="main-details__slick--img">
																																																							<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_23');?>">
																																																						</div>
																																																					</div>
																																																				</div>
																																																				<?php else: ?>

																																																				<?php endif ?>
																																																				<?php if(get_field('imagen_24')): ?>
																																																					<div class="mySlides">			
																																																						<div class="main-details__slick--items" >
																																																							<div class="main-details__slick--img">
																																																								<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_24');?>">
																																																							</div>
																																																						</div>
																																																					</div>
																																																					<?php else: ?>

																																																					<?php endif ?>
																																																					<?php if(get_field('imagen_25')): ?>
																																																						<div class="mySlides">			
																																																							<div class="main-details__slick--items" >
																																																								<div class="main-details__slick--img">
																																																									<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_25');?>">
																																																								</div>
																																																							</div>
																																																						</div>
																																																						<?php else: ?>

																																																						<?php endif ?>
																																																						<?php if(get_field('imagen_26')): ?>
																																																							<div class="mySlides">			
																																																								<div class="main-details__slick--items" >
																																																									<div class="main-details__slick--img">
																																																										<img style="width:100%;height:100%" class="details-galeria__img" src="<?php the_field('imagen_26');?>">
																																																									</div>
																																																								</div>
																																																							</div>
																																																							<?php else: ?>

																																																							<?php endif ?>


																																																							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
																																																							<a class="next" onclick="plusSlides(1)">&#10095;</a>
																																																						</div>
																																																					</div>

																																																				<?php  endif; ?>
																																																				<?php get_footer(); ?>


