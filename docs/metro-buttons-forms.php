<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Metro forms · Booted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">

    <!-- Le styles -->
    <link href="/booted-beta/assets/css/themes/united.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bs-docs.css" rel="stylesheet">
    <link href="/booted-beta/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <link href="/booted-beta/assets/css/metro-buttons/m-buttons.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/metro-buttons/m-forms.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/metro-buttons/m-icons.css" rel="stylesheet">
    
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

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

   	<?php include '../include/docs-nav.php'; ?>


<div class="jumbotron subhead">
  <div class="container">
    <h1>Booted - CSS3 Metro Buttons & Forms</h1>
    <p>CSS3 Metro Buttons helps you easily re-create those stylish buttons used by Microsoft on their websites.</p>
    
    
  </div>
</div>

  
	<div class="container">
	
	
	
	
	
	<!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#intro"><i class="icon-chevron-right"></i> Say Hello To Metro :)</a></li>
          <li class="nav-header">Metro Buttons</li>
          <li><a href="#button-classes"><i class="icon-chevron-right"></i> Button Classes</a></li>
          <li><a href="#colored-buttons"><i class="icon-chevron-right"></i> Colored Buttons</a></li>
          <li><a href="#striped-buttons"><i class="icon-chevron-right"></i> Striped Buttons</a></li>
          <li><a href="#disabled-buttons"><i class="icon-chevron-right"></i> Disabled Buttons</a></li>
          <li><a href="#button-sizes"><i class="icon-chevron-right"></i> Button Sizes</a></li>
          <li><a href="#button-groups"><i class="icon-chevron-right"></i> Button Groups</a></li>
          <li><a href="#button-strips"><i class="icon-chevron-right"></i> Button Strips</a></li>
          <li><a href="#icon-classes"><i class="icon-chevron-right"></i> Icon Classes</a></li>
          <li><a href="#icon-buttons"><i class="icon-chevron-right"></i> Icon Buttons</a></li>
          <li><a href="#uttons-text-icon"><i class="icon-chevron-right"></i> Buttons w/Text & Icon</a></li>

          
          <li class="nav-header">Metro Forms</li>
          <li><a href="#form-elements"><i class="icon-chevron-right"></i> Form Elements</a></li>
          <li><a href="#buttons-checkboxes"><i class="icon-chevron-right"></i> Radio Buttons / Checkboxes</a></li>
          <li><a href="#inline-buttons-checkboxes"><i class="icon-chevron-right"></i> Inline Radio Buttons / Checkboxes</a></li>
          <li><a href="#dropdown-lists"><i class="icon-chevron-right"></i> Drowdown Lists & Views</a></li>
          <li><a href="#filepicker"><i class="icon-chevron-right"></i> File Picker</a></li>
          <li><a href="#appended-controls"><i class="icon-chevron-right"></i> Appended Controls</a></li>
          
        </ul>
      </div>
      <div class="span9">	
    		
    		
    		<section id="intro">
    			<div class="row-fluid">
		            <h1>Say hello to <strong>CSS3 Metro Buttons</strong></h1>
		            <p>A light-weight and easy-to-use CSS/JS library that uses CSS3 styles for rich button design.</p>
			    </div>
			    
			    <div class="row-fluid">
				    <div class="span6">         
		            	<img src="/booted-beta/assets/img/need.png">
		                <h3>Created from a need.</h3>            
		                <p>
		                    Created from a personal itch to form a simple CSS/JS library inspired from Microsoft's Modern Design principles.
		                </p>                
		            </div>   
		            <div class="span6">
		            	<img src="/booted-beta/assets/img/share.png">
		        	    <h3>Highly encouraged for sharing.</h3>
		                <p>Free to use for any projects you have in mind, although it would be nice if you gave <a href="http://twitter.com/acesubido">credit</a>.</p>                
		            </div> 
		        </div>  
		               
		        <div class="row-fluid">
		            <div class="span6">
		            	<img src="/booted-beta/assets/img/cross.png">
		                <h3>Cross-browser compatible.</h3>
		                <p>Cross-browser compatibile from IE8, to the latest version of Chrome, and Firefox so you don't have to spend countless minutes on testing.
		                </p>
		            </div>     
		            <div class="span6">
		            	<img src="/booted-beta/assets/img/bootstrap.png">
		        	    <h3>Works on top of Bootstrap.</h3>
		                <p>Carefully made to work with the Twitter Bootstrap CSS/HTML framework versions 2.0 and above.</p>
		            </div> 
			    </div>
    		</section>
    		
    		
    		<hr />
    		
    		<section id="button-classes">      	
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
  
    		<section id="colored-buttons">
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

            
            
    
            <section id="striped-buttons">    	
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
        
    		<section id="disabled-buttons">
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
		   	<section id="button-sizes">
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
    
            <section id="button-groups">
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

            <section id="button-strips">
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
    
    		<section id="icon-components">
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
            <section id="icon-buttons">
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
   			<section id="buttons-text-icon">
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
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		<!-- Start Forms -->
    		<section id="form-elements">      	
    			<div class="page-header"><h2>Going beyond styled buttons - Form Elements</h2></div>
    			<p>
                  To create a metro-styled text box, just add <code>class="m-wrap"</code> to
                  any <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, or 
                  <code>&lt;textarea&gt;</code> html element. Viola! You now have a basic modern-styled element.
                </p>
                <h3>Textboxes and Textareas</h3>
             
                
                    <div class="example">                       
                        <textarea class="m-wrap" placeholder="Styled"></textarea>
                        <input type="text" class="m-wrap" placeholder="Styled">                 
                    </div>            
                        <pre class="code prettyprint"><code>&lt;textarea class="m-wrap" placeholder="Styled"&gt;&lt;/textarea&gt;
