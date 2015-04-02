<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="initial-scale=.95">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="bootstrap" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="http://fast.fonts.net/jsapi/a52cf8a8-88ce-41f3-acda-3405cc276ffe.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fontastic.s3.amazonaws.com/bYt7CMrDYr7nVsX6jBjtem/icons.css" rel="stylesheet">
		

		<?php wp_head(); ?>
		
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.panelSnap.js"></script>
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	</head>
	<body <?php body_class(); ?>>
	
		<header id="top-head">
			<a href="<?php bloginfo( 'url' ); ?>"><img class="logo" src="<?php bloginfo( 'template_url' ); ?>/img/lifestyle-logo.png" alt="Logo" width="auto" height="80px"></a>
			<div id="phone"><a href="tel:0291536111">(02) 9153 6111</a></div>
			<nav id="top-nav">
				<?php wp_nav_menu(array('menu' => 'Primary', 'container' => '')); ?>
			</nav>
		</header>