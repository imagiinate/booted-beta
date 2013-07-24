<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Metro buttons · Twittstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="twittstrap.com">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/bs-docs.css" rel="stylesheet">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <!-- Google analytics 
    <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41573898-1', 'twittstrap.com');
  ga('send', 'pageview');
-->

</script>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

   	<?php include '../include/docs-nav.php'; ?>


<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>CSS 3 Microsoft Metro buttons period :)</h1>
    <p class="lead">Twittstrap includes metro buttons for the folks around the <i class="icon-globe icon-5x"></i>.</p>
  </div>
</header>

  <div class="container">
	<div class="row">
   		<div class="span12">
    		<section>      	
    			<div class="page-header"><h2>Button Classes</h2></div>
    
                <h3>Buttons</h3>
                <p>
                  To create a modern-styled button, just add <code>class="m-btn"</code> to
                  any <code>&lt;a></code>, <code>&lt;button></code>, or 
                  <code>&lt;input></code> html element. Viola! You now have a basic modern-styled button.
                </p>
                
                    <div class="example">
                        <form>
                            <a class="m-btn">New Comment (link)</a>
                            <input class="m-btn" type="submit" value="New Comment (submit)" />
                            <button class="m-btn">New Comment (button)</button>
                        </form>
                    </div>            
                        <pre class="code prettyprint"><code>&lt;form>
    &lt;a href="#" class="m-btn">Post comment&lt;/a>
    &lt;input class="m-btn" type="submit" value="New Comment (submit)" />
    &lt;button class="m-btn">New Comment (button)&lt;/button>
&lt;/form></code></pre>
                    
              
            </section>   
  
    		<section>
        		<h3>Colored Buttons</h3>
                <p>
                  To get some color to your buttons, you can do this by adding the 
                  <code>blue</code>, <code>red</code>, <code>purple</code>, <code>black</code> or <code>green</code> class to your button.
                </p>
                <div class="example">                    
                    <a href="#button" class="m-btn blue">Color Blue</a>
                    <a href="#button" class="m-btn red">Color Red</a>            
                    <a href="#button" class="m-btn purple">Color Purple</a>
                    <a href="#button" class="m-btn green">Color Green</a>
                    <a href="#button" class="m-btn black">Color Black</a>
                </div>
                <pre class="prettyprint"><code>&lt;a href="#" class="m-btn red">Color Red&lt;/a></code></pre>                
    		</section>

            
            
    
            <section>    	
                <h3>Striped buttons</h3>
                <p>
                  If you prefer the buttons having "color highlights" instead of filling it up with one color, you can
                  use the <code>{color}-stripe</code> class. You'll get some stripes on the buttons like those being used at Microsoft's 
                  Windows Azure website. Just use any of the <code>blue</code>, <code>red</code>, <code>purple</code> or <code>green</code> color classes above and put <code>-stripe</code> next to it. Examples can 
                  be seen below.
                </p>
        		<div class="example">            
                    <a class="m-btn red-stripe">Red stripe</a>
                    <a class="m-btn purple-stripe">Purple Stripe</a>
                </div>
              	<pre class="code prettyprint"><code>&lt;a href="#" class="m-btn red-stripe">Red Stripe&lt;/a>
&lt;a href="#" class="m-btn purple-stripe">Purple stripe&lt;/a></code></pre>       		
    		</section>
        
    		<section>
		        <h3>Disabled Buttons</h3>
        		<p>
		        	To depict a disabled button, it needs to look like it's unusable.
	        		Add the <code>disabled</code> class for displaying a disabled button. Special note: This style automatically appears
    			    when you use the <code>disabled</code> attribute in the element, no need to class it within the class attribute.
			        Same goes for the <code>active</code> classes.
		        </p>    
		        <div class="example">
                	<a href="#button" class="m-btn disabled">Preview</a>
		            <a href="#button" class="m-btn" disabled>Preview</a>
        		 	<a href="#button" class="m-btn red disabled">Delete</i></a>
		            <a href="#button" class="m-btn red" disabled>Delete</i></a>
                    <a href="#button" class="m-btn black" disabled>Delete</i></a>

        	    </div>
        		    <pre class="prettyprint"><code>&lt;a href="#" class="m-btn disabled">Preview&lt;/a>
&lt;a href="#" class="m-btn" disabled>Preview&lt;/a>
&lt;a href="#" class="m-btn red disabled">Delete&lt;/a>
&lt;a href="#" class="m-btn red" disabled>Delete&lt;/a></code></pre>
			        
			</section>    
		   	<section>
                <h3>Button sizes</h3>
                <p>
                  You can also get the buttons in different sizes. Use the
                  <code>sm</code> class to shrink the text in buttons. To shrink the button itself
                  along with the size of the text, use the <code>mini</code> class. Lastly, there's the <code>big</code> class for 
                  those tile-like buttons.          
                </p>
    
                <div class="example">
                	<a href="#button" class="m-btn mini">Mini size</a>
                    <a href="#button" class="m-btn sm">Default size</a>            
                    <a href="#button" class="m-btn big">Large size</a>
                </div>  
                    <pre class="prettyprint"><code>&lt;a href="#" class="m-btn mini">Mini size&lt;/a>
