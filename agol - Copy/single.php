<?php get_header();?>


<!-- End Page Title -->

<!-- Blog Page Section -->
<section class="blog-page-section">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- News Block Two -->
				<div class="news-block-two col-lg-12 col-md-12 col-sm-12">
					<div class="inner-box">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- Content class="image featured" -->
						<article class="box post">
							<header>
								<h2><?php the_title() ?></h2>
								<p>Post by <a href="#"><?php the_author(); ?></a>Post In <a
										href="#"><?php the_category( ',' ); ?></a>Post at <a href="#">
										<?php the_date('Y-m-d'); ?></a></p>
							</header>
							<div class="image">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium  '); ?></a>
							</div>
							<?php the_excerpt(); ?>
							<p class="the_content">

							</p>
							<?php comments_template('',true); ?>


						</article>
						<?php endwhile; ?>

						<?php else : ?>

						<div class="post">

							<h3><?php _e('404 Error&#58; Not Found', 'theme'); ?></h3>

						</div>

						<?php endif; ?>
					</div>
				</div>





				<div class="btn-box text-center">
					<a href="#" class="theme-btn btn-style-two"><span class="txt">More Blog</span></a>
				</div>

			</div>
	</section>
	<!-- End Blog Page Section -->

	<!-- Guaranty Section -->
	<section class="guaranty-section style-two">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Guaranty Block -->
			<div class="guaranty-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
					style="background-image:url(images/resource/guaranty-1.jpg)">
					<h4>WANT TO TALK?</h4>
					<div class="text">Primus elite lectus tical at node. Porta commodo terminal forks sande. Nulla novum
						at novelle.</div>
					<a class="phone" href="tel:123-556-4321">CALL: (123) 556 4321</a>
				</div>
			</div>

			<!-- Guaranty Block -->
			<div class="guaranty-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
					style="background-image:url(images/resource/guaranty-2.jpg)">
					<h4>100% GUARANTEE!</h4>
					<div class="text">Primus elite lectus tical at node. Porta commodo terminal forks sande. Nulla novum
						at novelle.</div>
					<a class="learn theme-btn" href="#">Learn More</a>
				</div>
			</div>

			<!-- Guaranty Block -->
			<div class="guaranty-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
					style="background-image:url(images/resource/guaranty-3.jpg)">
					<h4>REPRESENT 24 CITIES</h4>
					<div class="text">Primus elite lectus tical at node. Porta commodo terminal forks sande. Nulla novum
						at novelle.</div>
					<a class="learn theme-btn" href="#">Learn More</a>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Guaranty Section -->

<!-- Tyre Section -->
<section class="tyre-section style-two">
	<div class="auto-container">
		<div class="inner-container">
			<div class="clearfix">

				<!-- image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/tyre.png" alt="" />
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Michelin Primacy 4</h3>
						<div class="text">Michelin have developed the Primacy 4, successor to the extremely popular
							Primacy 3, for high levels of safety and longevity.</div>
						<ul>
							<li>// Top wet braking performance </li>
							<li>// Safety throughout the life of the tyre</li>
							<li>// High performance rubber compound</li>
						</ul>
						<a href="#" class="tyre-btn theme-btn">More about this Michelin tyre</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- End Tyre Section -->

<?php get_footer();?>