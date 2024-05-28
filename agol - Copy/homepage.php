<?php
/* 

Template Name: Home Template

*/


?>


<?php get_header();?>

	<!-- About Section -->
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
							<p><?php echo $agol['about_us_description'];?></p>
						</div>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Psum dolor sit amet, consectetur adipiscing elit</li>
						</ul>
						<div class="clearfix">
							<a href="#" class="learn">Learn More About Us <span class="fa fa-angle-right"></span></a>
							<div class="signature"><img src="<?php echo $agol['about_us_author_signature']['url'];?>" alt="" /></div>
							<div class="author-box">
								<div class="box-inner">
									<div class="author-image"><img src="<?php echo $agol['about_us_author_img']['url'];?>" alt="" /></div>
									<h6><?php echo $agol['about_us_author_name'];?></h6>
									<div class="designation"><?php echo $agol['about_us_author_designation'];?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="<?php echo $agol['about_us_right_img']['url'];?>" alt="" />
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Services Section -->
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
	<!-- End Services Section -->
	
	<!-- Video Section Two -->
	<section class="video-section" style="background-image: url(<?php echo $agol['vidoes_bg']['url'];?>)">
		<div class="auto-container">
			<div class="content">
				<h2>Drive Now <span>Pay Later with Easy</span></h2>
				<div class="text">
					<p><?php echo $agol['vidoes_description']?></p>
				</div>
				<a href="<?php echo $agol['vidoes_link']?>" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
			</div>
		</div>
	</section>
	<!-- End Video Section Two -->


	<!-- Services Section -->
	<section class="testimonial-section">
		<div class="icon-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="icon-two" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="icon-three" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><span class="theme-color">See what </span><br> our customers say</h2>
				<div class="text">Testimonial</div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
			<?php
	$args = array( 'post_type' => 'customerstestimonial', 'posts_per_page' => 10 );

	$loop = new WP_Query( $args );

	while ( $loop->have_posts() ) : $loop->the_post();?>

<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="image-outer">
								<div class="image">
								<?php the_post_thumbnail();?>
								</div>
								<span class="quote-icon flaticon-quote-2"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="author"><?php the_title(); ?></div>
							<?php
								$designation = get_post_meta($post->ID,'customers_designation',true);
								
							?>
							<div class="designation"><?php echo $designation ?></div>
							<div class="text"><?php the_content();?></div>
						</div>
					</div>
				</div>

	<?php endwhile;?>

?>

			</div>
		</div>
	</section>
	
	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
				
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3500" data-stop="100">0</span>+
								</div>
								<div class="counter-title">Total Certified Engineer</div>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="5000" data-stop="7300">0</span>+
								</div>
								<div class="counter-title">Happy Verified Client</div>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="250">0</span>+
								</div>
								<div class="counter-title">Award Winner</div>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2000" data-stop="110">0</span>+
								</div>
								<div class="counter-title">Total project Running</div>
							</div>
						</div>
					</div>
				
				</div>
				
			</div>				
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><span class="theme-color">Feature Work</span></h2>
				<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</div>
			</div>
		</div>
		<div class="outer-container clearfix">
			
			<!-- Featured Block -->
			<div class="featured-block col-lg-6 col-md-12 col-sm-12">
				<div class="inner-box">
					<div class="clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="<?php echo $agol['feature_work_One_img']['url']?>" alt="" />
								</div>
							</div>
						</div>
						
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<h5><a href="projects-detail.html"><?php echo $agol['feature_work_One_heading']?> </a></h5>
								<div class="text">
									<p><?php echo $agol['feature_work_One_description']?> </p>
								</div>
								<a class="read-more" href="projects-detail.html">Read More <span class="fa fa-long-arrow-right"></span></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Featured Block -->
			<div class="featured-block col-lg-6 col-md-12 col-sm-12">
				<div class="inner-box">
					<div class="clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="<?php echo $agol['feature_work_Two_img']['url']?>" alt="" />
								</div>
							</div>
						</div>
						
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<h5><a href="projects-detail.html"><?php echo $agol['feature_work_Two_heading']?> </a></h5>
								<div class="text">
									<p><?php echo $agol['feature_work_Two_description']?> </p>
								</div>
								<a class="read-more" href="projects-detail.html">Read More <span class="fa fa-long-arrow-right"></span></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>


			
			<!-- Featured Block -->
			<div class="featured-block col-lg-6 col-md-12 col-sm-12">
				<div class="inner-box">
					<div class="clearfix">
						
                        <!-- Content Column -->
						<div class="content-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<h5><a href="projects-detail.html"><?php echo $agol['feature_work_Three_heading']?> </a></h5>
								<div class="text">
									<p><?php echo $agol['feature_work_Three_description']?> </p>
								</div>
								<a class="read-more" href="projects-detail.html">Read More <span class="fa fa-long-arrow-right"></span></a>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="<?php echo $agol['feature_work_Three_img']['url']?>" alt="" />
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Featured Block -->
			<div class="featured-block col-lg-6 col-md-12 col-sm-12">
				<div class="inner-box">
					<div class="clearfix">
						
                        <!-- Content Column -->
						<div class="content-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<h5><a href="projects-detail.html"><?php echo $agol['feature_work_Four_heading']?> </a></h5>
								<div class="text">
									<p><?php echo $agol['feature_work_Four_description']?> </p>
								</div>
								<a class="read-more" href="projects-detail.html">Read More <span class="fa fa-long-arrow-right"></span></a>
							</div>
						</div>
                        
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-6 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="<?php echo $agol['feature_work_Four_img']['url']?>" alt="" />
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Clients Section -->
	<section class="clients-section">
		<div class="icon-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/wheel.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2><span class="theme-color">Low prices on </span> <br>big brands</h2>
				<div class="text">Since 2001, we’ve been making it as easy as possible to buy tyres online, whilst also offering a great <br> selection and fantastic savings.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
						<a href="#"><img src="<?php echo $agol['brand_img_One']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Two']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Three']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Four']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Five']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Six']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Seven']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
				<!-- Client Box -->
				<div class="client-box col-lg-3 col-md-6 col-sm-12">
					<div class="image">
					<a href="#"><img src="<?php echo $agol['brand_img_Eight']['url'] ?>" alt="" /></a>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Clients Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><span class="theme-color">The Glove Box Blog</span></h2>
				<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-single.html">How Often Do Oil Filters Need to be Replaced?</a></h4>
							<div class="text">It feels like we are facing a new storm every week with high-speed winds and flooding conditions.</div>
							<ul class="post-info">
								<li>William Stroe</li>
								<li>12 comment</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-single.html">How Often Do Oil Filters Need to be Replaced?</a></h4>
							<div class="text">It feels like we are facing a new storm every week with high-speed winds and flooding conditions.</div>
							<ul class="post-info">
								<li>William Stroe</li>
								<li>12 comment</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-single.html">How Often Do Oil Filters Need to be Replaced?</a></h4>
							<div class="text">It feels like we are facing a new storm every week with high-speed winds and flooding conditions.</div>
							<ul class="post-info">
								<li>William Stroe</li>
								<li>12 comment</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
<?php get_footer();?>