&lt;a href="#" class="m-btn sm">Default size&lt;/a>
&lt;a href="#" class="m-btn big">Large size&lt;/a></code></pre>
                          
                <p>You can also mix and match the color classes and the size classes. Here are some examples:</p>
                <div class="example">            
                    <a href="#button" class="m-btn mini red">Delete</a>
                    <a href="#button" class="m-btn blue">Submit Entry</a>            
                    <a href="#button" class="m-btn big purple">See pricing options</a>
                </div>
    		</section>
    
            <section>
                <h3>Button groups</h3>
                <p>
                  To group together a handful of buttons, just wrap them in an element that has 
                  the <code>m-btn-group</code> class.
                </p>
        
       			<div class="example">
                	<div class="m-btn-group">
                        <a href="#button" class="m-btn">Left</a>
                        <a href="#button" class="m-btn">Center</a>
                        <a href="#button" class="m-btn">Right</a>
                    </div>
   		  </div>
					<pre class="prettyprint"><code>&lt;div class="m-btn-group">
    &lt;a href="#" class="m-btn">Left&lt;/a>
    &lt;a href="#" class="m-btn">Center&lt;/a>
    &lt;a href="#" class="m-btn">Right&lt;/a>
&lt;/div></code></pre>
        			
    		</section>

            <section>
                <h3>Button strips</h3>
                <p>
                  Creating a sequence of button groups resembling a loosely coupled toolbar can be achieved 
                  with the class <code>m-btn-strip</code>. It wraps all the button groups in a horizontal
                  manner to resemble a strip of buttons.
                </p>
                
                <div class="example">
                	<div class="m-btn-strip">
                        <a href="#button" class="m-btn">Compose New</a>
                        
                        <div class="m-btn-group">
                            <a href="#button" class="m-btn">Archive</a>
                            <a href="#button" class="m-btn">Spam</a>
                            <a href="#button" class="m-btn">Delete</a>
                        </div>
                                            
                        <div class="m-btn-group">
                            <a href="#button" class="m-btn">Move to</a>
                            <a href="#button" class="m-btn">Labels</a>
                      </div>
        
                        <a href="#button" class="m-btn">More</a>
                    </div>
                </div>
        			<pre class="prettyprint"><code>&lt;div class="<b>m-btn-strip</b>">
    &lt;a href="#" class="m-btn">Compose New&lt;/a>
    
    &lt;div class="m-btn-group">
        &lt;a href="#" class="m-btn">Archive&lt;/a>
        &lt;a href="#" class="m-btn">Spam&lt;/a>
        &lt;a href="#" class="m-btn">Delete&lt;/a>
    &lt;/div>
                        
    &lt;div class="m-btn-group">
        &lt;a href="#" class="m-btn">Move to&lt;/a>
        &lt;a href="#" class="m-btn">Labels&lt;/a>
    &lt;/div>

    &lt;a href="#" class="m-btn">More&lt;/a>
&lt;/div></code></pre>                    
            </section>   
    
    		<section>
                <div class="page-header"><h2>Icon Components</h2></div>
                <h3>Icon classes</h3>
                <p>
                The icons that you can use for the buttons are also taken from the glyphicons image sprite used by Twitter Bootstrap.
                <a href="http://twitter.github.com/bootstrap/base-css.html#icons">Twitter Bootstrap</a> has a great array of documents
                for the complete list of icons in the glyphicon sprite, their respective CSS class names and how to use those icon classes.
                </p>
                
                <p>
                I've also provided those "Swap Arrows" in one sprite. These are the arrows extensively being used by Microsoft.
                Thanks to Syncfusion and their awesome Metro Studio.
                </p>
                <p>
                <strong>Note:</strong> if the icons does not seem to appear, double check the filepath in the css files. The default folder path for the 
                icons is <code>../img/</code>
                </p>
                <div class="example">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Class</th>
                                <th scope="col">Icon</th>                        
                            </tr>
                        </thead>
                        <tr>
                            <td scope="row"><code>.m-icon-swapright</code></td>
                            <td><i class="m-icon-swapright"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-swapleft</code></td>
                            <td><i class="m-icon-swapleft"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-swapup</code></td>
                            <td><i class="m-icon-swapup"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-swapdown</code></td>
                            <td><i class="m-icon-swapdown"></i></td>
                        </tr>  
                        <tr>
                            <td scope="row"><code>.m-icon-big-swapright</code></td>
                            <td><i class="m-icon-big-swapright"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-big-swapleft</code></td>
                            <td><i class="m-icon-big-swapleft"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-big-swapup</code></td>
                            <td><i class="m-icon-big-swapup"></i></td>
                        </tr>
                        <tr>
                            <td scope="row"><code>.m-icon-big-swapdown</code></td>
                            <td><i class="m-icon-big-swapdown"></i></td>
                        </tr>                
                    </table>
                </div>
                <p>You can also use the white counter-parts of the icons above by adding the <code>m-icon-white</code> class.</p>        
            </section>
            <section>
                <h3>Icon buttons</h3>
                <p>
                  To create a button using an icon, add the
                  <code>icn-only</code> class. Then use the icon class inside the button, just as shown below. 
                </p>        
                <div class="example">
                	<a class="m-btn icn-only"><i class="icon-share"></i></a>
                    <a class="m-btn red icn-only"><i class="icon-remove icon-white"></i></a>
                    <a class="m-btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></a>
                </div>  
					<pre class="prettyprint"><code>&lt;a href="#" class="m-btn icn-only">&lt;i class="icon-share">&lt;/i>&lt;/a>
