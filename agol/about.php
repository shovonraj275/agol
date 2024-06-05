
<?php
/* 

Template Name: About Template

*/


?>


<?php get_header();?>


<section class="about-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><span class="theme-color">Who</span> We are</h2>
				<div class="text">What Do You Know About Us</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title">About us</div>
						<h3>Welcome to Agol Tires</h3>
						<div class="text">
							<p><?php echo get_theme_mod('agol_about_us_set_con_description')?></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Psum dolor sit amet, consectetur adipiscing elit</li>
						</ul>
						<div class="clearfix">
							<a href="#" class="learn">Learn More About Us <span class="fa fa-angle-right"></span></a>
							<div class="signature"><img src="<?php echo get_theme_mod('agol_about_us_set_con_signature'); ?>" alt="" /></div>
							<div class="author-box">
								<div class="box-inner">
									<div class="author-image"><img src="<?php echo get_theme_mod('agol_about_us_set_con_author_img'); ?>" alt="" /></div>
									<h6><?php echo get_theme_mod('agol_about_us_set_con_author_name'); ?></h6>
									<div class="designation"><?php echo get_theme_mod('agol_about_us_set_con_author_designation'); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="<?php echo get_theme_mod('agol_about_us_set_con_right_side'); ?>" alt="" />
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
<?php get_footer();?>
