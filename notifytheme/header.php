<?php 
	$url_t="http://notify/wp-content/themes/notifttheme";
?>
<!DOCTYPE html>
<html lang="ru-RU">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>first teamwork</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Vadim D.">
		<link rel="shortcut icon" href="<?php echo $url_t ?>/favicon.ico" type="icon/x-icon">
		<link rel="icon" href="<?php echo $url_t ?>/favicon.ico" type="icon/x-icon">
		<!-- build:css css/vendor.min.css -->
		<!-- bower:css-->
		<link rel="stylesheet" href="<?php echo $url_t ?>/bower/normalize.css/normalize.css">
		<!-- endbower -->
		<!-- endbuild -->
		<!-- build:css fonts/fonts.min.css -->
		<!-- endbuild -->
		<!-- build:css css/main.min.css -->
		<link rel="stylesheet" href="<?php echo $url_t ?>/css/main.css">
		<!-- endbuild -->
		<!-- build:js js/modernizr.min.js -->
		<script src="<?php echo $url_t ?>/bower/modernizr/modernizr.js"></script>
		<!-- endbuild -->
		<link rel="stylesheet" href="<?php echo $url_t ?>/css/main.css">
	</head>
	<body>
		<div class="wrapper">
			<header data-parallax="scroll" data-image-src="images/bg/header.png" class="page-header parallax-window">
				<div class="container">
					<div class="title">

						<div class="title__text">
							<h2><?php bloginfo( 'name' ); ?><span>.</span></h2></div>
						<div class="title__descr">
							<p><?php bloginfo( 'description' ); ?></p>
						</div>
						<div class="socials">
							<ul class="socials__list">
								<li class="socials__item"><a href="#" class="socials__link socials__link--apple">apple</a></li>
								<li class="socials__item"><a href="#" class="socials__link socials__link--android">android</a></li>
								<li class="socials__item"><a href="#" class="socials__link socials__link--windows">windows</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>