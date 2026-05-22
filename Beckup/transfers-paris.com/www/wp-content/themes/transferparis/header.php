<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transferparis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#08b7ff">
	<!-- Custom Browsers Color End -->
	
	<style>
		.commoon-opacity-wrapper{opacity: 0;}
		.loader{position:fixed;left:0;right:0;top:0;bottom:0;z-index:999;display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;align-items:center}.loader.active .loader-inner span{transform:translateY(0);opacity:1}.loader-inner{position:relative;z-index:3;padding:60px;font-size:100px;color:#fff;font-weight:900;text-transform:uppercase}.loader-inner span{transform:translateY(100%);transition:all .4s ease;display:inline-block;opacity:0}.loader-bg{position:absolute;border-radius:50%;transition:transform .8s ease;background:linear-gradient(to right,#08b7ff,#1c32aa);z-index:2;transform:scale(0)}

		@media screen and (max-width: 768px){.loader-inner{padding: 30px;font-size: 40px;}}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@3.0.0-beta.4/dist/simplebar.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/libs/dp/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
	<!-- loader -->
	<div class="loader" id="loader">
		<div class="loader-bg" id="loader-bg"></div>
		<div class="loader-inner" id="loader-inner">
			Loading...
		</div>
	</div>
	<!-- end loader -->

	<div class="address-to" id="address-to">
				<div class="address-to-bg" id="address-to-bg"></div>
				<div class="address-to-inner">
					<button id="close-address-to" class="close-address-to">
						<span></span>
					</button>
					<p>
						<?php the_field("c26_1", 'option');?>
					</p>
					<input type="text" id="address-to-from" placeholder="<?php the_field("c26_2", 'option');?>" required name="from" autocomplete="off">
					<input type="text" id="address-to-to" placeholder="<?php the_field("c26_3", 'option');?>" required name="to" autocomplete="off">
					<button id="address-to-button" class="address-to-button"><?php the_field("c26_4", 'option');?></button>
				</div>
			</div>

			<div class="address-from" id="address-from">
				<div class="address-form-bg" id="address-form-bg"></div>
				<div class="address-from-inner">
					<button id="close-address-from" class="close-address-from">
						<span></span>
					</button>
					<p>
						<?php the_field("c4_1", 'option');?>
					</p>
					<input type="text" id="address-from-from" placeholder="<?php the_field("c4_2", 'option');?>" required name="from" autocomplete="off">
					<input type="text" id="address-from-to" placeholder="<?php the_field("c4_3", 'option');?>" required name="to" autocomplete="off">
					<button id="address-from-button" class="address-from-button"><?php the_field("c4_4", 'option');?></button>
				</div>
			</div>

			<div class="car-message" id="car-message">
				<?php the_field("c14", 'option');?> <b><span id="window1-data-cars">1</span> <?php the_field("c14_1", 'option');?></b> <?php the_field("c15", 'option');?> <b><span id="car-max-sit">7</span>.</b> <?php the_field("c16", 'option');?> <b><span id="car-max-sit-person">1</span> <?php the_field("c16_1", 'option');?></b>
			</div>

		<!-- modal-call -->
		<div class="modal-call" id="modal-call">
			<div class="modal-call-inner" id="modal-call-inner">
				<button class="close-modal-call" id="close-modal-call">
					<span></span>
				</button>
				<h3>
					<?php the_field("mm8", 'option');?>
				</h3>
				<form action="#">
					<!-- Hidden Required Fields -->
					<input type="hidden" name="project_name" value="<?php the_field("mail2", 'option');?>">
					<input type="hidden" name="admin_email" value="<?php the_field("mail1", 'option');?>">
					<input type="hidden" name="form_subject" value="<?php the_field("mail3", 'option');?>">
					<!-- END Hidden Required Fields -->
					<input type="hidden" name="Client need:" id="callback-title">
					<div class="modal-call-input">
						<input type="text" id="modal-call-input-name" name="Enter your Name" placeholder="<?php the_field("mm9", 'option');?>" required>
					</div>
					<div class="modal-call-input">
						<label for="modal-call-input-phone"></label>
						<input type="number" id="modal-call-inputphone" name="Enter your Phone" placeholder="<?php the_field("mm10", 'option');?>" required>
					</div>
					<div class="modal-call-submit-wrapper">
						<button type="submit" class="modal-call-submit" id="modal-call-submit">
							<?php the_field("mm11", 'option');?>
						</button>
					</div>
				</form>
			</div>
		</div>
		<!-- end modal-call -->

		<!-- modal-call -->
		<div class="modal-driver" id="modal-driver">
			<div class="modal-driver-inner" id="modal-driver-inner">
				<button class="close-modal-driver" id="close-modal-driver">
					<span></span>
				</button>
				<h3>
					<?php the_field("mm2", 'option');?>
				</h3>
				<form action="#">
					<!-- Hidden Required Fields -->
					<input type="hidden" name="project_name" value="<?php the_field("mail2", 'option');?>">
					<input type="hidden" name="admin_email" value="<?php the_field("mail1", 'option');?>">
					<input type="hidden" name="form_subject" value="<?php the_field("mail3", 'option');?>">
					<!-- END Hidden Required Fields -->
					<div class="modal-driver-input">
						<input type="number" id="modal-driver-input-phone" autocomplete="off" name="Your Phone" placeholder="<?php the_field("mm3", 'option');?>" required>
					</div>
					<div class="modal-driver-input">
						<input type="email" id="modal-driver-input-email" autocomplete="off" name="Your Email" placeholder="<?php the_field("mm4", 'option');?>" required>
					</div>
					<div class="modal-driver-input">
						<input type="text" id="modal-driver-input-name" autocomplete="off" name="Name and last Name" placeholder="<?php the_field("mm5", 'option');?>" required>
					</div>
					<div class="modal-driver-input">
						<input type="text" id="modal-driver-carmodel" autocomplete="off" name="Car model" placeholder="<?php the_field("mm6", 'option');?>" required>
					</div>
					<div class="modal-driver-submit-wrapper">
						<button type="submit" class="modal-driver-submit" id="modal-driver-submit">
							<?php the_field("mm7", 'option');?>
						</button>
					</div>
				</form>
			</div>
		</div>
		<!-- end modal-call -->

		<!-- modal-form -->
		<div class="modal-form" id="modal-form">
			<div class="modal-form-bg1" id="modal-form-bg1"></div>
			<div class="modal-form-inner">
				<button class="modal-form-close" id="modal-form-close">
					<span></span>
				</button>
				<form action="#">
					<input type="hidden" id="modal-hidden-1" name="Address to take (Details From - To)">
					<input type="hidden" id="modal-hidden-2" name="Address to take client">
					<input type="hidden" id="modal-hidden-3" name="Address to take (Date)">
					<input type="hidden" id="modal-hidden-4" name="Car Class">
					<input type="hidden" id="modal-hidden-5" name="Passenger">
					<input type="hidden" id="modal-hidden-6" name="Baggage">
					<input type="hidden" id="modal-hidden-7" name="Common Price">

					<input type="hidden" id="modal-hidden-8" name="Both directions, Time">
					<input type="hidden" id="modal-hidden-9" name="Both directions, Address (From - To)">

					<div class="modal-inner-content">
						<div class="modal-inner-content-bg" id="modal-inner-content-bg"></div>
						<div class="modal-inner-box" id="modal-inner-box">
							<h3>
								<?php the_field("mc1", 'option');?>
							</h3>
							<div class="modal-inner-form">
								<div class="modal-inner-form-user">
									<input type="text" placeholder="<?php the_field("mc2", 'option');?>" id="modal-form-name" required>
									<input type="number" placeholder="<?php the_field("mc3", 'option');?>" id="modal-form-phone" required>
								</div>
								<div class="modal-inner-form-user">
									<input type="text" placeholder="<?php the_field("mc4", 'option');?>" id="modal-form-reis">
									<input type="text" placeholder="<?php the_field("mc5", 'option');?>" id="modal-form-term">
								</div>
								<div class="modal-inner-form-user modal-inner-form-user-textarea">
									<textarea name="Comment" placeholder="<?php the_field("mc6", 'option');?>" rows="3 " id="modal-form-comment"></textarea>
									<div class="modal-inner-form-children">
										<p>
											<?php the_field("mc7", 'option');?>
										</p>
										<input type="text" name="Baby seat" placeholder="<?php the_field("mc8", 'option');?>" id="modal-form-number">
									</div>
								</div>
							</div>
							<p>
								<?php the_field("mc9", 'option');?>
							</p>
						</div>
					</div>
					<button class="send-modal-form" id="send-modal-form">
						<?php the_field("mc10", 'option');?>
					</button>
				</form>
			</div>
		</div>
		<!-- end modal-form -->

		<!-- modal menu -->
		<div class="modal-menu" id="modal-menu">
			<div class="modal-menu-bg" id="modal-menu-bg"></div>
			<button class="close-modal-menu" id="close-modal-menu">
				<span></span>
			</button>
			<div class="modal-menu-inner">
				<div class="modal-menu-call">
					<ul>
						<!-- item -->
						<?php if(get_field('mm1', 'option')): ?>
							<?php while(has_sub_field('mm1', 'option')): ?>


									
									<li>
										<a href="tel:<?php echo get_sub_field("mm1_1", 'option');?>">
											<?php echo get_sub_field("mm1_1", 'option');?>
										</a>
									</li>


							<?php endwhile; ?>
						<?php endif; ?>
					<!-- emd item -->
					</ul>
				</div>

				<div class="modal-menu-list">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</div>
				
			</div>
		</div>
		<!-- end modal menu -->

		<!-- modal select -->
		<div class="modal-select" id="modal-select">
			<div class="modal-select-bg2" id="modal-select-bg2"></div>
			<div class="modal-select-inner">
				<button class="close-modal-select" id="close-modal-select"><span></span></button>
				<div class="modal-select-list" id="modal-select-list">
					<ul>
						<li data-class="1" data-passanger-count="<?php the_field("c17_1", 'option');?>" data-car-length="1">
							<?php the_field("c17", 'option');?>
						</li>
						<li data-class="2" data-passanger-count="<?php the_field("c19_1", 'option');?>" data-car-length="2">
							<?php the_field("c19", 'option');?>
						</li>
						<li data-class="3" data-passanger-count="<?php the_field("c21_1", 'option');?>" data-car-length="3">
							<?php the_field("c21", 'option');?>
						</li>
						<li data-class="4" data-passanger-count="<?php the_field("c23_1", 'option');?>" data-car-length="4">
							<?php the_field("c23", 'option');?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end modal select -->
	
		<!-- thx -->
		<div class="thx" id="thx">
			<div class="thx-bg" id="thx-bg"></div>
			<div class="thx-inner" id="thx-inner">
				<?php the_field("mail4", 'option');?>
			</div>
		</div>
		<!-- end thx -->
	
	<div class="commoon-opacity-wrapper" id="commoon-opacity-wrapper">
		<!-- header -->
		<header class="header">
			<div class="wrapper">
				<div class="header-menu">
					<a href="/" class="header-logo">
						<img src="<?php echo get_field("t1", 'option')['url'];?>" alt="logotype">
					</a>
					<nav>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
					<a href="#" class="header-call" id="header-call">
						<?php the_field("t2", 'option');?>
					</a>
				</div>
				<div class="header-leng">
					<ul>
						<!-- item -->
						<?php if(get_field('t3', 'option')): ?>
							<?php while(has_sub_field('t3', 'option')): ?>


									
									<li>
										<a href="tel:<?php echo get_sub_field("t3_1", 'option');?>">
											<?php echo get_sub_field("t3_1", 'option');?>
										</a>
									</li>


							<?php endwhile; ?>
						<?php endif; ?>
					<!-- emd item -->
					</ul>
					<div class="leng-button">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
					<button id="open-mobile-menu" class="header-mob-menu">
						<span></span>
					</button>
				</div>
			</div>
		</header>
		<!-- end header -->

			

			