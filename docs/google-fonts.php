<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">

    <link rel="stylesheet" href="/booted-beta/assets/css/google-fonts-natural.css">
    
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
      
      /* h1, h2, h3 {font-family: 'Montserrat', sans-serif; line-height: 30px;} */
      div#map-example {margin-top:20px; margin-bottom:20px;}
      
      body style {
        margin: 10px 0;
        padding: 15px;
        display: block;
        line-height: 20px;
        font-family: "Monaco", "Consolas", monospace;
        white-space: pre-wrap;
        word-wrap: break-word;
        
      }
      

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
    
    <link href="/booted-beta/assets/css/metro-buttons/m-buttons.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/metro-buttons/m-forms.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/metro-buttons/m-icons.css" rel="stylesheet">
    
    
    
  </head>

  
  
  <body>
    <?php include '../include/docs-nav.php'; ?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Google Web Fonts Preview</h1>
    <p class="lead">Pick A Google Font. Help the web look better.
    </p>
    
    <form class="form-inline">
      <input type="text" size="48" class="m-wrap m-ctrl-large" value="Lorem ipsum dolor sit amet." id="sample-text">
      <input style="margin-top:0px;" type="button" class="m-btn red" value="Preview" disabled="disabled" id="preview">
    </form>
    
  </div>
</header>
	
	
    
    <section>
	    <div class="container">
	    	<div class="row-fluid">
	    		
			    <div class="span3">
				    <h3><i class="icon-arrow-down"></i> Edit Options Here</h3>
				    <div class="well-small well" style="padding: 0px 0px; background-color: #d3ecfe;">
					    <style contenteditable>/* You can edit preview style directly. */
						.preview {
						  color: inherit;
						  font-style: normal;
						  font-variant: normal;
						  font-weight: normal;
						  font-size: 46px;
						  text-decoration: none;
						  letter-spacing: 0;
						  word-spacing: 0;
						  text-transform: none;
						  text-shadow: none;
						  line-height: 60px;
						}</style>
					</div>
				</div>
				
				<div class="span9" >
				    <div style="margin: 20px 0px 20px 0px;"><h1>Google Web Fonts Preview</h1></div>
				    <div id="result" style="margin-top: 10px;">
				      <br />
				      <p>Edit text and font-size, then press &quot;Preview&quot;</p>
				    </div>
				</div>
			</div>
			<p>All Fonts are provided by <a href="http://www.google.com/fonts">Google Fonts</a>.</p>
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
  
  
  <script src="/booted-beta/assets/js/jquery.query-yql.min.js"></script>
    <script>
      var statement = "select * from json where url='https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyApMgI8vW2EfAFAeVa4hDvaLoaW9A3WY94&subsets=latin&sort=alpha'";

      $(function () {
        $.queryYQL(statement, function (d) {
          var fonts = d.query.results.json.items;

          for (var i = 0, l = fonts.length; i < l; i++) {
            var f = fonts[i];
            var v = $.isArray(f.variants) ? f.variants.join(",") : f.variants;
            var url = "http://fonts.googleapis.com/css?family=" + f.family.replace(/ /g, "+") + ":" + v; 
            $("head").append($("<link/>").attr({
              rel:  "stylesheet",
              href: url
            }));
          }

          $("#preview").click(function () {
            var t = $("#result").empty();
            var sampleText = $("#sample-text").val();

            for (var i = 0, l = fonts.length; i < l; i++) {
              var f = fonts[i].family;
              $("<p/>", {
                style: "font-family:'" + f + "',sans-serif"
              }).addClass("preview").append($("<a/>", {
                href: "http://www.google.com/fonts/family?family=" + f.replace(/ /g, "+")
              }).append(f)).append(": " + sampleText).appendTo(t);
            }
          }).prop("disabled", false);
        });
      });
    </script>

  </body>
</html>
