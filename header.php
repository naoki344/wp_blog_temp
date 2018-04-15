<!DOCTYPE html>
<html lang="jp">
	<head>
			<meta charset="utf-8">
		 <?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<!--div class="scrollToTop"><i class="icon-up-open-big"></i></div-->
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">
							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Worthy"></a>
							</div>
							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="index.html">Naograph</a></div>
								<div class="site-slogan">This page is provided by <a target="_blank" href="http://htmlcoder.me">Naograph</a></div>
							</div>
						</div>
						<!-- header-left end -->
					</div>
					<div class="col-md-8">
						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">
							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">
								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<!-- Toggle get grouped for better mobile display -->
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                           <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ) );
                            ?>
										</div>
									</div>
								</nav>
								<!-- navbar end -->
							</div>
							<!-- main-navigation end -->
						</div>
						<!-- header-right end -->
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
