<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper clear">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="top-band"></div>
                <div class="business-info section-top clear">
                    
                    <div class="page-wrapper clear">
                    <?php dynamic_sidebar('top-l'); ?>
                    <?php dynamic_sidebar('top-r'); ?>
					</div>
                    
                </div>


					<!-- nav -->
					<nav class="nav clear" role="navigation">
    
                        <div class="page-wrapper clear">    
                        <!-- logo -->
				    <div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-clean.png" alt="Logo" class="full logo-img">
						</a>
                    </div>
					<!-- /logo -->
                           
                            <?php  add_custom_nav_menu('menu-1'); ?>
                 </div>
					</nav>
					<!-- /nav -->
					<section class="banner">
						<div class="p-wrap clear">
							<img class="p-l col-1-2 pad-t-20px" src="<?php echo get_template_directory_uri(); ?>/img/slider-1-car.png" />
							<header class="slide-1 p-l col-1-2 marg-t-50px">
								<h1 class="headline-1">
									Premium Window Tint
								</h1>
									<span class="headline-2">Armor One Stands Up To the<br> 
									Toughest Environments</span>
									<a class="txt-color-1 title-3" href="#">Get a Quote Now <i class="fa fa-caret-right"></i></a>
								</header>
						</div>
					</section>	
					<nav class="nav-2 color-3">
						<div class="p-wrap clear">
						<?php  add_custom_nav_menu('menu-2'); ?>
					</div>
					</nav>
			</header>
			<!-- /header -->
			
			<!-- mobile header -->
			<div class="hide-l show-m-and-below color-1">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-clean.png" alt="Logo" class="max-300px p-c pad-30px">
			<div class="color-3 nav-2">
				<ul>
					<li>
				<a class="">Call Us</a>
			</li>
				<li>
				<a class="">Get Directions</a>
			</li>
		</ul>
			</div>
			</div>


			