&lt;input type="text" class="m-wrap" placeholder="Styled" /&gt;</code></pre>         
            </section>   
  
    		<section id="buttons-checkboxes">
        		<h3>Checkboxes/Radio Buttons</h3>                
                <div class="example">                    
                    <label class="m-checkbox m-wrap">
                    	<input type="checkbox" class="m-wrap" value="">
                        First Choice
                   	</label>
                    <label class="m-radio m-wrap">
                      	<input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                     	First Option	
                    </label>
                    <label class="m-radio m-wrap">
                      	<input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios2" value="option2">
                      	Second Option
                    </label>
                </div>
                <pre class="prettyprint"><code>&lt;label class="m-checkbox m-wrap"&gt;
    &lt;input type="checkbox" class="m-wrap" value=""&gt;
    First Choice
&lt;/label&gt;
&lt;label class="m-radio m-wrap"&gt;
    &lt;input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
    First Option	
&lt;/label&gt;
&lt;label class="m-radio m-wrap"&gt;
    &lt;input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
    Second Option
&lt;/label&gt;</code></pre>                
    		</section>
    
            <section id="inline-buttons-checkboxes">    	
                <h3>Inline Radio Buttons/Checkboxes</h3>
                <p>
                	Add the <code>.inline</code> class to the labels of a checkbox or radio group for them to line up in a single line. 
                </p>
        		<div class="example">                    
                    <label class="m-radio inline m-wrap">
                    	<input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios1" value="option1">
                        First Choice
                   	</label>
                    <label class="m-radio inline m-wrap">
                      	<input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                     	Second Choice	
                    </label>
                    <label class="m-radio inline m-wrap">
                      	<input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios3" value="option3">
                      	Third Choice
                    </label>
                </div>
                <pre class="prettyprint"><code>&lt;label class="m-radio inline"&gt;
    &lt;input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios1" value="option1"&gt;
    First Choice
&lt;/label&gt;
&lt;label class="m-radio inline"&gt;
    &lt;input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios2" value="option2" checked&gt;
    Second Choice	
&lt;/label&gt;
&lt;label class="m-radio inline"&gt;
    &lt;input type="radio" class="m-wrap" name="optionsRadios" id="optionsRadios3" value="option3"&gt;
    Third Choice
&lt;/label&gt;</code></pre>               		
    		</section>

            <section id="dropdown-lists">
                <h3>Dropdown Lists/List Views</h3>   
                <div class="example">
                	<select class="m-wrap">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                    <br>
                    <select multiple="multiple" class="m-wrap">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                </div>  
                    <pre class="prettyprint"><code>&lt;select class="m-wrap"&gt;
  &lt;option&gt;Option 1&lt;/option&gt;
  &lt;option&gt;Option 2&lt;/option&gt;
  &lt;option&gt;Option 3&lt;/option&gt;
  &lt;option&gt;Option 4&lt;/option&gt;
  &lt;option&gt;Option 5&lt;/option&gt;