&lt;a href="#" class="m-btn red icn-only">&lt;i class="icon-remove icon-white">&lt;/i>&lt;/a>
&lt;a href="#" class="m-btn blue icn-only">&lt;i class="m-icon-swapright m-icon-white">&lt;/i>&lt;/a>
</code></pre>

                         
        		<p>Grouping them together to achieve the same buttons for Gmail's paginator is quite easy.</p>
        
        		<div class="example">
                	<div class="m-btn-group">
                        <a class="m-btn icn-only"><i class="icon-chevron-left"></i></a>
                        <a class="m-btn icn-only"><i class="icon-chevron-right"></i></a>
                    </div>
		  </div>  
					<pre class="prettyprint"><code>&lt;div class="m-btn-group">
    &lt;a href="#" class="m-btn icn-only">&lt;i class="icon-chevron-left">&lt;/i>&lt;/a>
    &lt;a href="#" class="m-btn icn-only">&lt;i class="icon-chevron-right">&lt;/i>&lt;/a>
&lt;div></code></pre>      
                <p>To create large icon buttons using the big swap arrows that was provided, just use the <code>bigicn-only</code> 
                CSS class.</p>        
        		<div class="example">
                	<a class="m-btn bigicn-only"><i class="m-icon-big-swapright"></i></a>
       	            <a class="m-btn bigicn-only green"><i class="m-icon-big-swapright m-icon-white"></i></a>           
        		</div>
					<pre class="prettyprint"><code>&lt;a href="#" class="m-btn bigicn-only">&lt;i class="m-icon-big-swapright">&lt;/i>&lt;/a>
&lt;a href="#" class="m-btn bigicn-only green">&lt;i class="m-icon-big-swapright icon-white">&lt;/i>&lt;/a></code></pre>	                
		    </section>
   			<section>
                <h3>Buttons with both text and icon</h3>
                <p>
                  So far we know how to create a button with text in it. We also have tackled how to create a button with only an icon in it.
                  This time let's get a bunch of buttons with both text and icon in it.
                </p>

                <div class="example">
                	<a class="m-btn mini red"><i class="icon-trash icon-white"></i> Delete</a>
                    <a class="m-btn"><i class="icon-plus"></i> Add Item</a> 
                    <a class="m-btn purple-stripe">Listen to podcast <i class="icon-headphones"></i></a>
                    <a class="m-btn blue">Submit Entry  <i class="icon-share-alt icon-white"></i></a>
                    <a class="m-btn purple big">See pricing options <i class="m-icon-big-swapright m-icon-white"></i></a>
                </div>     
                    <pre class="prettyprint"><code>&lt;a href="#" class="m-btn mini red">&lt;i class="icon-trash">&lt;/i> Delete Item&lt;/a>
&lt;a href="#" class="m-btn">&lt;i class="icon-plus">&lt;/i> Add Item&lt;/a>
&lt;a class="m-btn purple-stripe">Listen to podcast &lt;i class="icon-headphones">&lt;/i>&lt;/a>
&lt;a href="#" class="m-btn blue">&lt;i class="icon-plus">&lt;/i> Submit Entry&lt;/a>
&lt;a class="m-btn purple big">See pricing options &lt;i class="m-icon-big-swapright m-icon-white">&lt;/i>&lt;/a></code></pre>          
                     
    		</section>
    
    		
    		      
    	</div>    
	</div>
</div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
              <p>Created by <a href="http://twitter.com/twittstrap" target="_blank">@twittstrap</a>.</p>
        <p>Twitter bootstrap was designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://ace-subido.github.io/css3-microsoft-metro-buttons/"> CSS3 Microsoft Modern Buttons</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/bootstrap-affix.js"></script>

    <script src="../assets/js/holder/holder.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>


  </body>
</html>
