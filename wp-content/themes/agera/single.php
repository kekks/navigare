<?php

	/**
	* Single Page
	*
	* @package WordPress
	* @subpackage Agera
	*/	
	
	get_header();

	$post_type = $post->post_type;
		
?>
<style>
  .mpc-button {
  font-weight: bold;
  cursor: pointer;
  padding: 5px 10px;
  font-size: 14px;
  display: inline-block;
  margin: 0px 10px 10px 0px;
  background: #2e3971!important;
  color: #FFFFFF!important;
  }
</style>

<div id="content" role="main">
<!-- Display posts -->
<div class="posts-container">


<?php 
$postNumber = 0; 
if(have_posts()) {
	while(have_posts()) {
		the_post();
		$post_meta = '';
		
		$post_meta = get_post_custom($post->ID);
		if(isset($post_meta['full_width_asset'][0]))
			$page_data['asset'] = $post_meta['full_width_asset'][0];
		
		if(isset($post_meta['client'][0]))	
			$page_data['client'] = $post_meta['client'][0]; 
// 		else
// 			$page_data['client'] = '';
// 			
// 		if(isset($post_meta['tools'][0]))	
// 			$page_data['tools'] = $post_meta['tools'][0]; 
// 		else
// 			$page_data['tools'] = '';
// 			
// 		if(isset($post_meta['copyright'][0]))	
// 			$page_data['copyright'] = $post_meta['copyright'][0]; 
// 		else
// 			$page_data['copyright'] = '';
// 			
// 		if(isset($post_meta['share'][0]))	
// 			$page_data['share'] = $post_meta['share'][0]; 
// 		else
// 			$page_data['share'] = '0';
// 			
// 		$class_like = "mpc-like";
// 		
// 		if(!$page_data['share']) 
// 			$class_like .= "-big";

//  -----------------CUSTOM


	if(isset($post_meta['authentic_boat'][0]))	
				$page_data['authentic_boat'] = $post_meta['authentic_boat'][0]; 
			else
				$page_data['authentic_boat'] = '';

if(isset($post_meta['visualizzascheda'][0]))	
			$page_data['visualizzascheda'] = $post_meta['visualizzascheda'][0]; 
		else
			$page_data['visualizzascheda'] = '';
			
if(isset($post_meta['visualizzasocial'][0]))	
			$page_data['visualizzasocial'] = $post_meta['visualizzasocial'][0]; 
		else
			$page_data['visualizzasocial'] = '';			


		if(isset($post_meta['promo_message'][0]))	
					$page_data['promo_message'] = $post_meta['promo_message'][0]; 
				else
					$page_data['promo_message'] = '';
				
				
				if(isset($post_meta['promo_color'][0]))	
							$page_data['promo_color'] = $post_meta['promo_color'][0]; 
						else
							$page_data['promo_color'] = '';				


if(isset($post_meta['testohome'][0]))	
			$page_data['testohome'] = $post_meta['testohome'][0]; 
		else
			$page_data['testohome'] = '';

if(isset($post_meta['boatlenght'][0]))	
			$page_data['boatlenght'] = $post_meta['boatlenght'][0]; 
		else
			$page_data['boatlenght'] = '';
			
// if(isset($post_meta['beam'][0]))	
// 			$page_data['beam'] = $post_meta['beam'][0]; 
// 		else
// 			$page_data['beam'] = '';

if(isset($post_meta['builder'][0]))	
			$page_data['builder'] = $post_meta['builder'][0]; 
		else
			$page_data['builder'] = '';
			
if(isset($post_meta['model'][0]))	
			$page_data['model'] = $post_meta['model'][0]; 
		else
			$page_data['model'] = '';
			
if(isset($post_meta['year'][0]))	
			$page_data['year'] = $post_meta['year'][0]; 
		else
			$page_data['year'] = '';
			
if(isset($post_meta['guestcabins'][0]))	
			$page_data['guestcabins'] = $post_meta['guestcabins'][0]; 
		else
			$page_data['guestcabins'] = '';

if(isset($post_meta['crew'][0]))	
			$page_data['crew'] = $post_meta['crew'][0]; 
		else
			$page_data['crew'] = '';

if(isset($post_meta['base'][0]))	
			$page_data['base'] = $post_meta['base'][0]; 
		else
			$page_data['base'] = '';
			
if(isset($post_meta['weeklyrate'][0]))	
			$page_data['weeklyrate'] = $post_meta['weeklyrate'][0]; 
		else
			$page_data['weeklyrate'] = '';
		
		
if(isset($post_meta['pdfbutton'][0]))	
					$page_data['pdfbutton'] = $post_meta['pdfbutton'][0]; 
				else
					$page_data['pdfbutton'] = '';
						

// ------------END CUSTOM
		

			?>	
		<article class="mpc-post">
			
			<?php 
			$type = '';
			
			if( isset($page_data['asset']) && $page_data['asset'] != '') { 
				$asset = $page_data['asset'];
				$search = preg_match('/.(jpg|JPG|gif|GIF|png)/', $asset);
				if($search == 1) {
					$type = 'image';
					$search = 0;
				}
				$search = preg_match('/.(vimeo)./', $asset);
				
				if($search == 1) {
					$type = 'vimeo-video';
					$search = 0;
				}
				
				$search = preg_match('/.(youtu)/', $asset);
				
				if($search == 1) {
					$type = 'youtube-video';
					$search = 0;
				}
				
				$search = substr($asset, 0, 1);

				if($search == '[') {
					$type = 'shortcode';
					$search = 0;
				}
				
				//echo "TYPE = ".$type;
				if($type == 'image') { ?>			
					<img src="<?php echo $asset ?>" class="post-asset"/>
				<?php } elseif ($type == 'vimeo-video') { ?>
					<iframe src="<?php echo $asset ?>?color=F9625B" width="100%" height="100%"></iframe>
				<?php } elseif ($type == 'youtube-video') { ?>
					<iframe width="100%" height="100%" src="<?php echo $asset ?>?rel=0" frameborder="0" allowfullscreen></iframe>
				<?php } elseif ($type == "shortcode") {
					echo do_shortcode($asset);
				} ?>
			<?php } elseif (has_post_thumbnail()) {  ?>
				<div class="post-image">
					<?php the_post_thumbnail(); ?>	
					
					<?php if($page_data['promo_message'] != ""):?>
						<div class="corner-ribbon top-right <?php echo $page_data['promo_color'];?>"><?php echo $page_data['promo_message'];?></div>
					<?php endif;?>
					
				</div>
			<?php } ?>
			<div class="post-content">
				<h1 class="mpc-post-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<aside class="post-meta">
				<div class="meta-content">
<?php if($page_data['visualizzascheda'] == 'off' && $page_data['visualizzascheda'] != 'on') { ?>		
<?php if($post_type == 'portfolio') { ?>

<?php if($page_data['authentic_boat'] == 'on' && $page_data['authentic_boat'] != 'off'):?>
		
		<div class="certified_boat">Bollo di autencitià</div>
			
<?php endif; ?>          		

          <h2>Boat info:</h2>
<?php } ?>          

					<ul>
						<?php if($page_data['boatlenght'] != '') { ?>
							<li><em>Length:</em> <?php echo $page_data['boatlenght']; ?></li>
						<?php } ?>
						
						<!-- 
<?php if($page_data['beam'] != '') { ?>
							<li><em>Beam:</em> <?php echo $page_data['beam']; ?></li>
						<?php } ?>
 -->
						
						<?php if($page_data['builder'] != '') { ?>
							<li><em>Builder:</em> <?php echo $page_data['builder']; ?></li>
						<?php } ?>
						
						<?php if($page_data['model'] != '') { ?>
							<li><em>Model:</em> <?php echo $page_data['model']; ?></li>
						<?php } ?>
						
						<?php if($page_data['year'] != '') { ?>
							<li><em>Built:</em> <?php echo $page_data['year']; ?></li>
						<?php } ?>
						
						<?php if($page_data['guestcabins'] != '') { ?>
							<li><em>Guest cabin:</em> <?php echo $page_data['guestcabins']; ?></li>
						<?php } ?>
						
						<?php if($page_data['crew'] != '') { ?>
							<li><em>Crew:</em> <?php echo $page_data['crew']; ?></li>
						<?php } ?>
						
						<?php if($page_data['base'] != '') { ?>
							<li><em>Base:</em> <?php echo $page_data['base']; ?></li>
						<?php } ?>
						
						<?php if($page_data['weeklyrate'] != '') { ?>
							<li><em>From:</em> <?php echo $page_data['weeklyrate']; ?></li>
						<?php } ?>
							
						
				<!-- 
						<?php if($post_type != 'portfolio') { ?>
							<li><em>Categories:</em> <?php echo get_the_category_list( ', '); ?></li>
						<?php } ?>
						
						<?php if(get_the_tag_list() != "") { ?>
							<li><em>Tags:</em> <?php echo get_the_tag_list('', ', '); ?></li>
						<?php } ?>
						
						<?php if($page_data['boatlenght'] != '') { ?>
							<li><em>Lenght:</em> <?php echo $page_data['boatlenght']; ?></li>
						<?php }
						if($page_data['tools'] != '') { ?>
							<li><em>Tools:</em> <?php echo $page_data['tools']; ?></li>
						<?php } ?>
						
						<?php if($page_data['copyright'] != '') { ?>
							<li><em>Artwork By:</em> <?php echo $page_data['copyright']; ?></li>
						<?php } ?>
 -->
						
						<!-- 
						<li class="<?php echo $class_like; ?>"><em>Like:</em> <?php  if( function_exists('zilla_likes') ) zilla_likes(); ?></li>
						
 -->
<!-- 
						<?php if($page_data['share']) { ?>
							<li><em>Share:</em> <?php if( function_exists('zilla_share') ) zilla_share(); ?></li>
						<?php } ?>
 -->

					</ul>
<?php if($post_type == 'portfolio') { ?>					
<p><a class="mpc-button mpc-button-1" href="mailto:info@my-yacht-charter.com?Subject=Info about <?php the_title(); ?>" style="color:white !important;margin-top:10px;">Ask for availability</a></p>
<?php } ?>

<?php if($page_data['pdfbutton'] != '') { ?>
	<p><a class="mpc-button mpc-button-1" href="<?php echo $page_data['pdfbutton']; ?>"  style="color:white !important;margin-top:10px;" target="_blank">Download pdf</a></p>
<?php } ?>

					
	<?php } ?>

          <h2>Share:</h2>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_16x16_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_pinterest_share"></a>
<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51a3c5dd5b9d5d7f"></script>
<!-- AddThis Button END -->

<div id="port-nav">
						<!-- <span class="previous-container">
					           <?php previous_post_link('<span class="previous-post"></span> %link', 'Previous',  TRUE, ' ','portfolio_cat') ;?>
					         </span>
					         <span class="next-container">
					           <?php next_post_link('%link <span class="next-post"></span>', 'Next', TRUE, ' ','portfolio_cat') ;?>
					         </span> -->

						<span class="previous-container">
					           <?php previous_post_link('%link <span class="next-post"></span>', 'Next', TRUE, ' ','portfolio_cat') ;?>
					         </span>
					         <span class="next-container">
					           <?php next_post_link('<span class="previous-post"></span> %link', 'Previous',  TRUE, ' ','portfolio_cat') ;?>
					         </span>



</div>
				</div>
			</aside>
			<div class="post-comments">
				<?php comments_template('', false); ?>
	    	</div><!-- post_comments -->  
	    </article><!-- end mpc-post -->
    <?php } ?>
    <div id="post_navigation">
    	<?php wp_link_pages(); ?> 
    </div>
    <!-- end post_navigation -->
    <?php } else { ?>
    	<article id="post-0" class="post no-results not-found">
			<header class="entry-header search-result">
				<h3 class="entry-title"><?php _e( 'Nothing Found', 'agera' ); ?></h3>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'agera' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->
    <?php } ?>
    </div>
	
  </div> <!-- end content -->

  <?php get_footer(); ?>
</body>
</html>
