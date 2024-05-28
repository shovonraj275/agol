	<!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/2.jpg)">
		<div class="auto-container">
		
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">
							<?php dynamic_sidebar('footer_one'); ?>
							<?php dynamic_sidebar('footer_two'); ?>
							<?php dynamic_sidebar('footer_three'); ?>
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-5 col-md-12 col-sm-12">
                        <div class="row clearfix">
						<?php dynamic_sidebar('footer_four'); ?>
						<?php dynamic_sidebar('footer_five'); ?>
                          
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="clearfix">
					<div class="pull-left">
						<div class="copyright">Copyright <?php echo date("Y")?>, All Right Reserved</div>
					</div>
					<div class="pull-right">
						<div class="logo">
							<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer();?>
</body>
</html>