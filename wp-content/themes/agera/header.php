<?php 

/**
 * @package WordPress
 * @subpackage Agera
 */
 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php $mp_options = agera_get_global_options(); ?> 
    	<meta charset="UTF-8" />   	
		<?php 
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head(); ?>
		
		
	</head>
	<style>
	#slogan h1 a{width:260px !important;}
	</style>

	<body <?php body_class(); ?>>
		
		<div id="main-container">
			<div id="header-container">
				<div id="header">
					<?php if(has_nav_menu('main')) { 
	   					 wp_nav_menu(array( 'theme_location' => 'main', 'container' => '', 'menu_id' => 'nav' )); 
					} else {
						echo '<ul id="nav">';
							wp_list_pages( 'title_li=' ); 
						echo '</ul>';
					} ?> <!-- end menu --> 
	
	     			 <div id="slogan">
	    	  			<?php agera_add_logo(); ?>
	  			    	<div style="float:left;"><a href="http://my-yacht-charter.com/charter-motor-yacht/"><img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/m1.png"></a></div>
	  			    	<div style="float:left;"><a href="http://my-yacht-charter.com/charter-sail-yacht/"><img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/s1.png"></a></div>  
	  				</div> <!-- end slogan --> 
	  			
	   			</div> <!-- end header -->
			</div> <!-- end header-container -->