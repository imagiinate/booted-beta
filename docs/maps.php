<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">

    <!-- Le styles -->
    <link href="/booted-beta/assets/css/themes/united.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bs-docs.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,800,700" /> 
    
    <style>
      @media only screen and (min-width: 980px){
	      body {
	        padding-top: 40px; /* 60px to make the container go all the way to the bottom of the topbar */
	      }
      }
      
      h1, h2, h3 {font-family: 'Montserrat', sans-serif; line-height: 30px;}
      div#map-example {margin-top:20px; margin-bottom:20px;}

      

    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/booted-beta/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/booted-beta/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/booted-beta/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/booted-beta/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/booted-beta/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/booted-beta/assets/ico/favicon.png">
    
  </head>

  
  
  <body>
    <?php include '../include/docs-nav.php'; ?>

	<header class="jumbotron subhead" id="overview">
	  <div class="container">
	    <h1>gmaps.js </h1>
	    <p class="lead">Google Maps made easy.</p>
	  </div>
	</header>
	
	
	<section id="maps">
		<div class="container">
			<div class="row-fluid">	
				<div class="span9">
					<h1 class="header">Basic Example</h1>
			      	<hr />
			      	<div id="map-example" style="width:100%; height:300px; display:block;"></div>
			    </div> <!-- /container -->
		      	
		      	<div class="span3">
			        <h3>Using GMaps.js is as easy as:</h3>
			        <pre class="prettyprint"><span class="kwd">new</span><span class="pln"> </span><span class="typ">GMaps</span><span class="pun">({</span><span class="pln">
			  div</span><span class="pun">:</span><span class="pln"> </span><span class="str">'#map'</span><span class="pun">,</span><span class="pln">
			  lat</span><span class="pun">:</span><span class="pln"> </span><span class="pun">-</span><span class="lit">12.043333</span><span class="pun">,</span><span class="pln">
			  lng</span><span class="pun">:</span><span class="pln"> </span><span class="pun">-</span><span class="lit">77.028333</span><span class="pln">
			</span><span class="pun">});</span></pre>
			        <p>You must define <strong>container ID</strong>, <strong>latitude</strong> and <strong>longitude</strong> of the map's center.</p>
			        <p><span class="label notice">Note</span>You also can define <strong>zoom</strong>, <strong>width</strong> and <strong>height</strong>. By default, zoom is 15. Width an height in a CSS class will replace these values.</p>
			     </div>
			  </div>
	     </div> 	
     </section>
     
     
     
     <?php include '../include/docs-footer.php'; ?>
    
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/booted-beta/assets/js/jquery.js"></script>
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
    
    <!-- Maps Scripts -->
  <script src="http://maps.google.com/maps/api/js?sensor=true&.js"></script>
    <script src="/booted-beta/assets/js/gmaps.js"></script>
    
    <script type="text/javascript">
	    var map = new GMaps({
		    div: '#map-example',
		    lat: -12.043333,
		    lng: -77.028333
		});
    </script>
  <!-- End Maps Scripts -->

  </body>
</html>
