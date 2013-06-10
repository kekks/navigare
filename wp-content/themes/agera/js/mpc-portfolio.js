/*-----------------------------------------------------------------------------------*/
/*	Portfolio funtionality
/*-----------------------------------------------------------------------------------*/

jQuery.noConflict();
jQuery(document).ready(function($) {

	var colNum = 1,
		blogColNum = 1,
		itemWidth = 300,
		blogItemWidth = 450,
		minWidth = parseInt($('.portfolio-item:first-child').css('min-width')),
		blogMinWidth = parseInt($('blog-post:first-child').css('min-width')),
		footer = false,
		$data,
		firstRun = true,
		firstRunBlog = true,
		folioItemNumber = parseInt($('.portfolio').attr('data-item-number')),
		folioItemRatio = parseInt($('.portfolio').attr('data-item-number')),
		loadMore = false;

	if(parseInt($('#agera_footer').css('left')) == 0)
		footer = true;
	/* Delay function for the resize event */
	var delay = (function(){
	var timer = 0;
	return function(callback, ms){
    	clearTimeout (timer);
    	timer = setTimeout(callback, ms);
    	};
    })();
    
    /* first run */
    get_item_dimentions();
	set_item_dimentions();
	get_blog_item_dimentions();
	set_blog_item_dimentions();
		
    $('#content').css({
	   'height': ($(window).height() - $('#header-container').height()) + 'px' 
    });
    
	$(window).resize(function() {
		if(!footer)
	    	$('#agera_footer').css({'left': -$(window).width()});
	    
		
		$('#content').css({
			'height': ($(window).height() - $('#header-container').height()) + 'px' 
		});
		
    	delay(function(){
    		get_item_dimentions();
    		set_item_dimentions();
    		get_blog_item_dimentions();
    		set_blog_item_dimentions();
	    }, 250);
	});	
	
	
	/* Footer */
	$('.mpc-footer-ribbon').on('click', function(e){
		var $this = $(this);
		if(!footer){
			$('#agera_footer').css( {
				'left' : -$(window).width(),
				'visibility' : 'visible'
			});
			$('#agera_footer').stop().animate({'left': '0px' }, 500, 'easeOutExpo');
			$this.find('span.plus').stop().animate( { 'opacity' : 0 } );
			$this.find('span.minus').stop().animate( { 'opacity' : 1 } );
		} else {
			$('#agera_footer').stop().animate({'left':  -$(window).width() + 'px' }, 500, 'easeOutExpo', function(){
				$('#agera_footer').css( { 'visibility' : 'hidden' });
			});
			$this.find('span.plus').stop().animate( { 'opacity' : 1 } );
			$this.find('span.minus').stop().animate( { 'opacity' : 0 } );
		}
		
		footer = !footer;

		e.preventDefault();
	});
	
	/* Socials */
	
	/* set width for the social icons */
    $('.social-icons').css( { 'width' : $('.social-icons').width() } );
	
	$('#agera_footer .social-icons li').hover(function() {
		var $this = $(this);
		$this.find('span.icon-color').stop().animate( { 'top' : '0px' }, 250, 'easeOutExpo'); 
		$this.find('span.icon').stop().animate( { 'top' : '-25px' }, 250, 'easeOutExpo'); 
	}, function() {
		var $this = $(this);
		$this.find('span.icon-color').stop().animate( { 'top' : '25px' }, 250, 'easeOutExpo'); 
		$this.find('span.icon').stop().animate( { 'top' : '0px' }, 250, 'easeOutExpo'); 
	});
	
	$('div.portfolio.no-flip .mpc-card').hover(function() {
		var $this = $(this);
		$this.find('.back').css( { 'visibility': 'visible' });
		$this.find('.front').stop().animate( { 'opacity' : 0.8 }, 1000, 'easeOutExpo' );
		$this.find('.back').stop().animate( { 'opacity' : 1 }, 1000, 'easeOutExpo' );
	}, function() {
		var $this = $(this);
		if($.browser.msie && jQuery.browser.version.substring(0, 2) == "8.") {
			$this.find('.back').css( { 'visibility': 'hidden' });
			$this.find('.front').stop().css( { 'opacity' : 1 });
		}
		$this.find('.front').stop().animate( { 'opacity' : 1 }, 1000, 'easeOutExpo' );
		$this.find('.back').stop().animate( { 'opacity' : 0 }, 1000, 'easeOutExpo', function() {
			$this.find('.back').css( { 'visibility': 'hidden' });
		});
	});
	
	if($.browser.opera) { $('.mpc-viniet').css( { 'visibility' : 'hidden' } ); }
	
	if($.browser.msie || $.browser.opera) {
		if(!$('.portfolio').hasClass('no-flip')) {

			$('.portfolio-item').each(function() {
				$this = $(this);

				$this.find('.front.face').css({
					'opacity' : 1,
					'z-index' : 1
				});
				$this.find('.back.face').css({
					'opacity' : 0,
					'z-index' : 0
				});
			});

			$('.portfolio-item').hover(function() {
				$this = $(this);
				$this.find('.front.face').stop().animate( { 'opacity' : 0 }, function() {
					$(this).css( { 'z-index' : 0 });
				});
				$this.find('.back.face').stop().animate( { 'opacity' : 1 }, function() {
					$(this).css( { 'z-index' : 1 });
				});
			}, function() {
				$this = $(this);
				$this.find('.front.face').stop().animate( { 'opacity' : 1 }, function() {
					$(this).css( { 'z-index' : 1 });
				});
				$this.find('.back.face').stop().animate( { 'opacity' : 0 }, function() {
					$(this).css( { 'z-index' : 0 });
				});
			})
		}
	}
	
	
	/* Filterable Portfolio */

	// Clone applications to get a second collection
	var all = $('div.mpc-portfolio-categories ul li:first').attr('data-link');
		
	$('.mpc-portfolio-categories ul li').bind('click', function(e) {
		
		
		var $this = $(this),
			col = 0,
			mainCont = $('section#main-content'),
			duration = 300; 
		if($this.hasClass('active'))
			return;
		
		if($('.mpc-portfolio-categories ul li.active').length == 0)
			duration = 1;			
		
		$('.mpc-portfolio-categories').find('.active').removeClass('active');
			
		var filterClass = $this.attr('data-link');
		if (filterClass == all) {		
			var $filteredData =  $data;
		} else {
			var $filteredData = $data;
		}
		
		/* Remove unwanted items */
		if(filterClass != 'all'){
			$('.portfolio-content .portfolio-item').each(function(){
				var $this = $(this);
				if(!$this.hasClass(filterClass) && filterClass != 'all') {
					$this.addClass('remove-item');
				}
			});
		}
		/* Add wanted items */
		var count = $filteredData.find('.portfolio-item').length;
		$filteredData.find('.portfolio-item').each(function(i){
			var $this = $(this),
				$thisClone = $this.clone(true, true);

			if($this.hasClass(filterClass) && $('.portfolio-content #' + $this.attr('id')).length < 1
			 || filterClass == 'all' && $('.portfolio-content #' + $this.attr('id')).length < 1) {
				$thisClone.hide();
				$('.portfolio-content').append($thisClone);
			}
					
			if(count - 1 == i){
				$('.portfolio-content .portfolio-item.remove-item').animate( { 'opacity' : 0 }, 1000, 'easeOutExpo', function() {
					$(this).remove();
				});
				
				get_item_dimentions();
				set_item_dimentions();
			}	
		});
		
		$this.addClass("active");		
		e.preventDefault();
		return false;
		
	});
	
	/*-----------------------------------------------------------------------------------*/
	/*	Read More hover
	/*-----------------------------------------------------------------------------------*/
	
	$('.mpc-read-more').hover(function(e){
		var $this = $(this);
		$this.find('.plus-white').stop().animate( { 'top' : '-16px' }, 300, 'easeOutExpo');
		$this.find('.plus-hover').stop().animate( { 'top' : '-21px' }, 300, 'easeOutExpo');
	}, function(e){
		var $this = $(this);
		$this.find('.plus-white').stop().animate( { 'top' : '-0px' }, 300, 'easeOutExpo');
		$this.find('.plus-hover').stop().animate( { 'top' : '-5px' }, 300, 'easeOutExpo');
	});
	
	/*-----------------------------------------------------------------------------------*/
	/*	Load More
	/*-----------------------------------------------------------------------------------*/
	
	$('.portfolio').scroll(function() {
		var $this = $(this);
		if(loadMore && $this.scrollTop() + $this.height() + $('#header-container').height() >= $('.portfolio-content').height()) {
			if($('.mpc-load-more').length < 1){
				$this.append('<span class="mpc-load-more">load more</span>');
			}
			$('.mpc-load-more').css('bottom', $('#agera_footer').height() + 'px');
			$('.mpc-load-more').stop().animate( { 'right' : '0px' }, 1000, 'easeOutExpo');
		} else {
			$('.mpc-load-more').stop().animate( { 'right' : '-300px' }, 1000, 'easeOutExpo');
		}
    });
    
    $('.mpc-load-more').live('click', function() {
    	$(this).stop().animate( { 'right' : '-300px' }, 1000, 'easeOutExpo');
	     show_additional_items();
    });
    
	/*-----------------------------------------------------------------------------------*/
	/*	Helper Functions
	/*-----------------------------------------------------------------------------------*/
	
	function get_blog_item_dimentions() {
		blogMinWidth = parseInt($('.blog-post:first-child').css('min-width'));
		
		var wWidth = $(window).width(),
			corrector = 0;

		for(var i = 10; i > 0; i--){
			corrector = (i + 1) * 20 + i * 40;
			if((wWidth - corrector) / i > (blogMinWidth)){
				blogItemWidth = Math.ceil((wWidth - corrector) / i);
				blogColNum = i;
				return;
			}
		}
	}
	
	
	function get_item_dimentions() {
		minWidth = parseInt($('.portfolio-item:first-child').css('min-width'));
	
		var wWidth = $(window).width();
		
		for(var i = 10; i > 0; i--){
			if(wWidth / i > minWidth){
				itemWidth = Math.ceil(wWidth / i);
				colNum = i;
				return;
			}
		}
	}
	
	function set_item_dimentions(){
		var row = 0,
			index = 0,
			itemNumber = 1;
			heightRow = 0;
	
		$('.portfolio-content').find('.portfolio-item .front img').each(function() {
			var $this = $(this),
				height = Math.ceil( (itemWidth / $this.width() ) * $this.height() );
			
			if(itemNumber > folioItemNumber) {
				$this.parents('.portfolio-item').css({'display' : 'none'});
				loadMore = true;	
			}
			
			if($this.parents('.portfolio-item').hasClass('remove-item')) {
				return true;
			}
			
			if(index % colNum== 0 && index != 0) {
				index = 0;
				row++;
			}
			
			if(itemNumber <= folioItemNumber) {
				heightRow = row;
			}
			
			$this.animate({
				'height' : height + 'px',
				'width' : itemWidth + 'px'
			}, 1000, 'easeOutExpo');
			

			$this.parents('.portfolio-item, .portfolio-item-thumb').animate({
				'height' : height + 'px',
				'width' : itemWidth + 'px',
				'top' : (height * row) - row + 'px',
				'left' : itemWidth * index  + 'px'	
			}, 1000, 'easeOutExpo');
			
			if(itemNumber <= folioItemNumber)
				$this.parents('.portfolio-item').fadeIn(500, 'easeOutExpo');
		
			var ratio = 0.6;
			
			if(height < 430) ratio = 0.7;
			if(height < 300) ratio = 0.55;
			if(height < 280) ratio = 0.5;
			if(height < 230) ratio = 0.4;
			if(height < 200) ratio = 0.3;
			
			$this.parents('.portfolio-item').find('p.mpc-excerpt').css({ 'height' : Math.floor((height * ratio) / 21) * 21 + 'px'});	
			index++;
			itemNumber++;
		});
		
		height = Math.ceil(( (itemWidth / $('.portfolio-item').find('img').width() ) * $('.portfolio-item').find('img').height() ));
		
		$('div.portfolio').animate({ 'opacity' : 1 }, 2000, 'easeOutExpo');
		$('div.portfolio-content').animate({ 
			'height' : (height * (heightRow + 1) - heightRow) + 'px',
			'opacity' : 1
		}, 1000, 'easeOutExpo', function() {
			if(firstRun){
				$data = $(".portfolio-content").clone(true, true);
				firstRun = false;
			}
			
			if(loadMore && $('.portfolio-content').height() + $('#header-container').height() <= $(document).height()) {
				if($('.mpc-load-more').length < 1){
					$('.portfolio').append('<span class="mpc-load-more">load more</span>');
				}
				$('.mpc-load-more').css('bottom', $('#agera_footer').height() + 'px');
				$('.mpc-load-more').stop().animate( { 'right' : '0px' }, 1000, 'easeOutExpo');  
			} else {
				$('.mpc-load-more').stop().animate( { 'right' : '-300px' }, 1000, 'easeOutExpo'); 
			}
		});	
	}
	
	function show_additional_items(){
		var row = 0,
			index = 0,
			itemNumber = 1;

			folioItemNumber += folioItemRatio;
			
		$('.portfolio-content').find('.portfolio-item').each(function() {
			$this = $(this);
			if(itemNumber <= folioItemNumber) {
				loadMore = false;
				$this.fadeIn(500, 'easeOutExpo');
				if(index % colNum == 0 && index != 0) {
					index = 0;
					row++;
				}
			} else {
				loadMore = true;
				$this.css({'display' : 'none'});
			}
			index++;
			itemNumber++;
		});
		
		$('div.portfolio-content').animate({ 
			'height' : (height * (row + 1) - row) + 'px',
			'opacity' : 1
		}, 1000, 'easeOutExpo');
	}
	
	function set_blog_item_dimentions(){
		var row = 0,
			index = 0,
			count = $('.posts-container').find('.blog-post').length,
			k = 0,
			pos = 0;
			
		$('.posts-container').find('.post-thumbnail').each(function() {
			var $this = $(this),
				imageWidth = blogItemWidth,
				height = Math.ceil( (imageWidth / $this.find('img').width() ) * $this.find('img').height() ),
				dad;
			
			if(index % blogColNum== 0 && index != 0) {
				index = 0;
				row++;
			}
			$this.find(' > img').css({
				'height' : height + 'px',
				'width' : imageWidth + 'px'
			});
			
			if(row > 0){
				dad = $this.parents('.blog-post');
				for( var i = 0; i < blogColNum; i++){
					dad = dad.prev();
				}
			}		
			
			$this.parents('.blog-post').css({
				'width' : blogItemWidth + 'px',
				'top' : (dad != undefined) ? parseInt(dad.css('top')) + dad.outerHeight() + 25 + 'px' : '0px',
				'left' : (blogItemWidth + 40) * index + (20 * index)  + 'px'	
			});
			
			$this.find('iframe').css({
				'min-height' : $this.parents('.blog-post').width() * 0.56,
				'height' : 'auto'
			});
			
			if(count - blogColNum <= k){
				if( pos < parseInt($this.parents('.blog-post').css('top')) + $this.parents('.blog-post').outerHeight() + 25)
					pos = parseInt($this.parents('.blog-post').css('top')) + $this.parents('.blog-post').outerHeight() + 25;
			}
			
			k++;		
			index++;
		});	
		
		$('.mpc-fix').css({'top' : pos });
		
		if(firstRunBlog) {
			var timer = setInterval(function() {
		      get_blog_item_dimentions();
		      set_blog_item_dimentions();
		      $('.blog').animate( { 'opacity': 1 }, 1000, 'easeOutExpo' );
		      clearInterval(timer);
		      firstRunBlog = false;
		 	}, 100);
	 	}
		
	}
});