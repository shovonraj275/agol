<?php global $agol; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?></title>
<!-- Stylesheets -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;700;800;900&family=Roboto:wght@300;400;500;700;900&family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon"> -->

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>

</style>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<?php wp_head();?>  
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-one">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left clearfix">
						<ul class="list">
							<li>Time : <?php echo $agol['start_time'];?>-<?php echo $agol['end_time'];?> | <?php echo $agol['working_hour'];?></li>
						</ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right clearfix">
						<ul class="page-nav">
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contacts</a></li>
						</ul>
						<!--Language-->
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">ENG &nbsp;<span class="icon fa fa-angle-down"></span></a>
                        	<ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                <li><a href="#">English</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Hindi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<!-- <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div> -->
                        <?php theme_prefix_the_custom_logo() ?>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						
                        
<?php wp_nav_menu(array(

'theme_location'=>'header-menu',
'menu'                 => '',
    'container'            => 'nav',
    'container_class'      => 'main-menu navbar-expand-md',
    'container_id'         => '',
    'container_aria_label' => '',
    'menu_class'           => 'menu',
    'menu_id'              => '',
    'echo'                 => true,
    'fallback_cb'          => 'wp_page_menu',
    'before'               => '',
    'after'                => '',
    'link_before'          => '',
    'link_after'           => '',
    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'item_spacing'         => 'preserve',
    'depth'                => 0,
    'walker'               => '',



)); ?>
                        
                        <!-- <nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Home Page 01</a></li>
											<li><a href="index-2.html">Home Page 02</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">About Us</a>
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="staff.html">Our Staff</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="service.html">Services</a></li>
											<li><a href="service-detail.html">Services Detail</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="projects.html">Projects</a></li>
											<li><a href="projects-detail.html">Projects Detail</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
							</div>
							
						</nav> -->
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
						
							<!-- Number Box -->
							<div class="number-box">
								<a class="phone" href="tel:<?php echo $agol['mobile_number'];?>"><?php echo $agol['mobile_number'];?><span class="icon fa fa-phone"></span></a>
							</div>
							
							<!--Cart Box-->
							<div class="cart-box">
								<div class="dropdown">
									<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-cart-3"></span><span class="total-cart">2</span></button>
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

										<div class="cart-product">
											<div class="inner">
												<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
												<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/post-thumb-3.jpg" alt="" /></div>
												<h3><a href="shop-single.html">Flying Ninja</a></h3>
												<div class="quantity-text">Quantity 1</div>
												<div class="price">$99.00</div>
											</div>
										</div>
										<div class="cart-product">
											<div class="inner">
												<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
												<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/resource/post-thumb-2.jpg" alt="" /></div>
												<h3><a href="shop-single.html">Patient Ninja</a></h3>
												<div class="quantity-text">Quantity 1</div>
												<div class="price">$99.00</div>
											</div>
										</div>
										<div class="cart-total">Sub Total: <span>$198</span></div>
										<ul class="btns-boxed">
											<li><a href="shoping-cart.html">View Cart</a></li>
											<li><a href="checkout.html">CheckOut</a></li>
										</ul>

									</div>
								</div>
							</div>
							
							<!--Search Box-->
							<div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="blog.html">
													<div class="form-group">
														<input type="search" name="field-name" value="" placeholder="Search Here" required>
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	<!-- Banner Section -->
    <section class="banner-section">
		<div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(<?php echo $agol['slider_img_one']['url'];?>)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1><?php echo $agol['slider_heading_one'];?> <span><?php echo $agol['slider_sub_heading_one'];?></span></h1>
						<div class="text banner_content"><?php echo $agol['slider_sub_description_one'];?> </div>
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group clearfix">
									<span class="icon flaticon-mail"></span>
									<input type="email" name="email" value="" placeholder="Type your email" required>
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
								</div>
								
								<div class="form-group">
                                    <div class="check-box">
										<input type="checkbox" name="remember-password" id="type-1"> 
										<label for="type-1">I have read agreement tearm and policy </label>
									</div>
                                </div>
								
							</form>
						</div>
						
                    </div>  
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(<?php echo $agol['slider_img_two']['url'];?>)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1><?php echo $agol['slider_heading_two'];?><span><?php echo $agol['slider_sub_heading_two'];?></span></h1>
						<div class="text banner_content"><?php echo $agol['slider_sub_description_two'];?></div>
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group clearfix">
									<span class="icon flaticon-mail"></span>
									<input type="email" name="email" value="" placeholder="Type your email" required>
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
								</div>
							</form>
						</div>
						
                    </div>  
                </div>
            </div>
			
			<!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(<?php echo $agol['slider_img_three']['url'];?>)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1><?php echo $agol['slider_heading_three'];?><span><?php echo $agol['slider_sub_heading_three'];?></span></h1>
						<div class="text banner_content"><?php echo $agol['slider_sub_description_three'];?></div>
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group clearfix">
									<span class="icon flaticon-mail"></span>
									<input type="email" name="email" value="" placeholder="Type your email" required>
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
								</div>
							</form>
						</div>
						
                    </div>  
                </div>
            </div>
			
        </div>
    </section>
    <!-- End Banner Section -->
