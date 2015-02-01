<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- css here -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Yellowtail|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
		
		<!-- scripts here -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<!-- <script src="<?php bloginfo('template_url'); ?>/scripts/buttons.js"></script> -->

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<div class="container" id="jumbotron-container">
		<div class="jumbotron" id="jumbo">
			<div id="name">
				<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
				<p><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('description'); ?></a></p>
			</div>
		</div>
		
	</div> <!-- end jumbotron container -->
	
	
	<div class="container">
		<div class="row">
			<!--
			<div class="col-md-2">
				<div id="nav-col">
					<?php
			            wp_nav_menu( array(
			                'menu'              => 'main',
			                'theme_location'    => 'main',
			                'depth'             => 2,
			                'container'         => '',
			                'container_class'   => '',
			                'container_id'		=> '',
			                'menu_class'        => 'nav nav-pills nav-stacked',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
				</div>
				
				<!--	
				<div id="nav-col">
					<h3>Category</h3>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="mari-index.html">Seasons</a></li>
						<li><a href="#">Wedding</a></li>
						<li><a href="#">Gift</a></li>
					</ul>
					<h3>Flower type</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">プリザーブド</a></li>
						<li><a href="#">アーティフィシャル</a></li>
					</ul>
					<h3>How about this?</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">リース</a></li>
						<li><a href="#">アレンジメント</a></li>
						<li><a href="#">アクセサリー</a></li>
					</ul>
					<h3>Price</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">0 ~ 3000 yen</a></li>
						<li><a href="#">3000 ~ 6000 yen</a></li>
						<li><a href="#">6000 ~ 9000 yen</a></li>
						<li><a href="#">9000 ~ yen</a></li>
					</ul>
				</div>
				-->
			<!--</div> <!-- end nav col -->