&lt;/select&gt;
&lt;br/&gt;
&lt;select multiple="multiple" class="m-wrap"&gt;
  &lt;option&gt;Option 1&lt;/option&gt;
  &lt;option&gt;Option 2&lt;/option&gt;
  &lt;option&gt;Option 3&lt;/option&gt;
  &lt;option&gt;Option 4&lt;/option&gt;
  &lt;option&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>                          
              
    		</section>
            <section id="filepicker">
                <h3>Filepicker</h3>   
                <div class="example">
                	<input type="file" class="m-wrap">
                </div>  
                    <pre class="prettyprint"><code>&lt;input type="file" class="m-wrap"&gt;</code></pre>                          
              
    		</section>
        
    		<section>
                <div class="page-header"><h2>Form Elements Extensions</h2></div>
		        <h3>Disabled Elements</h3>
        		<p>
		        	To depict disabled elements, it needs to look like it's unusable.
	        		Add the <code>disabled</code> attribute in the element to make it look like its disabled. Place the <code>readonly</code>
                    to make it uneditable. Lastly, use the <code>m-uneditable-input</code> with a <code>span</code> element
                    if you prefer declaring the readonly style inside the class attribute of an element.			        
		        </p>    
		        <div class="example">                	                   
                    <textarea class="m-wrap" placeholder="Disabled" disabled=""></textarea>
                    <input type="text" class="m-wrap" disabled="" placeholder="Disabled">        
                    <br>
                    <textarea class="m-wrap" placeholder="" readonly="">Readonly</textarea>
                    <input type="text" class="m-wrap" readonly="" placeholder="" value="Readonly">         
                    <br>                               
                    <span class="m-wrap m-uneditable-input">Uneditable</span>     
        	    </div>
        		    <pre class="prettyprint"><code>&lt;textarea class="m-wrap" placeholder="Disabled" disabled&gt;&lt;/textarea&gt;
&lt;input type="text" class="m-wrap" disabled placeholder="Disabled"/&gt;        
&lt;br/&gt;
&lt;textarea class="m-wrap" placeholder="" readonly&gt;Readonly&lt;/textarea&gt;
&lt;input type="text" class="m-wrap" readonly placeholder="" value="Readonly"/&gt;         
&lt;br/&gt;                               
&lt;span class="m-wrap m-uneditable-input"&gt;Uneditable</code></pre>
			        
			</section>  
            <section id="appended-controls">
                <h3>Appended Controls</h3>
                <p>
                	You can also place text or buttons attached before or after any element. 
                    To place stuff before an element, wrap them around a <code>span</code> container
                    with the <code>add-on</code> class. To set them before an element, wrap both the control and the <code>add-on</code> container
                    with a <code>m-input-prepend</code> class, to set the text after a element you can use <code>m-input-append</code>.     
                    Do note that when using <code>m-input-prepend</code> you need to put the <code>add-on</code> container before the element, with 
                    <code>m-input-append</code> you need to put it after the control.
                </p>
				<p>
                	<strong>Note:</strong> the <code>textarea</code>, <code>select</code>, <code>input type="file"</code>,
                    <code>input type="checkbox"</code>, and <code>input type="radio"</code> elements are not supported.
                </p>
                <div class="example">
                	<div class="m-input-prepend">
                      <span class="add-on">@</span>
                      <input class="m-wrap" size="16" type="text" placeholder="Twitter Username">
                    </div>                    
                    <br>
                    <div class="m-input-append">                      
                      <input class="m-wrap" size="16" type="text" placeholder="">
                      <span class="add-on"><i class="icon-font"></i></span>
                    </div>                                     
                </div>
                <pre class="prettyprint"><code>&lt;div class="m-input-prepend"&gt;
  &lt;span class="add-on"&gt;@&lt;/span&gt;
  &lt;input class="m-wrap" size="16" type="text" placeholder="Twitter Username"&gt;
