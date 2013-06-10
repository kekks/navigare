<?php
/*
 * Template Name: Home
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...
 
get_header();	
$mp_option = agera_get_global_options();
$page_id = get_the_ID();
//  
// $post_values = get_post_custom($page_id);
// if( isset($post_values['page_background'][0]) )
//  $page_data['background'] = $post_values['page_background'][0];
// else
//  $page_data['background'] = '';
// 
?>

<style>
	.wrapper {
		width:100%;
		height:100%;
		background:black;
	}
	h1{
    margin-top:50%;
    color:white !important;
    text-shadow: 2px 2px 2px #000;
	}
	.motor {
	  width:50%;
	  height:100%;
	  float:left;
	  background:blue;
	  opacity:1;
	}
	
  img:hover {
  opacity:0.4;
  filter:alpha(opacity=40); /* For IE8 and earlier */
  }
	
  .sail {
	  width:50%;
	  height:100%;
	  float:right;
	  background:green;
	}
</style>

<div class="wrapper">
  <div class="motor">
    <h1>Charter a Motorboat</h1> 
    <img src="http://my-yacht-charter.com/wp-content/uploads/2013/04/J3I2621_051.jpg">
  </div>
  
  <div class="sail">
  <h1>Charter a Sailboat</h1>
  </div>

</div>
<?php get_footer(); ?>
</body>
</html>
