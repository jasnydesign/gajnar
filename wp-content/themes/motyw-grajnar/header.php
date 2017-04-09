<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">




		<link href="<?php echo get_template_directory_uri(); ?>///www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <!-- Flaticons css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">     


        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/custom-slider/css/preview.css" type="text/css" media="screen" />


        <!-- CSS Color Plate -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/multicolor-css/skype-color.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/multicolor-css/red-color.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/multicolor-css/green-color.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/multicolor-css/blue-color.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
		<!-- modernizr css -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Google Analytics JS -->
        <script src="http://www.digitalcenturysf.com/google_analytics.js"></script>


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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo get_template_directory_uri(); ?>/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--
        <div class="demo-panel-setting-area">
            <div class="cross-button  wow rollIn bounceInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInLeft;"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
            <h3>Color Plate: </h3>
            <div class="color-scheme-area">
                <span class="skype-color"></span>
                <span class="red-color"></span>
                <span class="green-color"></span>
                <span class="blue-color"></span>
            </div>
        </div>
        -->
        <header>
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="header-top-left">
                                <ul>
                                    <li><i class="fa fa-globe" aria-hidden="true"></i> Welcome to Viktor  Financial Services, we have over 50 years of expertise</li>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="header-top-right">
                                <ul>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> Info@viktor.com</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>  + 123 456789</li>                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="site logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
                            <div class="main-menu">
                                
                                <?php html5blank_nav(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
									<?php html5blank_nav(); ?>
                                </nav>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end here -->