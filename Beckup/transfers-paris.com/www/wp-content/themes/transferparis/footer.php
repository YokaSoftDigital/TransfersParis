<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transferparis
 */

?>


<!-- footer -->
		<footer class="footer">
			<div class="wrapper">
				<div class="footer-title">
					<a href="/">
						<img src="<?php echo get_field("f0", 'option')['url'];?>" alt="Logotype">
					</a>
					<div class="footer-language">
						<?php the_field("f1", 'option');?> 
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="footer-items col-12  col-sm-6 col-md-4 col-lg-4">
							<h3><?php the_field("f2", 'option');?></h3>
							<p>
								<?php the_field("f3", 'option');?>
							</p>
						</div>
						<div class="footer-items col-6 col-sm-6 col-md-4 col-lg-4">
							<h3><?php the_field("f4", 'option');?></h3>
							<div class="footer-payment">
								<div class="window1-data-title">
									<?php the_field("f5", 'option');?>
								</div>
								<ul>
									<!-- item -->
									<?php if(get_field('f6', 'option')): ?>
										<?php while(has_sub_field('f6', 'option')): ?>


												<li><img src="<?php echo get_sub_field("f6_1", 'option')['url'];?>" alt="Image"></li>


										<?php endwhile; ?>
									<?php endif; ?>
								<!-- emd item -->
								</ul>
							</div>
						</div>
						<div class="footer-items col-6 col-sm-6 col-md-4 col-lg-4">
							<h3><?php the_field("f7", 'option');?></h3>
							<div class="footer-contact">
								<!-- item -->
									<?php if(get_field('f8', 'option')): ?>
										<?php while(has_sub_field('f8', 'option')): ?>


												<a href="tel:<?php echo get_sub_field("f8_1", 'option');?>" class="footer-call">(044) 465 4456</a>


										<?php endwhile; ?>
									<?php endif; ?>
								<!-- emd item -->
								<ul>
									<!-- item -->
									<?php if(get_field('f9', 'option')): ?>
										<?php while(has_sub_field('f9', 'option')): ?>


												<li><a href="<?php echo get_sub_field("f9_3", 'option');?>"><img src="<?php echo get_sub_field("f9_1", 'option')['url'];?>" alt="Image"><?php echo get_sub_field("f9_2", 'option');?></a></li>


										<?php endwhile; ?>
									<?php endif; ?>
								<!-- emd item -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

	</div>
	<!-- end common opacity -->

	<!-- car class count -->
	<div class="car-class-count-hidden">
		<!-- car class -->
		<ul id="car-class-val-1">
			<!-- item -->
				<?php if(get_field("c18", 'option')): ?>
					<?php while(has_sub_field("c18", 'option')): ?>

							<li data-price="<?php echo get_sub_field("c18_2", 'option');?>"><?php echo get_sub_field("c18_1", 'option');?></li>

					<?php endwhile; ?>
				<?php endif; ?>
			<!-- emd item -->
		</ul>
		<!-- car class -->

		<!-- car class -->
		<ul id="car-class-val-2">
			<!-- item -->
				<?php if(get_field("c20", 'option')): ?>
					<?php while(has_sub_field("c20", 'option')): ?>

							<li data-price="<?php echo get_sub_field("c20_2", 'option');?>"><?php echo get_sub_field("c20_1", 'option');?></li>

					<?php endwhile; ?>
				<?php endif; ?>
			<!-- emd item -->
		</ul>
		<!-- car class -->

		<!-- car class -->
		<ul id="car-class-val-3">
			<!-- item -->
				<?php if(get_field("c22", 'option')): ?>
					<?php while(has_sub_field("c22", 'option')): ?>

							<li data-price="<?php echo get_sub_field("c22_2", 'option');?>"><?php echo get_sub_field("c22_1", 'option');?></li>

					<?php endwhile; ?>
				<?php endif; ?>
			<!-- emd item -->
		</ul>
		<!-- car class -->

		<!-- car class -->
		<ul id="car-class-val-4">
			<!-- item -->
				<?php if(get_field("c24", 'option')): ?>
					<?php while(has_sub_field("c24", 'option')): ?>

							<li data-price="<?php echo get_sub_field("c24_2", 'option');?>"><?php echo get_sub_field("c24_1", 'option');?></li>

					<?php endwhile; ?>
				<?php endif; ?>
			<!-- emd item -->
		</ul>
		<!-- car class -->
	</div>
	<!-- end car class count -->

	
	<?php wp_footer(); ?>
	<script src="https://cdn.jsdelivr.net/npm/simplebar@3.0.0-beta.4/dist/simplebar.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>

	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>

	<script src="<?php echo get_template_directory_uri()?>/libs/dp/jquery.datetimepicker.full.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/js-addition.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/calc.js"></script>

	<script>
	  jQuery.datetimepicker.setLocale('<?php echo get_field("c27", 'option');?>');
		
	  $("#modal-driver form").submit(function() { //Change
	  var th = $(this);
	  $.ajax({
		type: "POST",
		url: "<?php echo get_template_directory_uri()?>/mail.php",
		data: th.serialize()
	  }).done(function() {
		  
		    document.getElementById("modal-driver").classList.remove("active");
			setTimeout(function(){
				document.getElementById("modal-driver").style.opacity = "0";
			},500);
			setTimeout(function(){
				document.getElementById("modal-driver").style.display = "none";
			},1000);
		  	th.trigger("reset");
		  	setTimeout(function(){
				$("#thx").css("display", "flex");
			},1400);
		    setTimeout(function(){
			    $("#thx").addClass("active");
			    $("#thx-bg").css("opacity", "1");
		    }, 1700);
		  
		    setTimeout(function(){
			    $("#thx").removeClass("active");
			    $("#thx-bg").css("opacity", "0");
		    }, 5000);
		  	setTimeout(function(){
				$("#thx").css("display", "none");
				enableScrolling();
			},5500);
	  });
	  return false;
	});
		
		
		
	$("#modal-call form").submit(function() { //Change
	  var th = $(this);
	  $.ajax({
		type: "POST",
		url: "<?php echo get_template_directory_uri()?>/mail.php",
		data: th.serialize()
	  }).done(function() {
		  	
		    callbackTitle("del", "Callback");
			document.getElementById("modal-call").classList.remove("active");
			setTimeout(function(){
				document.getElementById("modal-call").style.opacity = "0";
			},500);
			setTimeout(function(){
				document.getElementById("modal-call").style.display = "none";
			},1000);
		    th.trigger("reset");
		  	setTimeout(function(){
				$("#thx").css("display", "flex");
			},1400);
		    setTimeout(function(){
			    $("#thx").addClass("active");
			    $("#thx-bg").css("opacity", "1");
		    }, 1700);
		  	
		    setTimeout(function(){
			    $("#thx").removeClass("active");
			    $("#thx-bg").css("opacity", "0");
		    }, 5000);
		  	setTimeout(function(){
				$("#thx").css("display", "none");
				enableScrolling();
			},5500);
	  });
	  return false;
	});
	</script>

	<script src="//code.jivosite.com/widget/uugBn57TjA" async></script>
</body>
</html>
