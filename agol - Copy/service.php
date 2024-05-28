
<?php
/* 

Template Name: Service Template

*/


?>


<?php get_header();?>
<section class="services-section">
		<div class="icon-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="icon-two" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="icon-three" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><span class="theme-color">What</span> We Do</h2>
				<div class="text">OUR SERVICES</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_One_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_One_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_One_descriptions'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_Two_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_Two_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_Two_description'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_Three_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_Three_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_Three_description'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>

				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_Four_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_Four_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_Four_description'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>
								
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_Five_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_Five_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_Five_description'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="service-detail.html"><img src="<?php echo $agol['service_Six_images']['url'];?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="icon-box">
								<span class="icon flaticon-speed"></span>
							</div>
							<h5><a href="service-detail.html"><?php echo $agol['service_Six_heading'];?></a></h5>
							<div class="text"><?php echo $agol['service_Six_descriptionsss'];?></div>
							<a href="service-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More <i class="fa fa-angle-right"></i></span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <?php get_footer();?>