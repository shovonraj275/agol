<?php get_header(); ?>
		
		<!-- markup start for blog area -->
		<article class="blog">
			<div class="container blog_information">
				
				<div class="col-sm-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="single_post">
						<h2><?php the_title() ?></h2>

						<p>
							<?php the_content(); ?>
						</p>	
					</div>
					<?php endwhile; ?>

					<?php else : ?>

					<div class="post">

						<h3><?php _e('404 Error&#58; Not Found', 'theme'); ?></h3>

					</div>

					<?php endif; ?>
					
				</div>
			</div>
		</article>
		<!-- markup end for blog area -->
		
<?php get_footer(); ?>
