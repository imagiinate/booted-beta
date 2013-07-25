<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Metro forms · Twittstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/bs-docs.css" rel="stylesheet">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <link href="../assets/css/metro-buttons/m-buttons.css" rel="stylesheet">
    <link href="../assets/css/metro-buttons/m-forms.css" rel="stylesheet">
    <link href="../assets/css/metro-buttons/m-icons.css" rel="stylesheet">
    
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

  ga('create', 'UA-41573898-1', 'imagiinate.com');
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
    <h1>CSS 3 Microsoft Metro forms :)</h1>
    <p class="lead">Twittstrap includes metro buttons for the folks around the <i class="icon-globe icon-5x"></i>.</p>
  </div>
</header>

  
	<div class="container">
	<div class="row">
   		<div class="span12">
    		<section>      	
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
  
    		<section>
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
    
            <section>    	
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

            <section>
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
            <section>
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
            <section>
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

            <section>
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



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
              <p>Created by <a href="http://twitter.com/imagiin8" target="_blank">@imagiin8</a>.</p>
        <p>Twitter bootstrap was designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://ace-subido.github.io/css3-microsoft-metro-buttons/"> CSS3 Metro Buttons</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          
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
    
    <script src="../assets/js/metro-buttons/m-dropdown.js"></script>
	<script src="../assets/js/metro-buttons/m-radio.js"></script>
  </body>
</html>
