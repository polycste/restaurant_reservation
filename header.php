<?php session_start();  ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php'); ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">              
<!--<![endif]-->

	<head>
		    <meta charset="UTF-8" />
		    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
		    <title>sevenhillrestaurant | Just another WordPress site</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		    <link rel="profile" href="http://gmpg.org/xfn/11" />
		    <link rel="pingback" href="xmlrpc.php" />
		   
		   <!-- Icons font support for IE6-7  -->
		    <!--[if lt IE 8]>
		      <script src="http://sevenhillrestaurant.net/wp-content/themes/customizr/inc/css/fonts/lte-ie7.js"></script>
		    <![endif]-->
		    <link rel="alternate" type="application/rss+xml" title="sevenhillrestaurant &raquo; Feed" href="http://sevenhillrestaurant.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="sevenhillrestaurant &raquo; Comments Feed" href="comments/feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="sevenhillrestaurant &raquo; Home Comments Feed" href="home/feed/index.php" />
<link rel='stylesheet' id='qcf_style-css'  href='wp-content/plugins/quick-contact-form/quick-contact-form.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='qcf_custom-css'  href='wp-content/plugins/quick-contact-form/quick-contact-form-custom.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-style-css'  href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-slider-css'  href='wp-content/plugins/responsive-slider/css/responsive-slider.css%3Fver=0.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='cntctfrmStylesheet-css'  href='wp-content/plugins/contact-form-plugin/css/style.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='dcjq-mega-menu-css'  href='wp-content/plugins/jquery-mega-menu/css/dcjq-mega-menu.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='wp-content/plugins/photo-gallery/css/jquery-ui-1.10.3.custom.css%3Fver=1.1.15.css' type='text/css' media='all' />
<link rel='stylesheet' id='bwg_frontend-css'  href='wp-content/plugins/photo-gallery/css/bwg_frontend.css%3Fver=1.1.15.css' type='text/css' media='all' />
<link rel='stylesheet' id='bwg_font-awesome-css'  href='wp-content/plugins/photo-gallery/css/font-awesome-4.0.1/font-awesome.css%3Fver=4.0.1.css' type='text/css' media='all' />
<link rel='stylesheet' id='bwg_mCustomScrollbar-css'  href='wp-content/plugins/photo-gallery/css/jquery.mCustomScrollbar.css%3Fver=1.1.15.css' type='text/css' media='all' />
<link rel='stylesheet' id='social-widget-css'  href='wp-content/plugins/social-media-widget/social_widget.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='customizr-skin-css'  href='wp-content/themes/customizr/inc/css/blue.css%3Fver=3.1.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='customizr-style-css'  href='wp-content/themes/customizr/style.css%3Fver=3.1.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='fancyboxcss-css'  href='wp-content/themes/customizr/inc/js/fancybox/jquery.fancybox-1.3.4.min.css%3Fver=3.9.6.css' type='text/css' media='all' />
<link rel='stylesheet' id='themeblvd_gmap-css'  href='wp-content/plugins/theme-blvd-responsive-google-maps/assets/style.css%3Fver=1.0.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/quick-contact-form/quick-contact-form.js%3Fver=3.9.6'></script>
<script type='text/javascript' src='http://sevenhillrestaurant.net/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>
<script type='text/javascript' src='http://sevenhillrestaurant.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.google.com/jsapi?ver=3.9.6'></script>
<script type='text/javascript' src='wp-content/plugins/jquery-mega-menu/js/jquery.dcmegamenu.1.3.4.min.js%3Fver=3.9.6'></script>
<script type='text/javascript' src='wp-content/plugins/photo-gallery/js/bwg_frontend.js%3Fver=1.1.15'></script>
<script type='text/javascript' src='wp-content/plugins/photo-gallery/js/jquery.mobile.js%3Fver=1.1.15'></script>
<script type='text/javascript' src='wp-content/plugins/photo-gallery/js/jquery.mCustomScrollbar.concat.min.js%3Fver=1.1.15'></script>
<script type='text/javascript' src='wp-content/plugins/photo-gallery/js/jquery.fullscreen-0.4.1.js%3Fver=0.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var bwg_objectL10n = {"bwg_field_required":"field is required.","bwg_mail_validation":"This is not a valid email address.","bwg_search_result":"There are no images matching your search."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/photo-gallery/js/bwg_gallery_box.js%3Fver=1.1.15'></script>
<script type='text/javascript' src='wp-content/plugins/theme-blvd-responsive-google-maps/assets/jquery.gmap.min.js%3Fver=3.0'></script>
<script type='text/javascript' src='wp-content/themes/customizr/inc/js/modernizr.min.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php%3Frsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://sevenhillrestaurant.net/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='Great Location with shopping facilities' href='index.php%3Fp=33.php' />
<link rel='next' title='Our Menu' href='index.php%3Fp=45.php' />
<meta name="generator" content="WordPress 3.9.6" />
<link rel='canonical' href='index.php' />
<link rel='shortlink' href='index.php' />
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

        
        
            <!-- SideOffer [HD] CSS -->
	<style type="text/css">
	#sideoffer { 
		background: url('wp-content/plugins/sideoffer/images/sideoffer-bg.png') top left no-repeat; 
		width:600px;
		height:600px; 
		position:fixed; 
		top:120px; 
		right: -501px; 
		text-transform: none; 
		z-index:99999; 
	}
	#sideoffer .box { position: absolute; right:0; width: 78%; padding: 15px 10px; color: #ffffff; }
	#sideoffer p { margin-bottom: 5px !important; }
	</style>
    <!-- End SideOffer [HD] CSS -->
    		
