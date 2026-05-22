<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package transferparis
 */

get_header();
?>

		<!-- gradient-wrapper -->
		<div class="gradient-wrapper">

			<!-- window1 -->
			<section class="window1" id="window1">
				<img src="<?php echo get_template_directory_uri()?>/img/paris.svg" alt="Image" class="window1-paris-icon">
				<div class="wrapper">
					<div class="window1-calculate">
						<div class="window1-title">
							<h1 id="window1-title-anchor">
								<?php the_field("h1");?>
							</h1>
							<div class="window1-trigger">
								<div class="window1-trigger-item">
									<p>
										<?php the_field("c1", 'option');?>
									</p>
								</div>
								<div class="window1-trigger-item">
									<a href="#window1-trigger-item-action-anchor" data-triger-time="empty" data-triger-address="empty" class="window1-trigger-item-action pass-off" id="window1-trigger-item-action"></a>
								</div>
							</div>
						</div>
						<form action="#">
							<!-- form -->
							<input type="hidden" name="Client Name" id="window1-hidden-name">
							<input type="hidden" name="Client Phone" id="window1-hidden-phone">
							<div class="window1-form-box-1 window1-form-box window1-form-box-right">
								<div class="window1-input ">
									<div class="window1-select-bg">
										<input type="text" placeholder="<?php the_field("c2", 'option');?>" required id="form-from" readonly class="pass-off">

										<div class="window1-hidden-select" id="window1-hidden-select">
											<ul data-simplebar data-simplebar-auto-hide="false" id="car-class-val-common"></ul>
										</div>
										<div class="input-hidden-select-error" id="input-hidden-select-error"><?php the_field("c2_1", 'option');?></div>
									</div>
								</div>
								<div class="window1-input">
									<input type="text" placeholder="<?php the_field("c3", 'option');?>" required readonly id="calendar-input" class="window1-calendar-input pass-off" name="filter-date">
								</div>
							</div>

							<div class="window1-form-box-2 window1-form-box window1-form-box-right" id="window1-trigger-item-action-anchor">
								<div class="window1-input">
									<input type="text" placeholder="<?php the_field("c4", 'option');?>" required id="to-from" autocomplete="off" readonly class="pass-off"> 
								</div>
								<div class="window1-input window1-input-select">
									<input type="text" id="choose-car-class" name="Car class" placeholder="<?php the_field("c5", 'option');?>" readonly>
									<img src="<?php echo get_template_directory_uri()?>/img/down.svg" alt="Arrow">
								</div>
							</div>

							<div class="window1-form-box window1-form-box-left window1-form-box-3">
								<div class="window1-input">
									<input type="number" placeholder="<?php the_field("c6", 'option');?>" required min="1" max="40" id="form-passenger" class="pass-off" data-address="0">
								</div>
								<div class="window1-input">
									<input type="number" placeholder="<?php the_field("c7", 'option');?>" required min="1" max="50" data-pass="1" id="form-baggage" class="pass-off">
								</div>
								<div class="window1-input">
									<a href="javascript: void(0)" data-adress-from="empty" data-adress-to="empty" data-passenger="empty" data-baggage="empty" data-timeTo="empty" data-carClass="empty" data-time="empty" data-route-to="empty" class="window1-input-order" id="window1-input-order"><?php the_field("c8", 'option');?></a>
								</div>
							</div>
							<!-- end form -->

							<!-- window1 add Trip -->
							<div class="window1-back-trip" id="window1-back-trip">
								<h4><?php the_field("c25_0", 'option');?></h4>
								<div class="window1-form-box-4 window1-form-box window1-form-box-right">
									<div class="window1-input">
										<input type="text" placeholder="<?php the_field("c25", 'option');?>" required readonly id="calendar-input-1" class="window1-calendar-input" name="filter-date">
									</div>
								</div>
								<div class="window1-form-box-1 window1-form-box window1-form-box-right">
									<div class="window1-input">
										<input type="text" id="route-to" placeholder="<?php the_field("c26", 'option');?>" required readonly>
									</div>
								</div>
								<div class="window1-back-trip-price">
									<?php the_field("c9", 'option');?> <span id="window1-hidden-data-val">0</span> €<br><?php the_field("c10", 'option');?> <span><?php the_field("c11", 'option');?></span>
								</div>
							</div>
							<!-- end window1 add Trip -->
						</form>
						<div class="window1-data">
							<!-- data item -->
							<div class="window1-data-price">
								<div class="window1-data-title">
									<?php the_field("c9", 'option');?>
								</div>
								<div class="window1-data-description">
									<span id="window1-data-val" data-current-price="0">0</span> €
								</div>
							</div>
							
							<div class="window1-data-expect">
								<div class="window1-data-title">
									<?php the_field("c10", 'option');?>
								</div>
								<div class="window1-data-description">
									<?php the_field("c11", 'option');?>
								</div>
							</div>

							<div class="window1-data-payment">
								<div class="window1-data-title">
									<?php the_field("c12", 'option');?>
								</div>
								<ul>
									<!-- item -->
									<?php if(get_field('c13', 'option')): ?>
										<?php while(has_sub_field('c13', 'option')): ?>


												<li><img src="<?php echo get_sub_field("c13_1", 'option')['url'];?>" alt="Image"></li>


										<?php endwhile; ?>
									<?php endif; ?>
									<!-- emd item -->
								</ul>
							</div>

							<!-- end data -->
						</div>
					</div>
					<!-- window1 image -->
					<div class="window1-car-list">
						<img src="<?php echo get_field('h0')['url']; ?>" alt="Icon" class="window1-car-list-image">
						<div class="window1-circle">
							<a href="#choose-car" id="car-info" class="window1-open-list">
								<img src="<?php echo get_template_directory_uri()?>/img/list.svg" alt="Icon">
							</a>
						</div>
					</div>
					<!-- window1 end image -->
				</div>
			</section>
			<!-- end window1 -->

			<!-- window2 -->
			<section class="window2">
				<div class="wrapper">
					<div class="window2-info">
						<p>
							<?php the_field("h2");?>
						</p>
					</div>
					<div class="window2-call">
						<ul>
							<!-- item -->
								<?php if(get_field('h3')): ?>
									<?php while(has_sub_field('h3')): ?>

											<li><a href="<?php echo get_sub_field("h3_3");?>"><img src="<?php echo get_sub_field('h3_1')['url']; ?>" alt="Icons"><?php echo get_sub_field("h3_2");?></a></li>
											
									<?php endwhile; ?>
								<?php endif; ?>
							<!-- emd item -->
						</ul>
					</div>
				</div>
			</section>
			<!-- end window2 -->

			<!-- window3 -->
			<section class="window3" id="section3">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-12">
							<div class="common-title">
								<div class="common-subtitle">
									<?php the_field("h4");?>
								</div>
								<h2>
									<?php the_field("h5");?>
								</h2>
							</div>
						</div>
						<!-- item -->
							<?php if(get_field('h6')): ?>
								<?php while(has_sub_field('h6')): ?>
										<div class="window3-item col-lg-4 col-xs-12 col-sm-6 col-md-4">
											<div class="window3-img">
												<?php echo get_sub_field("h6_1");?>
											</div>
											<h3><?php echo get_sub_field("h6_2");?></h3>
											<p>
												<?php echo get_sub_field("h6_3");?>
											</p>
										</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<!-- emd item -->
						<div class="col-xs-12 col-lg-4 col-sm-6 col-md-4 window3-item">
							<a href="javascript: void(0)" class="window3-item-link" id="window3-item-link">
								<div class="window3-img"></div>
								<h3><?php the_field("h7");?></h3>
								<p>
									<?php the_field("h8");?>
								</p>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- end window3 -->

		</div>
		<!-- end gradient wrapper -->

		<!-- window4 -->
		<section class="window4" id="choose-car">
			<div class="wrapper">
				<div class="common-title">
					<div class="common-subtitle">
						<?php the_field("h9");?>
					</div>
					<h2>
						<?php the_field("h10");?>
					</h2>
				</div>
				<!-- wrapper -->
				<div class="window4-more-info">
					<div class="window4-info-img-box">
						<h3 id="window4-title" ><?php the_field("h12");?></h3>
						<img src="<?php echo get_field('h11')['url']; ?>" alt="Icon" class="window4-image" id="window4-image">

					</div>
					<a href="#window1-title-anchor" class="window4-order" id="window4-order">
						<?php the_field("h12_1");?>
					</a>
					<div class="window4-more-info-content" id="window4-more-info-content">
						<?php the_field("h13");?>
					</div>

				</div>
				<!-- end wrapper -->
			</div>

			<!-- item -->
			<div class="window4-item-box" id="window4-item-box">
				
				<!-- item -->
					<?php if(get_field('h14')): ?>
						<?php while(has_sub_field('h14')): ?>
								
								<div class="window4-item">
									<div class="window4-item-img">
										<div class="window4-item-img-container">
											<img src="<?php echo get_sub_field('h14_1')['url']; ?>" alt="Image" id="<?php echo get_sub_field("h14_4");?>">
										</div>
									</div>
									<div class="window4-item-content">
										<h3><?php echo get_sub_field("h14_2");?></h3>
									</div>
									<div class="window4-hidden">
										<?php echo get_sub_field("h14_3");?>
									</div>
								</div>

						<?php endwhile; ?>
					<?php endif; ?>
				<!-- emd item -->

			</div>
			
			<!-- end item -->
		</section>
		<!-- end window4 -->

		<!-- window5 -->
		<section class="window5" id="section5">
			<img src="<?php echo get_template_directory_uri()?>/img/liner.png" alt="image" class="window5-bg-image">
			<div class="wrapper">
				<div class="common-title">
					<div class="common-subtitle">
						<?php the_field("h15");?>
					</div>
					<h2>
						<?php the_field("h16");?>
					</h2>
				</div>
				<div class="container">
					<div class="row">
						
						<!-- item -->
							<?php if(get_field('h17')): ?>
								<?php while(has_sub_field('h17')): ?>
						
										<div class="col-12 col-sm-6 col-md-4 col-lg-4 window5-item">
											<!-- news item -->
											<a href="javascript: void(0)" class="window5-news-box">
												<img src="<?php echo get_sub_field('h17_0')['url']; ?>" alt="Icon">
												<div class="window5-news-wrap">
													<h2><?php echo get_sub_field("h17_2");?></h2>
													<div class="window5-date">
														<?php echo get_field("h18");?> <b><?php echo get_sub_field("h17_3");?></b> <span><?php echo get_field("h19");?> <b><?php echo get_sub_field("h17_4");?></b></span>
													</div>
													<div class="window5-order">
														<?php echo get_sub_field("h20");?>
													</div>
												</div>
											</a>
											<!-- end news item -->
										</div>

								<?php endwhile; ?>
							<?php endif; ?>
						<!-- emd item -->
						
						<div class="col-12"><a href="javascript: void(0)" class="window5-more-news" id="window5-more-news"><?php echo get_field("h21");?></a></div>

					</div>
				</div>
			</div>
		</section>
		<!-- end window5 -->

		<!-- window6 -->
		<section class="window6" id="window6">
			<div class="wrapper" id="window6-scroll" data-simplebar data-simplebar-auto-hide="false">

				<div class="container">
					<div class="row">

						<!-- item -->
							<?php if(get_field('h22')): ?>
								<?php while(has_sub_field('h22')): ?>
						
										<div class="col-12 col-sm-6 col-md-4 col-lg-4 window5-item">
											<!-- news item -->
											<a href="javascript: void(0)" class="window5-news-box">
												<img src="<?php echo get_sub_field('h22_1')['url']; ?>" alt="Icon">
												<div class="window5-news-wrap">
													<h2><?php echo get_sub_field("h22_2");?></h2>
													<div class="window5-date">
														<?php echo get_field("h18");?> <b><?php echo get_sub_field("h22_3");?></b> <span><?php echo get_field("h19");?> <b><?php echo get_sub_field("h22_4");?></b></span>
													</div>
													<div class="window5-order">
														<?php echo get_sub_field("h20");?>
													</div>
												</div>
											</a>
											<!-- end news item -->
										</div>

								<?php endwhile; ?>
							<?php endif; ?>
						<!-- emd item -->

					</div>
				</div>
			</div>
			<button class="close-modal-news" id="close-modal-news"><span></span></button>
			<div class="window6-bg" id="window6-bg"></div>
		</section>
		<!-- end window6 -->

		<!-- window7 -->
		<section class="window7" id="section7">
			<div class="wrapper">
				<div class="window7-item window7-item-align">
					<div class="window7-item-circle">
						<div class="window7-item-circle-1"></div>
						<div class="window7-item-circle-2"></div>
					</div>
					<div class="window7-image">
						<img src="<?php echo get_field('h26')['url']; ?>" alt="Icon">
					</div>
				</div>
				<div class="window7-item">
					<h2>
						<?php the_field("h23");?>
					</h2>
					<p>
						<?php the_field("h24");?>
					</p>
					<a href="javascript: void(0)" id="window7-link"><?php the_field("h25");?></a>
				</div>
			</div>
		</section>
		<!-- end window7 -->

<?php
get_footer();
