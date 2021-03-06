<?php

/**
 * @package WordPress
 * @subpackage Agera
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<?php $mp_options = agera_get_global_options(); ?>
    	<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
	</head>
	<style>
	#slogan h1 a{width:260px !important;}
	#slogan h1 {font-size:17px !important;}
	

	</style>

	<body <?php body_class(); ?>>

		<div id="main-container">
			<div id="header-container">
				<div id="header">
					<?php if(has_nav_menu('main')) {
	   					 wp_nav_menu(array( 'theme_location' => 'main', 'container' => '', 'menu_id' => 'nav' ));
					} else {
						wp_nav_menu(array( 'container' => '', 'menu_id' => 'nav' ));
					} ?> <!-- end menu -->

	     			 <div id="slogan">
	    	  			<?php agera_add_logo(); ?>
	  			    	<!-- <div id="log" style="float:left;"><a href="http://my-yacht-charter.com/charter-motor-yacht/"><img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/mm.png"></a></div>
	  			    	<div id="log" style="float:left;"><a href="http://my-yacht-charter.com/charter-sail-yacht/"><img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/s.png"></a></div>   -->
	  				</div> <!-- end slogan -->
	   			</div> <!-- end header -->
	   			<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-42916409-1', 'my-yacht-charter.com');
            ga('send', 'pageview');

          </script>
			</div> <!-- end header-container -->
