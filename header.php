<?php
/**
 * The Header for Green variation
 *
 * Displays all of the <head> section, breadcrumb, sidebar in left position
 * and everything up till <div id="content-container">
 *
 * @package Green Variation
 * @since	Available since Release 1.0
 */ 
$o=get_option(THEME_NAME.'_options'); 
 ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	<?php wp_head(); ?>
</head>
<body>
  <div id="main">
    <header id="header">
	<div id="logo">
		<h1><a href="<?php bloginfo('url'); ?>"><? echo get_bloginfo( 'name' ); ?></a></h1>
		<p><span><? echo get_bloginfo( 'description' ); ?></span></p>
	</div><? $args=theme_header_menu();
           echo wp_nav_menu($args);
            ?>
	<!--<div id="menu">
		<ul><?php //wp_list_pages("title_li=&child_of=$parent" ); ?>
			<li class="current_page_item"><a href="#"><span>Home</span></a></li>
			<li><a href="#"><span>Blog</span></a></li>
			<li><a href="#"><span>Photos</span></a></li>
			<li><a href="#"><span>About</span></a></li>
			<li><a href="#"><span>Links</span></a></li>
			<li><a href="#"><span>Contact</span></a></li>
		</ul>
	</div>-->
    </header>
    <hr />
<!-- end header -->
<!-- start page -->
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