<!-- Responsive Select CSS 
================================================================ -->
<style type="text/css" id="responsive-select-css">
.responsiveSelectContainer select.responsiveMenuSelect, select.responsiveMenuSelect{
	display:none;
}

@media (max-width: 960px) {
	.responsiveSelectContainer{
		border:none !important;
		background:none !important;
		box-shadow:none !important;
	}
	.responsiveSelectContainer ul, ul.responsiveSelectFullMenu, #megaMenu ul.megaMenu.responsiveSelectFullMenu{
		display: none !important;
	}
	.responsiveSelectContainer select.responsiveMenuSelect, select.responsiveMenuSelect { 
		display: inline-block; 
		width:100%;
	}
}	
</style>
<!-- end Responsive Select CSS -->

<!-- Responsive Select JS
================================================================ -->
<script type="text/javascript">
jQuery(document).ready( function($){
	$( '.responsiveMenuSelect' ).change(function() {
		var loc = $(this).find( 'option:selected' ).val();
		if( loc != '' && loc != '#' ) window.location = loc;
	});
	//$( '.responsiveMenuSelect' ).val('');
});
</script>
<!-- end Responsive Select JS -->
		
		    <!--Icons size hack for IE8 and less -->
		    <!--[if lt IE 9]>
		      <link href="http://sevenhillrestaurant.net/wp-content/themes/customizr/inc/css/fonts/ie8-hacks.css" rel="stylesheet" type="text/css"/>
		    <![endif]-->
		</head>
		
	<body class="home page page-id-38 page-template page-template-home-php" itemscope itemtype="http://schema.org/WebPage">
		
		
	   	<header class="tc-header clearfix row-fluid" role="banner">

            
			
		
	    	            
            
            <div style="container">

	        <div class="top_bg" >
            
            <div style="margin:auto;" class=" container" >
                 <div >
            
           			 <div class="brand span4  pull-left">  <!-- for logo --> 
            
            <div>
         
         

	        	<a class="site-title logo " href="index.php" ></a>
          </div>  
          <!-- for logo -->
 
	        </div>
             		 <!-- brand span3 pull-left --> 
                     
                                          
                     
                     <div class="" style="float:right;">
                     <div id="social-widget-2" class="widget module Social_Widget"><div><div><div><div class="socialmedia-buttons smw_left"><div class="mobileno" style="padding:1px 0 0 20px;">02-9614855</div>
<a href="https://www.facebook.com/pages/SevenHill-Restaurant/198541000174454" rel="nofollow" target="_blank"><img width="32" height="32" src="wp-content/plugins/social-media-widget/images/default/32/facebook.png" 
				alt="Follow Us on Facebook" 
				title="Follow Us on Facebook" style="opacity: 1; -moz-opacity: 1;" class="fade" /></a><a href="https://plus.google.com/‎" rel="publisher" target="_blank"><img width="32" height="32" src="wp-content/plugins/social-media-widget/images/default/32/googleplus.png" 
				alt="Follow Us on Google+" 
				title="Follow Us on Google+" style="opacity: 1; -moz-opacity: 1;" class="fade" /></a><a href="https://www.linkedin.com/" rel="nofollow" target="_blank"><img width="32" height="32" src="wp-content/plugins/social-media-widget/images/default/32/linkedin.png" 
				alt="Follow Us on LinkedIn" 
				title="Follow Us on LinkedIn" style="opacity: 1; -moz-opacity: 1;" class="fade" /></a><a href="https://twitter.com/‎" rel="nofollow" target="_blank"><img width="32" height="32" src="wp-content/plugins/social-media-widget/images/default/32/twitter.png" 
				alt="Follow Us on Twitter" 
				title="Follow Us on Twitter" style="opacity: 1; -moz-opacity: 1;" class="fade" /></a></div></div></div></div>
               
                       
                       
