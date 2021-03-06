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

	#header-container{z-index:100;}
	
	
	
	
	@media all and (orientation: portrait) {
	
		.wrapper {
			width:100%;
			height:100%;
			background:black;
		}
	
		.testom{
	    margin-top:10%;
	    z-index:20;
	    position:relative;
	    opacity:0;
	    cursor:pointer;
		}
	
		.testos{
	    margin-top:10%;
	    z-index:20;
	    position:relative;
	    opacity:0;
	    cursor:pointer;
		}
	
		h5 {
	    color:white !important;
	    text-shadow: 2px 2px 2px #000;
	    font-size:30px;
	    line-height:45px;
	    font-weight:lighter;
	  }

		.motor {
		  width:100%;
		  height:47.5% !important;
		  float:none;
		  background-image: url(http://my-yacht-charter.com/wp-content/uploads/2013/06/17.jpg);
		  background-size: cover;
	      background-position: center;
		  overflow:hidden;
	  }
	
	
		.sail {
	  	  width:100%;
	  	  height:47.5%;
		  float:none;
		  background-image: url(http://my-yacht-charter.com/wp-content/uploads/2014/12/a-back-sail-vert.jpg);
		  background-size: cover;
	    background-position: center;
	    overflow:hidden;
	  }
	
		.divbl{
		  width:100%;
		  height:30%;
		  background:black;
		  z-index:8;
		  position:absolute;
		  opacity:0;
		  background:rbga(0,0,0,0.0);
		}
	
	
		.sail.divbl{display:none;}
	
		.sail.testos{display:none;}
	
		.motor.divbl{display:none;}
	
		.motor.testom{display:none;}
	

  	
	  .legal{
	    position:absolute;
	    margin-bottom:0;
	    color:white;
	    min-height:15px;
	    width:100%;
	    text-align:center;
	    font-size:10px;
	    bottom:0px;
	    z-index:3000;
	    opacity:0.7;
		background:black;
	  }
  
	  .legal a{
	    text-decoration:none !important;
	    color:white !important;
	  }
  
	  .testom img{display:none;}
	  .testom h5{margin:auto;}
  
	  .testos img{display:none;}
	  .testos h5{margin:auto;} 
	  body {height:100% !important;}
	}




@media all and (orientation: landscape) {
	
	.wrapper {
		width:100%;
		height:89%;
		background:white;
		position:absolute;
	}
	
	.testom{
    margin-top:10%;
    z-index:20;
    position:relative;
    opacity:0;
    cursor:pointer;
	}
	
	.testos{
    margin-top:10%;
    z-index:20;
    position:relative;
    opacity:0;
    cursor:pointer;
	}
	
	h5 {
    color:white !important;
    text-shadow: 2px 2px 2px #000;
    font-size:30px;
    line-height:45px;
    font-weight:lighter;
  }

	.motor {
	  width:50%;
	  height:100%;
	  float:left;
	  background-image: url(http://my-yacht-charter.com/wp-content/uploads/2013/06/17.jpg);
    background-size: cover;
    background-position: bottom center;
	  overflow:hidden;
	  position:relative;
	}
	
	.divbl{
	  width:100%;
	  height:100%;
	  background:black;
	  z-index:10;
	  position:absolute;
	  opacity:0;
	  background:rbga(0,0,0,0.0);
	}
	
	
	.sail:hover .divbl{
	  opacity:0.5;
	  background:rbga(0,0,0,0.7);
	  cursor:pointer;
	  -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
	}
	
	.sail:hover .testos{
	  opacity:1;
	  -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
	}
	
	.motor:hover .divbl{
	  opacity:0.7;
	  background:rbga(0,0,0,0.7);
	  cursor:pointer;
	  -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
	}
	
	.motor:hover .testom{
	  opacity:1;
	  -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
	}
	
	
	.sail {
	  width:50%;
	  height:100%;
	  float:right;
	  background-image: url(http://my-yacht-charter.com/wp-content/uploads/2013/06/back-sail.jpg);
	  background-size: cover;
    background-position: bottom center;
    overflow:hidden;
	position:relative;
  }
  	
  .legal{
    position:absolute;
    margin-bottom:0;
    color:white;
    height:15px;
    width:100%;
    text-align:center;
    font-size:10px;
    bottom:30px;
    z-index:3000;
    opacity:0.7;
  }
  
  .legal a{
    text-decoration:none !important;
    color:white !important;
  }
  
  #mob-title {display:none !important;}
  
}





</style>

<div class="wrapper">
<a href="http://my-yacht-charter.com/charter-motor-yacht">  <div class="motor">
	      <div id="mob-title">
	      <h5>Charter a Motor Yacht</h5> 
	  </div>
      <div class="divbl"></div>
      <div class="testom">
      <img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/mot.png">
      <h5>Charter a Motor Yacht</h5> 
      </div>

  </div>
    </a>
  <div class="sail">
    <a href="http://my-yacht-charter.com/charter-sail-yacht">
	  <div id="mob-title">
	      <h5>Charter a Sail Yacht</h5> 
	  </div>

      <div class="divbl"></div>
      <div class="testos">
      <img src="http://my-yacht-charter.com/wp-content/uploads/2013/07/sail.png">
      <h5>Charter a Sail Yacht</h5>
      </div>
    </a>
  </div>
  
  <div style="clear:both"></div>
  
  <div class="legal">
   <p>Navigare Y.W. - Via Napoli, 108 - 09124 Cagliari (CA) Italy - tel. +39 070 6402523 - fax. 178 2203243 - cell. +39 3351436586 - PI 03173110929 - <a target="_blank" href="https://plus.google.com/u/0/102976269796138131379" rel="publisher">Google+</a> - <a target="_blank" href="https://www.facebook.com/MyYachtCharter">Facebook</a>  -  <a target="_blank" href="https://twitter.com/navigareW">Twitter</a><p>
  </div>

</div>

</body>
</html>
