<?php include_once('functions.php'); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"><!--<![endif]-->
<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Responsable Grid System</title>

	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="<?php echo site_url('assets/images/apple-touch-icon-57x57.png'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('assets/images/apple-touch-icon-72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('assets/images/apple-touch-icon-114x114.png'); ?>">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">

	<script src="<?php echo site_url('assets/js/script-ck.js'); ?>"></script>

</head>

<body>

	<div id="container">
		<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

		<header id="worlds_birth">
					
			<div id="logo">
				
				<figure>
					
					<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('assets/images/logo.png'); ?>" alt="Responsable"></a>
				
				</figure>

				<a href="<?php echo site_url(); ?>">Responsable.</a>

				<p>A responsive html/css framework by <a href="http://abandon.ie">Abban Dunne</a>.</p>
			
			</div>

			<nav>
				
				<ul>
					
					<li><a href="<?php echo site_url(); ?>">Home</a></li>

					<li><a href="<?php echo site_url('usage'); ?>">Usage</a></li>
					
					<li><a href="<?php echo site_url('typography'); ?>">Typography</a></li>
					
					<li><a href="<?php echo site_url('grid'); ?>">Grid</a></li>
					
					<li class="download"><a href="#">Download</a></li>
				
				</ul>

			</nav>

			<div id="blurb">
				
				<h1><?php echo $page_heading; ?></h1>

				<p><?php echo $page_subheading; ?></p>

			</div>

			<?php if($current_page == ''): ?>

				<div id="cta">
					
					<div>
						<a class="button" href="#"><span class="icon-install"></span>Download</a>
					</div>

					<div>
						<a class="button alt" href="#"><span class="icon-github"></span> View on Github</a>
					</div>

				</div>

			<?php endif; ?>

	</header>