<?php  if(isset($_SESSION['user_email'])) {
       echo 'You are logged in';
       ?>
  
       <a href="logout.php">Logout</a>
       <?php

       }
      else { ?>
      <a href="login.php">Sign in</a>
       <a href="register.php">Sign up</a>
     <?php
     } ?>             
                        
  
                       </div>                     </div>
                     
                     <div class=" row" >
                     <div class=" offset10">
                     <div id="text-4" class="widget module widget_text"><div><div><div>			<div class="textwidget"></div>
		</div></div></div></div>                     </div>
                     </div>
                     
                     
                     
                     
                     
                   
        
            
                </div>
                 
                
                <div >
                
            
                    
         <div >
        <div style=" margin:10px -25px; class="span12"  ">

      	<div class="navbar-wrapper clearfix ">

      		<div class="navbar notresp row-fluid pull-left" >
      			<div class="" role="navigation">
      				<div class="row-fluid">
            			<div class="nav-collapse collapse tc-hover-menu-wrapper"><div class="responsiveSelectContainer"><ul id="menu-menu-2" class="nav tc-hover-menu responsiveSelectFullMenu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-10"><a href="index.php%3Fp=7.php">Experience <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196"><a href="index.php%3Fp=193.php">History</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="index.php%3Fp=170.php">Our Team</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="index.php%3Fp=174.php">Photo Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="index.php%3Fp=178.php">Inspiration Table</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="index.php%3Fp=181.php">Find Your Table</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="index.php%3Fp=45.php">Our Menu</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="index.php%3Fp=48.php">Online Reservation</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="index.php%3Fp=68.php">Our Services</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="index.php%3Fp=121.php">Contact Us</a></li>
</ul><select class="responsiveMenuSelect"><option value="" selected="selected">⇒ Navigate</option><option  id="menu-item-9" value="http://sevenhillrestaurant.net/">Home</option>
<option  id="menu-item-10" value="http://sevenhillrestaurant.net/about/">Experience</option>
	<option  id="menu-item-196" value="http://sevenhillrestaurant.net/history/">– History</option>
	<option  id="menu-item-173" value="http://sevenhillrestaurant.net/menu-test/">– Our Team</option>
	<option  id="menu-item-177" value="http://sevenhillrestaurant.net/menu-test2/">– Photo Gallery</option>
	<option  id="menu-item-189" value="http://sevenhillrestaurant.net/menu-test3/">– Inspiration Table</option>
<option  id="menu-item-202" value="http://sevenhillrestaurant.net/menu-test4/">Find Your Table</option>
<option  id="menu-item-47" value="http://sevenhillrestaurant.net/online-reservation/">Our Menu</option>
<option  id="menu-item-51" value="http://sevenhillrestaurant.net/our-menu/">Online Reservation</option>
<option  id="menu-item-70" value="http://sevenhillrestaurant.net/our-services/">Our Services</option>
<option  id="menu-item-124" value="http://sevenhillrestaurant.net/contact-us/">Contact Us</option>
</select></div></div>            		</div><!-- .row-fluid -->
            	</div><!-- /.navbar-inner -->
            </div><!-- /.navbar notresp -->

            <div class="navbar resp">
            	<div class="navbar-inner" role="navigation">
            		<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div class="nav-collapse collapse tc-hover-menu-wrapper"><div class="responsiveSelectContainer"><ul id="menu-menu-4" class="nav tc-hover-menu responsiveSelectFullMenu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-10"><a href="index.php%3Fp=7.php">Experience <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196"><a href="index.php%3Fp=193.php">History</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="index.php%3Fp=170.php">Our Team</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="index.php%3Fp=174.php">Photo Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="index.php%3Fp=178.php">Inspiration Table</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="index.php%3Fp=181.php">Find Your Table</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="index.php%3Fp=45.php">Our Menu</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="index.php%3Fp=48.php">Online Reservation</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="index.php%3Fp=68.php">Our Services</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="index.php%3Fp=121.php">Contact Us</a></li>
</ul><select class="responsiveMenuSelect"><option value="" selected="selected">⇒ Navigate</option><option  value="http://sevenhillrestaurant.net/">Home</option>
<option  value="http://sevenhillrestaurant.net/about/">Experience</option>
	<option  value="http://sevenhillrestaurant.net/history/">– History</option>
	<option  value="http://sevenhillrestaurant.net/menu-test/">– Our Team</option>
	<option  value="http://sevenhillrestaurant.net/menu-test2/">– Photo Gallery</option>
	<option  value="http://sevenhillrestaurant.net/menu-test3/">– Inspiration Table</option>
<option  value="http://sevenhillrestaurant.net/menu-test4/">Find Your Table</option>
<option  value="http://sevenhillrestaurant.net/online-reservation/">Our Menu</option>
<option  value="http://sevenhillrestaurant.net/our-menu/">Online Reservation</option>
<option  value="http://sevenhillrestaurant.net/our-services/">Our Services</option>
<option  value="http://sevenhillrestaurant.net/contact-us/">Contact Us</option>
</select></div></div>            	</div><!-- /.navbar-inner -->
      		</div><!-- /.navbar resp -->

    	</div><!-- /.navbar-wrapper -->


         </div>
          </div>

</div>
                
                </div>
            </div>

	        
	   
	   
	   

</div>
        <div>

 
              
</div>             
             
		</header>