&lt;/div&gt;                    
&lt;br/&gt;
&lt;div class="m-input-append"&gt;                      
  &lt;input class="m-wrap" size="16" type="text" placeholder=""&gt;
  &lt;span class="add-on"&gt;&lt;i class="icon-font"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre> 
				<p>
                	You can combine both the <code>m-input-prepend</code> class and the <code>m-input-append</code> class to place stuff before and after 
                    an element.                   
                </p>   
                <div class="example">
                	<div class="m-input-prepend m-input-append">
                      <span class="add-on">@</span>
                      <input class="m-wrap" size="16" type="text" placeholder="Twitter Username">
                      <span class="add-on">Username</span>
                    </div>  
                                
                </div>
                <pre class="prettyprint"><code>&lt;div class="m-input-prepend m-input-append"&gt;
  &lt;span class="add-on"&gt;@&lt;/span&gt;
  &lt;input class="m-wrap" size="16" type="text" placeholder="Twitter Username"&gt;
  &lt;span class="add-on"&gt;Username
&lt;/div&gt;</code></pre>                 
				<p>
                	You can also place buttons instead of text.
                </p>
                <div class="example">
                	<div class="m-input-append">                      
                      	<input class="m-wrap" size="16" type="text" placeholder="Twitter Username">
                      	<button href="#" class="m-btn">Search</button>
                        <button href="#" class="m-btn">Back</button>
                    </div>   
                    <br>  
                    <div class="m-input-prepend">                
                    	<button href="#" class="m-btn blue">Login</button>      
                      	<input class="m-wrap" size="16" type="password" placeholder="Your Password">                      
                    </div>              
                </div>
                <pre class="prettyprint"><code>&lt;div class="m-input-append"&gt;                      
    &lt;input class="m-wrap" size="16" type="text" placeholder="Twitter Username"&gt;
    &lt;button href="#" class="m-btn"&gt;Search&lt;/button&gt;
    &lt;button href="#" class="m-btn"&gt;Back&lt;/button&gt;
&lt;/div&gt;   
&lt;br/&gt;
&lt;div class="m-input-prepend"&gt;                
    &lt;button href="#" class="m-btn blue"&gt;Login&lt;/button&gt;      
    &lt;input class="m-wrap" size="16" type="password" placeholder="Your Password"&gt;
&lt;/div&gt;                      
</code></pre> 
            </section>       

            <section id="control-sizes">
                <h3>Control sizes</h3>
                <p>
                  Use the <code>m-ctrl-small</code>, <code>m-ctrl-medium</code>, and <code>m-ctrl-large</code> to control the length of your textbox, 
                  textarea and select elements. There's the <code>m-ctrl-huge</code> class to create jumbo textboxes (textboxes with this 
                  size does not support the append and prepend classes). However, do note that this class is only supported with the 
                  <code>input type="text"</code> element.
                </p>
        
       			<div class="example">
                	<input type="text" class="m-wrap m-ctrl-small" placeholder=".m-ctrl-small"> 
                    <br>     
                    <input type="text" class="m-wrap m-ctrl-medium" placeholder=".m-ctrl-medium">         
                    <br>
                    <input type="text" class="m-wrap m-ctrl-large" placeholder=".m-ctrl-large">     
                    <br>   
                    <input type="text" class="m-wrap m-ctrl-huge" placeholder=".m-ctrl-huge">   
                </div>
					<pre class="prettyprint"><code>&lt;input type="text" class="m-wrap m-ctrl-small" placeholder=".m-ctrl-small"/&gt; 
&lt;br/&gt;     
&lt;input type="text" class="m-wrap m-ctrl-medium" placeholder=".m-ctrl-medium"/&gt;         
&lt;br/&gt;
&lt;input type="text" class="m-wrap m-ctrl-large" placeholder=".m-ctrl-large"/&gt;     
&lt;br/&gt;   
&lt;input type="text" class="m-wrap m-ctrl-huge" placeholder=".m-ctrl-huge"/&gt;</code></pre>
        			
    		</section>
    
    		</div>
    	</div>    
	</div>
</div>



    <!-- Footer
    ================================================== -->
    <?php include '../include/docs-footer.php'; ?>



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
    
    <script src="/booted-beta/assets/js/metro-buttons/m-dropdown.js"></script>
	<script src="/booted-beta/assets/js/metro-buttons/m-radio.js"></script>
  </body>
</html>
