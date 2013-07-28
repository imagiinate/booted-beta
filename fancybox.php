<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Booted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap font awesome and windows metro buttons, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">
    <!-- Theme -->
    
    <!-- Le styles -->
    <link href="/booted-beta/assets/css/themes/united.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bs-docs.css" rel="stylesheet">
    <link href="/booted-beta/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/booted-beta/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/booted-beta/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/booted-beta/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/booted-beta/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/booted-beta/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/booted-beta/assets/ico/favicon.png">


	
  </head>
  
  <style>
  	.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

	
  	@media only screen and (min-width: 180px){
	      .carousel {margin-left: -20px; margin-right: -20px;}
	      .carousel.carousel-fade .item {
		  height: 240px;
		  width: 100%;
		  
		  }
		  
		  div.carousel img {
			margin: 0px auto;
			width: auto;
			min-height: 240px;}
			
			
		  .carousel.carousel-fade .btn {display: none;}
		  
		  .carousel-control.left {left: 20px;}
		  .carousel-control.right {right: 20px;}
		  .carousel-caption {padding:10px 50px;}
		  .carousel h1 {line-height: 34px;}
		 
		 
			
      }
      
  	@media only screen and (min-width: 680px){
	      .carousel.carousel-fade .item {
		  height: 400px;
		  width: 100%;
		  }
		  
		  div.carousel img {
			margin: 0px auto;
			width: 100%;
			height: auto;
			min-height: 400px;
			
		  }
			
			
		  .carousel h1 {line-height: 34px; font-size: 40px;
			  
		  }
		  
		  .carousel-control.left {left: 60px;}
		  .carousel-control.right {right: 60px;}
		  .carousel-caption {padding:10px 50px;}
		  .carousel h1 {line-height: 34px;}
		 
      }
  </style>

  <body style="margin-top:0px;" data-spy="scroll" data-target=".bs-docs-sidebar">

  <?php include 'include/docs-nav.php'; ?>
 
