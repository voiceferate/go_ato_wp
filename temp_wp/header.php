<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php $filePath = get_template_directory_uri(); ?>
	<meta charset="<?php bloginfo('charset'); ?> ">
	<!-- <base href="/"> -->

	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<link rel="icon" href="<?php echo $filePath ?>/assets/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $filePath ?>/assets/img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#2988f1">
	<!-- Custom Browsers Color End -->
	<link rel="stylesheet" href="<?php echo $filePath ?>/assets/css/hamburgers.min.css">
	<link rel="stylesheet" href="<?php echo $filePath ?>/assets/css/magnific-popup.css">
	

	<!-- <link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Sans+Caption" rel="stylesheet"> -->

	<!-- font-family: 'PT Sans', sans-serif
	font-family: 'PT Sans Caption', sans-serif -->

<?php wp_head(); ?>
</head>

<body>

	<!-- Custom HTML -->
	<div id="p_prldr">
		<div class="contpre">
			<span class="svg_anm"></span>
			<br>Зачекайте<br>
			<small>завантажуємо</small>
		</div>
	</div>
	<header class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-12 offset-md-0 offset-lg-1 logo">
				<a href="<?php home_url(); ?>">
					<div>
						<img class="img-width img-responsive" src="<?php echo $filePath ?>/assets/img/ato_logo.png" alt="">
					</div>
				</a>
			</div>
			<div class="col-lg-9 col-md-12 navigation">
				<div class="row no-gutters navigation-top">
					<div class="col-11 col-sm-11 col-xs-11 nav-menu">
						<?php wp_nav_menu([
							'theme_location' => 'top',
							'menu_class' => 'header-mnu',
							'container' => 'null'
						]); ?>
					</div>
					<div class=" col-sm-11 col-10 hamb">
						<div class="hamburger hamburger--collapse">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
					<ul class="col-2 col-sm-1 social">
						<li class="social-item"><a href="https://www.facebook.com/groups/713855062085004/" target="_blank" class="social-link"><img src="<?php echo $filePath ?>/assets/img/facebook-square.svg" alt=""></a></li>
					</ul>
				</div>
				<ul class="row main-nav">
					<li class="col-12 offset-lg-1 col-lg-3 col-md-4 col-sm-4 mfp-src" data-mfp-src="#about"><p>Про нас</p></li>
					<li class="col-12 col-sm-4 mfp-src" data-mfp-src="#activities"><p>Наша робота</p></li>
					<li class="col-12 col-sm-4"><a href="<?php 	$category_id = get_cat_ID( 'Без категорії' ); echo get_category_link( $category_id ); ?>">Новини</a></li>
				</ul>
			</div>
		</div>
	</header>


