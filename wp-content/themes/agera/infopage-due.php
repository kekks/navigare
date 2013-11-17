<?php

/*
 * Template Name: Info2.1
 * Description: A Page Template with a darker design.
 */
 
get_header();	
$mp_option = agera_get_global_options();
$page_id = get_the_ID();
	
$post_values = get_post_custom($page_id);
if( isset($post_values['page_background'][0]) )
	$page_data['background'] = $post_values['page_background'][0];
else
	$page_data['background'] = '';

?>

<style>
	#content {
		background: url(http://my-yacht-charter.com/wp-content/uploads/2013/06/background-about-us-resized.jpg);
		background-size: cover;
    background-position: bottom center;
	}
	
	.infopage{
	  opacity:0.9;
	  overflow-x:hidden;
	}	
	
</style>

<div id="content" role="main">
	<div class="page-container">
		<div class="page-content infopage">
<iframe width="110%" height="480" src="http://my-yacht-charter.com/nuovainfopage/index.html"</iframe>
  		</div>
    </div> <!-- end page-content -->
</div><!-- end content -->
<?php get_footer(); ?>
</body>
</html>