<div class="jumbotron subhead">
    <div class="container">
      <h1><i class="icon-picture"></i> FancyBox Included.</h1>
      <p class="lead">What would a framework be without a great photo viewer?</p>
    </div>
  </div>
  
  




	<div class="container" style="max-width:700px; margin: 0px auto; text-align:left;">
		
		<br />
		<h1 class="page-title">FancyBox</h1>
		
		<p>This is a demonstration. More information and examples: <a href="http://fancyapps.com/fancybox/">www.fancyapps.com/fancybox/</a></p>
	
		<h3>Simple image gallery</h3>
		<p>
			<a class="fancybox" href="/booted-beta/assets/img/fancybox/1_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="/booted-beta/assets/img/fancybox/1_s.jpg" alt="" /></a>
	
			<a class="fancybox" href="/booted-beta/assets/img/fancybox/2_b.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="/booted-beta/assets/img/fancybox/2_s.jpg" alt="" /></a>
	
			<a class="fancybox" href="/booted-beta/assets/img/fancybox/3_b.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="/booted-beta/assets/img/fancybox/3_s.jpg" alt="" /></a>
	
			<a class="fancybox" href="/booted-beta/assets/img/fancybox/4_b.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="/booted-beta/assets/img/fancybox/4_s.jpg" alt="" /></a>
		</p>
	
		<h3>Different effects</h3>
		<p>
			<a class="fancybox-effects-a" href="/booted-beta/assets/img/fancybox/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="/booted-beta/assets/img/fancybox/5_s.jpg" alt="" /></a>
	
			<a class="fancybox-effects-b" href="/booted-beta/assets/img/fancybox/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="/booted-beta/assets/img/fancybox/5_s.jpg" alt="" /></a>
	
			<a class="fancybox-effects-c" href="/booted-beta/assets/img/fancybox/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="/booted-beta/assets/img/fancybox/5_s.jpg" alt="" /></a>
	
			<a class="fancybox-effects-d" href="/booted-beta/assets/img/fancybox/5_b.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="/booted-beta/assets/img/fancybox/5_s.jpg" alt="" /></a>
		</p>
	
		<h3>Various types</h3>
		<p>
			fancyBox will try to guess content type from href attribute but you can specify it directly by adding classname (fancybox.image, fancybox.iframe, etc).
		</p>
		<ul>
			<li><a class="fancybox" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a></li>
			<li><a class="fancybox fancybox.ajax" href="assets/img/fancybox/ajax.txt">Ajax</a></li>
			<li><a class="fancybox fancybox.iframe" href="assets/img/fancybox/iframe.html">Iframe</a></li>
			<li><a class="fancybox" href="http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf">Swf</a></li>
		</ul>
	
		<div id="inline1" style="width:400px;display: none;">
			<h3>Etiam quis mi eu elit</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
			</p>
		</div>
	
		<p>
			Ajax example will not run from your local computer and requires a server to run.
		</p>
	
		<h3>Button helper</h3>
		<p>
			<a class="fancybox-buttons" data-fancybox-group="button" href="/booted-beta/assets/img/fancybox/1_b.jpg"><img src="/booted-beta/assets/img/fancybox/1_s.jpg" alt="" /></a>
	
			<a class="fancybox-buttons" data-fancybox-group="button" href="/booted-beta/assets/img/fancybox/2_b.jpg"><img src="/booted-beta/assets/img/fancybox/2_s.jpg" alt="" /></a>
	
			<a class="fancybox-buttons" data-fancybox-group="button" href="/booted-beta/assets/img/fancybox/3_b.jpg"><img src="/booted-beta/assets/img/fancybox/3_s.jpg" alt="" /></a>
	
			<a class="fancybox-buttons" data-fancybox-group="button" href="/booted-beta/assets/img/fancybox/4_b.jpg"><img src="/booted-beta/assets/img/fancybox/4_s.jpg" alt="" /></a>
		</p>
	
		<h3>Thumbnail helper</h3>
		<p>
			<a class="fancybox-thumbs" data-fancybox-group="thumb" href="/booted-beta/assets/img/fancybox/4_b.jpg"><img src="/booted-beta/assets/img/fancybox/4_s.jpg" alt="" /></a>
	
			<a class="fancybox-thumbs" data-fancybox-group="thumb" href="/booted-beta/assets/img/fancybox/3_b.jpg"><img src="/booted-beta/assets/img/fancybox/3_s.jpg" alt="" /></a>
	
			<a class="fancybox-thumbs" data-fancybox-group="thumb" href="/booted-beta/assets/img/fancybox/2_b.jpg"><img src="/booted-beta/assets/img/fancybox/2_s.jpg" alt="" /></a>
	
			<a class="fancybox-thumbs" data-fancybox-group="thumb" href="/booted-beta/assets/img/fancybox/1_b.jpg"><img src="/booted-beta/assets/img/fancybox/1_s.jpg" alt="" /></a>
		</p>
	
		<h3>Media helper</h3>
		<p>
			Will not run from your local computer, requires a server to run.
		</p>
	
		<ul>
			<li><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Youtube</a></li>
			<li><a class="fancybox-media" href="http://vimeo.com/47480346">Vimeo</a></li>
			<li><a class="fancybox-media" href="http://www.metacafe.com/watch/7635964/">Metacafe</a></li>
			<li><a class="fancybox-media" href="http://www.dailymotion.com/video/xoeylt_electric-guest-this-head-i-hold_music">Dailymotion</a></li>
			<li><a class="fancybox-media" href="http://twitvid.com/QY7MD">Twitvid</a></li>
			<li><a class="fancybox-media" href="http://twitpic.com/7p93st">Twitpic</a></li>
			<li><a class="fancybox-media" href="http://instagr.am/p/IejkuUGxQn">Instagram</a></li>
		</ul>
	
		<h3>Open manually</h3>
		<ul>
			<li><a id="fancybox-manual-a" href="javascript:;">Open single item</a></li>
			<li><a id="fancybox-manual-b" href="javascript:;">Open single item, custom options</a></li>
			<li><a id="fancybox-manual-c" href="javascript:;">Open gallery</a></li>
		</ul>
	
		<p>
			Photo Credit: Instagrammer @whitjohns
		</p>
		
		
		
		
		
		
		
		
	</div><!-- End Container -->
	
		

</div>

    <?php include 'include/docs-footer.php'; ?>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="/booted-beta/assets/js/jquery.js"></script>
    
    
    <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/booted-beta/assets/js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/booted-beta/assets/js/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/booted-beta/assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/booted-beta/assets/css/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="/booted-beta/assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/booted-beta/assets/css/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="/booted-beta/assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="/booted-beta/assets/js/jquery.fancybox-media.js?v=1.0.6"></script>




    <script src="/booted-beta/assets/js/bootstrap-transition.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-alert.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-modal.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-dropdown.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-tab.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-tooltip.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-popover.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-button.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-collapse.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-carousel.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-typeahead.js"></script>
    <script src="/booted-beta/assets/js/bootstrap-affix.js"></script>

    <script src="/booted-beta/assets/js/holder/holder.js"></script>
    <script src="/booted-beta/assets/js/google-code-prettify/prettify.js"></script>

    <script src="/booted-beta/assets/js/application.js"></script>

    <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('assets/img/fancybox/1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'assets/img/fancybox/iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : 'assets/img/fancybox/1_b.jpg',
						title : 'My title'
					}, {
						href : 'assets/img/fancybox/2_b.jpg',
						title : '2nd title'
					}, {
						href : 'assets/img/fancybox/3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	
 

  </body>
</html>
