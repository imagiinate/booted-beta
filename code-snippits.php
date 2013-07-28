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
<!-- Google analytics 
    <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41573898-1', 'imagiinate.com');
  ga('send', 'pageview');
-->

</script>
  </head>
  
  <style>
  	
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
      <h1><i class="icon-code"></i> Code Snippits</h1>
      
    <!--
  <p class="lead">Extend Bootstrap's components—now with 12 custom jQuery plugins.</p>
      <p class="marketing-byline">Need reasons to love Booted? Look no further.</p>
    
-->
    </div>
  </div>
  
  


<div id="myCarousel" class="carousel slide carousel-fade">
	      <div class="carousel-inner">
	        <div class="item">
	          <img src="http://tripzonprostaging.tripserve.com/bs-assets/img/tripzon_stockImagery/Tripzon_StockImagery_12.JPG" alt="" width="1000px; ">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="slider-head rum-raisin">Design It. Book It. Experience It.</h1>
	              <p class="lead">Tripzon is a travel-packaging platform for building and booking complex trips.</p>
	              <a class="btn btn-large btn-info" href="#"><i class="icon-info-sign"></i> Learn more</a>&nbsp;&nbsp;
	              <a class="btn btn-large btn-primary" href="#"><i class="icon-rocket"></i> Get Started</a>
	              <!-- <a class="btn btn-large btn-primary" href="#">Learn more</a> -->
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img src="http://tripzonprostaging.tripserve.com/bs-assets/img/tripzon_stockImagery/Tripzon_StockImagery_48.JPG" alt="">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="slider-head rum-raisin">Itinerize your travel.</h1>
	              <p class="lead">Experience the first-ever “smart itinerary” system for flights, hotels, activities and more.</p>
	              <a class="btn btn-large btn-info" href="#"><i class="icon-info-sign"></i> Learn more</a>&nbsp;&nbsp;
	              <a class="btn btn-large btn-primary" href="#"><i class="icon-rocket"></i> Get Started</a>
	              <!-- <a class="btn btn-large btn-primary" href="#">Learn more</a> -->
	            </div>
	          </div>
	        </div>
	        <div class="item active">
	          <img src="http://tripzonprostaging.tripserve.com/bs-assets/img/tripzon_stockImagery/Tripzon_StockImagery_38.JPG" alt="">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1 class="slider-head rum-raisin">Travel that follows your imagination.</h1>
	              <p class="lead">Customize your perfect trip with as many destinations and items in one complete trip.</p>
	              <a class="btn btn-large btn-info" href="#"><i class="icon-info-sign"></i> Learn more</a>&nbsp;&nbsp;
	              <a class="btn btn-large btn-primary" href="#"><i class="icon-rocket"></i> Get Started</a>
	              <!-- <a class="btn btn-large btn-primary" href="#">Learn more</a> -->
	            </div>
	          </div>
	        </div>
	        
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-chevron-sign-left"></i> </a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-chevron-sign-right"></i> </a>
	</div>

	<div class="container">
	
	
	
		<div class="row" style="text-align:left; margin: 20px 0px 30px 0px;"> <!-- Working within existing container for now.. -->
			<ul class="breadcrumb pull-left">
			  <li><a href="/Default.aspx">Inspire Me</a> <span class="divider">/</span></li>
			  <li class="active">Travel Experts</li>
			</ul>
		    
		    
		    
			<!-- Start Bottom Hover Navigation --> 
		    <!-- /////////////////////////////////////////////////////////////////////// -->
			<!-- <div class="navbar-wrapper"> Bring Back for replacing top sub-nav for positioning-->
		      <div class="row-fluid">
		        <div class="navbar pull-right">
		          <div class="navbar-inner">
		            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <div class="nav-collapse collapse">
		              
		              
		              <ul class="nav">
		              	<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user"></i> Sign In <strong class="caret"></strong></a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
								<form class="inline" id="LoginForm" name="LoginForm" action="/Login.aspx" method="post" accept-charset="UTF-8">   
		            <fieldset id="">
			                <p>
			                    <label for="username">
			                        Email</label>
			                    <span id="ctl00_GenericHeader1_EmailContainer" title="username" name="username" type="text"><input type="text" id="requiredEmail" name="Email" value="user@google.com" onfocus=""></span>
			                </p>
			                <p>
			                    <label for="password">
			                        Password</label>
			                    <span id="ctl00_GenericHeader1_PasswordContainer" name="password" onkeypress="return submitenterlogin(this,event)" type="password"><input type="password" value="user@google.com" id="requiredPassword" name="Password" value="" onfocus=""></span>
			                </p>
			                <p class="remember">
			                    <a id="signin_submit" class="btn btn-med btn-info" value="Sign in" type="submit" href="#">Login</a>
			                    <input id="remember" type="checkbox" name="SaveCredentials" value="save"> Remember Me
			                </p>
			                
			                
			                
			                <div style="clear:both;"></div>
			                <a id="forgot_username_link" rel="forgotPassword" data-content="If you remember your password, try logging in with your email" href="/ForgottenPassword.aspx" data-original-title="" title=""><i class="icon-question-sign"></i> Forgotten Password?</a>
			                <div style="clear:both;"></div>
				            </fieldset>
				            	
				          </form>
						</div>
						</li>
					    <li><a href="#">Home</a> </li>
					    <li><a href="#"><i class="icon-lightbulb"></i> Get Inspired</a></li>
					    <li><a href="#">Pre-Built Trips</a></li>
					    <li><a href="#">Destinations</a> </li>
					    
					    <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explore <b class="caret"></b></a>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Blog</a> </li>
						    <li><a href="#">Help | Faq's</a> </li>
						    <li><a href="#">About</a> </li>
						    <li><a href="#">Contact Us</a> </li>
						    <li class="divider"></li>
		                    <li class="nav-header">Helpful Info</li>
		                    <li><a href="#">Pre-Built Trips</a></li>
		                    
		                    
		    				</ul>
		                </li>
		                
		              </ul>
		            </div><!--/.nav-collapse -->
		          </div><!-- /.navbar-inner -->
		        </div><!-- /.navbar -->
		      </div> <!-- /.container -->
		    <!--</div> Bring Back for replacing top sub-nav for positioning-->
		<!-- End Bottom Hover Navigation --> 
		<!-- /////////////////////////////////////////////////////////////////////// -->
		
		
		
		    <div style="clear:both;"></div>
		  
		  
		  
		  <!-- Start f1rst Boorstrap Row / Left nav and Right hero Unit
		================================================== -->
		<div class="row-fluid">
		    
		    <div class="span3">
		        <div class="well" style="padding: 8px 0;">
		            <ul class="nav nav-list">
		                <li class="nav-header">Main</li>
		                <li class="active"><a href="index"><i class="icon-home"></i>Dashboard</a></li>
		                <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
		                <li><a href="#"><i class="icon-picture"></i> Gallery</a></li>
		            </ul>
		        </div>
		        <div class="well" style="padding: 8px 0;">
		            <ul class="nav nav-list">
		                <li class="nav-header">User Profile</li>
		                <li><a href="#"><i class="icon-user"></i> Members</a></li>
		                <li><a href="#"><i class="icon-comment"></i> Comments</a></li>
		                <li class="divider"></li>
		                <li><a href="#">Help</a></li>
		            </ul>
		        </div>
		    </div>
		    
		    <div class="span9">
		        <div class="hero-unit">
		            <h1 class="lead">This Code Rocks!</h1>
		            <p>Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
		            
		            <a data-toggle="modal" href="#myModal" class="btn btn-inverse btn-large">Launch Modal</a>
		        </div>
		    </div>
		    
		</div>
		
		<!-- End first Boorstrap Row / Left nav and Right hero Unit
		================================================== -->   
		
		
		
		
			<h1 class="lead">What People are saying</h1>
			<div class="row-fluid ">
				<div class="span6">
				  <blockquote>
				    <p style="margin-bottom:10px;">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula porta felis euismod semper.</p>
				    <small>Someone famous in <cite title="Source Title">Travel</cite></small> </blockquote>
				</div>
				<div class="span6">
				  <blockquote class="pull-right">
				    <p style="margin-bottom:10px;">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligula porta felis euismod semper.</p>
				    <small>President <cite title="Source Title">Thomas Jefferson</cite></small> </blockquote>
				</div>
			</div>
		
		
		
		
		<hr> 
		
		
		  	<div class="row-fluid">
		      <div class="options-list options-rounded options-center">
		        <div class="span4">
		          <ul class="options-shrink">
		            <li class="options-head">Free</li>
		            <li>This option</li>
		            <li>That option</li>
		            <li>Maybe</li>
		            <li>Whynot?</li>
		            <li class="options-foot">$0.00</li>
		          </ul>
		        </div>
		        <div class="span4">
		          <ul class="options-zoom options-zoom-large">
		            <li class="options-head options-head-primary">Basic</li>
		            <li>Some option</li>
		            <li>Another option</li>
		            <li>Woohoo</li>
		            <li>Weehee</li>
		            <li class="options-foot">$4.00</li>
		          </ul>
		        </div>
		        <div class="span4">
		          <ul class="options-shrink">
		            <li class="options-head">Premium</li>
		            <li>Great option</li>
		            <li>Awesomeness</li>
		            <li>Excellent</li>
		            <li>Sleekness</li>
		            <li class="options-foot">$19.00</li>
		          </ul>
		        </div>
		        
		        </div><!--/options-list-->
		  	</div><!--/row-->
		    
		
		<hr> 
		
		
		 
		 
		
		
		   
		 
		<div class="row-fluid">
		   
		      	<div class="span3 block well well-med">
		          <div class="pull-center">
		            <h2><i class="icon-beaker icon-2x pull-left"></i></h2>
		            <h2>HTML5 & CSS3</h2>
		            <p style="padding-bottom:10px;">Take a look at what we mixed up in our Bootstrap test labs.
		            Nullam sapien massa, aliquam in cursus ut, ullamcorper in tortor.</p>
		            <button class="btn btn-primary btn-large">Go Here<i class="pull-right icon-chevron-right"></i></button>
		          </div>
		      	</div>
		      	<div class="span3 block well well-med">
		          <div class="pull-center">
		          	<h2><i class="icon-fire icon-2x pull-left"></i></h2>
		      	 	<h2>2013 Trends</h2>
		          	<p style="padding-bottom:10px;">With all of the front-end frameworks at hand, why does Bootstrap lead? 
		          	Aliquam mauris arcu, tristique a, condimentum feugiat justo.</p>
		          	<button class="btn btn-primary btn-large">Go There<i class="pull-right icon-chevron-right"></i></button>
		          </div>
		      	</div>
		      	<div class="span3 block well well-med">
		          <div class="pull-center">
		            <h2><i class="icon-hand-up icon-2x pull-left"></i></h2>
		            <h2>Thats Whats Up</h2>
		            <p style="padding-bottom:10px;">Take a look at what we mixed up in our Bootstrap test labs.
		            Nullam sapien massa, aliquam in cursus ut, ullamcorper in tortor.</p>
		            <button class="btn btn-primary btn-large">Go Here<i class="pull-right icon-chevron-right"></i></button>
		          </div>
		      	</div>
		      	<div class="span3 block well well-med">
		          <div class="pull-center">
		          	<h2><i class="icon-magic icon-2x pull-left"></i></h2>
		      	 	<h2>Magic</h2>
		          	<p style="padding-bottom:10px;">With all of the front-end frameworks at hand, why does Bootstrap lead? 
		          	Aliquam mauris arcu, tristique a, condimentum feugiat justo.</p>
		          	<button class="btn btn-primary btn-large">Go There<i class="pull-right icon-chevron-right"></i></button>
		          </div>
		      	</div>
		      	
		      	
		      
		  </div> 
		<div style="clear:both;"></div>      
		
		<hr> 
		
		
		
		
		
		 
		    <div class="row-fluid cards cards-200 cards-borderless">
		      
		    <div class="span4">
		      <ul class="card well">
		        <li>
		          <img style="width:200px; height:200px;" src="http://www.shangri-la.com/uploadedImages/Shangri-la_Hotels/Shangri-La_Abu_Dhabi/SLAD-Bg-Hotel-Exterior.jpg" class="img-circle">
		          <p>
		          <strong>
		          "@Bootply is simply pure genius! Very sweet and very useful."</strong> - @LoveBoostrap
		          </p>
		          <button type="button" class="btn btn-large btn-primary">Large button</button>
		        </li>
		        
		      </ul>
		    </div>
		    <div class="span4">
		    	<ul class="card well">
		          <li>
		            <img style="width:200px; height:200px;" src="http://obviousmag.org/archives/uploads/2008/08061604_blog.uncovering.org_poseidon.jpg" class="img-circle">
		            <p><strong>
		              "Web developers can now fiddle with Bootstrap 3.0"</strong> - @OnSocialMedia
		            </p>
		            <button type="button" class="btn btn-large btn-primary">Large button</button>
		          </li>
		          
		      	</ul>
		    </div>
		    <div class="span4">
		      <ul class="card well">
		        <li>
		          <img style="width:200px; height:200px;" src="http://1001traveldestinations.files.wordpress.com/2013/02/1001-travel-destinations-tanzania-kilimanjaro-highest-mountain-in-africa-photo.jpg" class="img-circle">
		          <p>
		          <strong>
		          "@Bootply Awesome! Very impressed with Bootply"</strong> - @ETFuel
		          </p>
		          <button type="button" class="btn btn-large btn-primary">Large button</button>
		        </li>
		      </ul>
		    </div>
		      
		</div><!--/row-->
		 
		 
		 
		<div style="clear:both;"></div>
		<hr> 
		
		    
		    
		<h1>Blockquotes</h1>
		<div class="row-fluid">
			<div class="span6">
			  <blockquote>
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			    <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
			</div>
			<div class="span6">
			  <blockquote class="pull-right">
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			    <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
			</div>
		</div>
		<hr>
		    
		    
		    	
		<div class="row-fluid">
		    <h1>Scenic Hotels</h1>
		    <ul class="thumbnails">
		        <li class="span3"><a href="#" class="thumbnail">
		            <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="http://obviousmag.org/archives/uploads/2008/08061604_blog.uncovering.org_poseidon.jpg">
		        </a></li>
		        <li class="span3"><a href="#" class="thumbnail">
		            <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="http://www.shangri-la.com/uploadedImages/Shangri-la_Hotels/Shangri-La_Abu_Dhabi/SLAD-Bg-Hotel-Exterior.jpg">
		        </a></li>
		        <li class="span3"><a href="#" class="thumbnail">
		            <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="http://www.panamacanalcountry.com/amador/images/Hotel_Pool_and_Bridge.JPG">
		        </a></li>
		        <li class="span3"><a href="#" class="thumbnail">
		            <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="http://1001traveldestinations.files.wordpress.com/2013/02/1001-travel-destinations-tanzania-kilimanjaro-highest-mountain-in-africa-photo.jpg">
		        </a></li>
		    </ul>
		</div>
		      
		        
		<!-- ////////////////// Start New Accordian Slider Showcase 4-grid in a row -->
		<div style="clear:both;"></div>
		<hr> 
		
		<div class="row-fluid">
			<h1>Most Popular Trips</h1>
		    <ul class="thumbnails">
		        <li class="span4">
		            <div class="thumbnail">
		                <img data-src="holder.js/300x200" alt="300x200" src="http://www.deshow.net/d/file/travel/2009-06/italy-tourist-593-6.jpg">
		                <div class="caption">
		                    <h3>
		                        Thumbnail label &nbsp;<span class="label label-info">Info</span></h3>
		                    <p>
		                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
		                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    <p>
		                        <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
		                </div>
		            </div>
		        </li>
		        <li class="span4">
		            <div class="thumbnail">
		                <img data-src="holder.js/300x200" alt="300x200" src="http://obviousmag.org/archives/uploads/2008/08061604_blog.uncovering.org_poseidon.jpg">
		                <div class="caption">
		                    <h3>
		                        Thumbnail label &nbsp;<span class="label label-important">Important</span></h3>
		                    <p>
		                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
		                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    <p>
		                        <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
		                </div>
		            </div>
		        </li>
		        <li class="span4">
		            <div class="thumbnail">
		                <img data-src="holder.js/300x200" alt="300x200" src="http://www.sharewonders.com/wp-content/uploads/2012/01/00233806.jpg">
		                <div class="caption">
		                    <h3>
		                        Thumbnail label &nbsp;<span class="label label-warning">Warning</span></h3>
		                    <p>
		                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
		                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    <p>
		                        <a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
		                </div>
		            </div>
		        </li>
		    </ul>
		</div>
		
		<hr>
		    
		    
		    
		<!-- ////////////////// Start New Accordian Slider Showcase 4-grid in a row -->
		      
		<h1>Tabs ~ Features, Articles &amp; Price Grid!</h1>     
		<hr />  
		<div class="row-fluid">
		    <div class="span12">
		        <div id="tab" class="btn-group" data-toggle="buttons-radio">
		            <a href="#features" class="btn btn-info active" data-toggle="tab">Features</a> 
		            <a href="#prices" class="btn btn-info" data-toggle="tab">Prices</a> 
		            <a href="#articles" class="btn btn-info" data-toggle="tab">Articles</a> 
		            
		        </div>
		        
		        <div class="tab-content">
		            <div class="tab-pane active" id="features">
		                <div class="row-fluid" style="margin-bottom: 20px;">
				            <div class="span3">
				                <h3>
				                    <i class="icon icon-globe"></i> Description 1</h3>
				                <p>
				                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
				                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				            </div>
				            <div class="span3">
				                <h3>
				                    <i class="icon-ok"></i> Description 2</h3>
				                <p>
				                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
				                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				            </div>
				            <div class="span3">
				                <h3>
				                    <i class="icon-bold"></i> Description 3</h3>
				                <p>
				                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
				                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				            </div>
				            <div class="span3">
				                <h3>
				                    <i class="icon icon-star"></i> Description 4</h3>
				                <p>
				                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
				                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				            </div>
				        </div>
		            </div>
		            <!-- End Tab Pane -->
		            
		            <div class="tab-pane" id="prices">
		                <div class="row-fluid">
		                    <div class="span4">
								<div class="well">
									<h2 class="muted">Silver</h2>
									<p><span class="label">POPULAR</span></p>
									<ul>
										<li>10 users</li>
										<li>Unlimited access</li>
										<li>3TB of space</li>
										<li>E-mail support</li>
									</ul>          
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
									<hr>
									<h3>$15.99 / month</h3>
									<hr>
									<p><a class="btn btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
								</div>
							</div>
							<div class="span4">
								<div class="well">
									<h2 class="text-warning">Bronze</h2>
									<p><span class="label label-success">POPULAR</span></p>
									<ul>
										<li>20 users</li>
										<li>Unlimited access with no limits</li>
										<li>5TB of space</li>
									</ul>          
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
									<hr>
									<h3>$10.99 / month</h3>
									<hr>
									<p><a class="btn btn-success btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
								</div>
							</div>
							<div class="span4">
								<div class="well">
									<h2 class="text-info">Economy</h2>
									<p><span class="label label-info">BUDGET</span></p>
									<ul>
										<li>10 users</li>
										<li>5TB of space</li>
									</ul>          
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
									<hr>
									<h3>$8.99 / month</h3>
									<hr>
							      <p><a class="btn btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
								</div>
							</div>
						</div>
		            </div>
		            <!-- End Tab Pane -->
		            
		            
		            
		            
		            <div class="tab-pane" id="articles">
						    <div class="row-fluid">
						      <div class="span12">
						        <h4><strong><a href="#">Title of the post</a></strong></h4>
						      </div>
						    </div>
						    
						    <div class="row-fluid">
						      
						      <div class="span3">
						        <a href="#" class="thumbnail">
						            <img src="http://placehold.it/260x180" alt="">
						        </a>
						      </div>
						      
						      <div class="span9">      
						        <p>
						          <i class="icon-user"></i> by <a href="#">John</a> 
						          | <i class="icon-calendar"></i> Sept 16th, 2012
						          | <i class="icon-comment"></i> <a href="#">3 Comments</a>
						          | <i class="icon-share"></i> <a href="#">39 Shares</a>
						          
						          <br>
						          <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a> 
						          <a href="#"><span class="label label-info">Bootstrap</span></a> 
						          <a href="#"><span class="label label-info">UI</span></a> 
						          <a href="#"><span class="label label-info">growth</span></a>
						        </p>
						        
						        <p>
						          Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
						        </p>
						        <p><a class="btn" href="#">Read more</a></p>
						      </div>
						    </div>
						    
						    <hr><!-- Post Divider -->
						    
						    <div class="row">
						      <div class="span12">
						        <h4><strong><a href="#">Title of the post</a></strong></h4>
						      </div>
						    </div>
						    
						    <div class="row">
						      
						      <div class="span3">
						        <a href="#" class="thumbnail">
						            <img src="http://placehold.it/260x180" alt="">
						        </a>
						      </div>
						      
						      <div class="span9">      
						        <p>
						          <i class="icon-user"></i> by <a href="#">John</a> 
						          | <i class="icon-calendar"></i> Sept 16th, 2012
						          | <i class="icon-comment"></i> <a href="#">3 Comments</a>
						          | <i class="icon-share"></i> <a href="#">39 Shares</a>
						          
						          <br>
						          <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a> 
						          <a href="#"><span class="label label-info">Bootstrap</span></a> 
						          <a href="#"><span class="label label-info">UI</span></a> 
						          <a href="#"><span class="label label-info">growth</span></a>
						        </p>
						        
						        <p>
						          Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
						        </p>
						        <p><a class="btn" href="#">Read more</a></p>
						      </div>
						    </div>
						    
						   <!-- End Post -->
						   
					</div><!-- End Tab Pane -->
		            
		            
		        </div>
		    </div>
		</div>
		<hr>
		
		
		
		
		      
					
			<hr>		
		
		
		
		   
		<!-- Price Table -->  
		<div class="row-fluid">
			<div class="span12">
				
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th> </th>
							<th>Fluid 512</th>
							<th>Fluid 1024</th>
							<th>Fluid 2048</th>
							<th>Fluid 4096</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ram</td>
							<td>512MB</td>
							<td>1024MB</td>
							<td>2048MB</td>
							<td>4096MB</td>
						</tr>
						<tr>
							<td>Disk Space</td>
							<td>25GB</td>
							<td>50GB</td>
							<td>100GB</td>
							<td>200GB</td>
						</tr>
						<tr>
							<td>CPU Cores</td>
							<td>1</td>
							<td>2</td>
							<td>4</td>
							<td>6</td>
						</tr>
						<tr>
							<td>Swap</td>
							<td>512MB</td>
							<td>1024MB</td>
							<td>1024MB</td>
							<td>2048MB</td>
						</tr>
						<tr>
							<td>Bandwidth</td>
							<td>200GB</td>
							<td>400GB</td>
							<td>800GB</td>
							<td>1600GB</td>
						</tr>
						<tr>
							<td> </td>
							<td> </td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>Monthly</td>
							<td>$16.95/month</td>
							<td>$32.95/month</td>
							<td>$64.95/month</td>
							<td>$128.95/month</td>
						</tr>
						<tr>
							<td>Quarterly</td>
							<td>$16.44/month</td>
							<td>$31.96/month</td>
							<td>$63.00/month</td>
							<td>$125.08/month</td>
						</tr>
						<tr>
							<td>Yearly</td>
							<td>$15.26/month</td>
							<td>$29.66/month</td>
							<td>$58.46/month</td>
							<td>$116.06/month</td>
						</tr>
						<tr>
							<td> </td>
							<td><a class="btn btn-error" href="#"><i class="icon-shopping-cart icon-white"></i> Order »</a></td>
							<td><a class="btn btn-primary" href="#"><i class="icon-shopping-cart icon-white"></i> Order »</a></td>
							<td><a class="btn btn-info" href="#"><i class="icon-shopping-cart icon-white"></i> Order »</a></td>
							<td><a class="btn btn-danger" href="#"><i class="icon-shopping-cart icon-white"></i> Order »</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<!-- End Price Table -->
		       
		 <div style="clear:both;"></div>
		<hr>       
		       
		     
		     
		     
		     
		<!--  Start Boxes -->
		<!-- Im in a row-fluid class so It spans 100% of the outer container -->
		<h1>Boxes and Contact</h1>
		<div class="row-fluid">  
			<ul class="thumbnails">
				<li class="span6 clearfix">
				  <div class="thumbnail clearfix">
				    <img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span5 clearfix" style="margin-right:10px">
				    <div class="caption">
				      <button type="submit" class="btn btn-primary pull-right">Select</button>
				      <h4>      
				      <a href="#">Luis Felipe Kaufmann</a>
				      </h4>
				      <small><b>RG: </b>99384877</small>
				    </div>
				  </div>
				</li>
				  <li class="span6 clearfix">
				  <div class="thumbnail clearfix">
				    <img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span5 clearfix" style="margin-right:10px">
				    <div class="caption">
				      <button type="submit" class="btn btn-primary pull-right">Select</button>
				      <h4>      
				      <a href="#">Luis Felipe Kaufmann</a>
				      </h4>
				      <small><b>RG: </b>99384877</small>
				    </div>
				  </div>
				</li>
			</ul>  
		</div>
		
		<!--  End Boxes -->      
		       
		
		
		
		<!--  Start Contact -->
		<!-- Im in a row-fluid class so It spans 100% of the outer container -->
		<div class="row-fluid"> 
			  <div class="well well-large">
					<div class="span4">
						<label>First Name</label>
						<input type="text" class="span12" placeholder="Your First Name">
						<label>Last Name</label>
						<input type="text" class="span12" placeholder="Your Last Name">
						<label>Email Address</label>
						<input type="text" class="span12" placeholder="Your email address">
			          	<label>Subject</label>
						<select id="subject" name="subject" class="span12">
							<option value="na" selected="">Choose One:</option>
							<option value="service">General Customer Service</option>
							<option value="suggestions">Suggestions</option>
							<option value="product">Product Support</option>
						</select>
					</div>
					<div class="span8">
						<label>Message</label>
						<textarea name="message" id="message" class="input-xlarge span12" rows="10"></textarea>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Send</button>
				 <div style="clear:both;"></div>
					
			</div>
			
		</div>
		<!-- End Contact Well -->    
		
		
		       
		
		
		<hr />
		
		
		
		
		
		
		
		<div class="row-fluid" >
				<div class="span4">
		            
		        <!-- Keep the control below, just replace the block with this HTML -->
		            <h3><i style="color:#f97a07;" class="icon-comments icon-2x"></i>&nbsp; Testimonials</h3>
		            <blockquote>
		            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		            	<small>Someone famous in <cite title="Source Title">Source Title</cite></small> 
		            </blockquote>
		            <blockquote>
		            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		            	<small>Someone famous in <cite title="Source Title">Source Title</cite></small> 
		            </blockquote>
		       <!-- END Keep the control below, just replace the block with this HTML -->
		            
		         </div>
		         
		         <div class="span4">
		            
		            <h3><i style="color:#f97a07;" class="icon-2x icon-globe pull-left"></i> Get Going</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <p class="lead"><a class="btn btn-med btn-info" href="/"><i class="icon-beaker"></i> Chocolate Button</a></p>
		         </div>
		         <div class="span4">
		            
		            <h3><i style="color:#f97a07;" class="icon-2x icon-lightbulb pull-left"></i> Get Inspired</h3>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <p class="lead"><a class="btn btn-med btn-info" href="/"><i class="icon-heart"></i> Favorite Food</a></p>
		         </div>
		</div>
	</div>

</div>

    <?php include 'include/docs-footer.php'; ?>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
    <script src="/booted-beta/assets/js/bootstrap-affix.js"></script>

    <script src="/booted-beta/assets/js/holder/holder.js"></script>
    <script src="/booted-beta/assets/js/google-code-prettify/prettify.js"></script>

    <script src="/booted-beta/assets/js/application.js"></script>

    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" role="button" class="btn popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
       </div>
 

  </body>
</html>
