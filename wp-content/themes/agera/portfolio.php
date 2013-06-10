<?php
	/**
	* Porfolio
	*
	* Template Name: Porfolio
	* @package WordPress
	* @subpackage Agera
	*/	

get_header(); 
global $page_id;
$port_categories = '';
$page_id = get_the_ID();

if(isset($mp_option['agera_portfolio']) && isset($mp_option['agera_portfolio']['category_portfolio_' .$page_id])) {
	foreach($mp_option['agera_portfolio']['category_portfolio_' .$page_id] as $key => $option) {
		$port_categories .= $key . ', ';
	}
}

$post_values = get_post_custom($page_id);
if( isset($post_values['thumb_width'][0]) )
	$page_data['thumb_width'] = $post_values['thumb_width'][0];
else
	$page_data['thumb_width'] = '329';
	
if( isset($post_values['item_number'][0]) )
	$page_data['item_number'] = $post_values['item_number'][0];
else
	$page_data['item_number'] = '30';

?>
<div id="content" class="portfolio-cont" role="main">
<!-- Display posts -->

<div class="portfolio flip" data-item-number="<?php echo $page_data['item_number']; ?>">


<style>
	#header-container {
		height: 139px;
		border-bottom: 1px solid #AAAAAA; 
		box-shadow: 0px 2px 21px 2px rgba(100, 100, 100, 0.5);
	}
	
</style>

<?php
$categories = '';
$categories .= '<div class="mpc-portfolio-categories"><ul>'; 
$categories .= '<li class="active" data-link="all"><a href="">All</a></li>';

if(isset($mp_option['agera_portfolio']['category_portfolio_' .$page_id])) {
	foreach($mp_option['agera_portfolio']['category_portfolio_' .$page_id] as $key => $option){ 
		$categories .= '<li data-link="'.$key.'">';
		$categories .= 	'<a href="" title="'.$key.'">'.$option.'</a>';
		$categories .= '</li>';
	}		
}

$categories .= '</ul></div>';  

?>

<script type="text/javascript">
	var data = '<?php echo $categories; ?>';
	jQuery('#slogan').after(data);
</script>

<style>
	.portfolio-item {
		min-width: <?php echo $page_data['thumb_width'];?>px;
	}
</style>

  
   <div class="portfolio-content"> 
				<?php
				wp_reset_query();
				$my_query = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query(array(
						'post_type' => 'portfolio',
						'portfolio_cat' => $port_categories,
						'paged' => $paged,
						'showposts' => ''
					));
				$counter = 0;
				$row_counter = 0;
				while ($wp_query->have_posts()) {
					$wp_query->the_post();
					$counter++; 
					$row_counter++;
					$post_meta = get_post_custom($post->ID);
					if(isset($post_meta['project_background'][0]))
						$page_data['background'] = $post_meta['project_background'][0];
					else 
						$page_data['background'] = '#2e3971';	
						
					if(isset($post_meta['lightbox_enable'][0]) && $post_meta['lightbox_enable'][0] == "on") {
						$page_data['lightbox'] = true;
					
						if(isset($post_meta['lightbox_src'][0]))
							$page_data['lightbox_src'] = $post_meta['lightbox_src'][0];
						else 
							$page_data['lightbox_src'] = '';
							
						if(isset($post_meta['caption'][0]))
							$page_data['caption'] = $post_meta['caption'][0];
						else 
							$page_data['caption'] = '';
							
						if(isset($post_meta['gallery'][0]))
							$page_data['gallery'] = $post_meta['gallery'][0];
						else 
							$page_data['gallery'] = '';		
					}				

					$categories = get_the_terms($post->ID, 'portfolio_cat');
					if(isset($categories) && $categories != ''){
						$category_slug = '';
						foreach($categories as $category) {
							$category_slug .= $category->slug.' '; 
						}
					}
						
					?>
						<div id="item_<?php echo $counter; ?>" data-type="<?php echo $category_slug; ?>" class="portfolio-item item-<?php echo $counter; ?> <?php echo $category_slug; ?>"><?php agera_portfolio_columns("portfolio-full", $page_data); ?></div>
					<?php	
				} ?>
				
				<div class="clear"></div>
			</div> <!-- /portfolio-content -->   
</div><!-- end content -->
</div>
	<?php get_footer(); ?>
</body>
</html>
