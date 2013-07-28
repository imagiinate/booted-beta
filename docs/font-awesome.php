<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Font awesome · Booted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">
    
    
    <!-- Le styles -->
    <link href="/booted-beta/assets/css/themes/united.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bs-docs.css" rel="stylesheet">
    <link href="/booted-beta/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <!-- Font Awesome -->
<!--     <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	

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

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>58 shiny new icons come with version 3.2.0.</h1>
    
    
    <p class="lead">Font Awesome is the hottness right now. You should have it. 
    </p>
    
  </div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#new-styles"><i class="icon-chevron-right"></i> New Styles</a></li>
          <li><a href="#inline-icons"><i class="icon-chevron-right"></i> Inline Icons</a></li>
          <li><a href="#larger-icons"><i class="icon-chevron-right"></i> Larger Icons</a></li>
          <li><a href="#bordered-pulled"><i class="icon-chevron-right"></i> Bordered & Pulled</a></li>
          <li><a href="#buttons"><i class="icon-chevron-right"></i> Buttons</a></li>
          <li><a href="#button-groups"><i class="icon-chevron-right"></i> Button Groups</a></li>
          <li><a href="#button-dropdowns"><i class="icon-chevron-right"></i> Button Dropdowns</a></li>
          <li><a href="#bulleted-lists"><i class="icon-chevron-right"></i> Bulleted Lists</a></li>
          <li><a href="#navigation"><i class="icon-chevron-right"></i> Navigation</a></li>
          <li><a href="#form-inputs"><i class="icon-chevron-right"></i> Prepended & Appended Form Inputs</a></li>
          <li><a href="#animated-spinner"><i class="icon-chevron-right"></i> Animated Spinner</a></li>
          <li><a href="#rotated-flipped"><i class="icon-chevron-right"></i> Rotated &amp; Flipped</a></li>
          <li><a href="#stacked"><i class="icon-chevron-right"></i> Stacked Icons</a></li>
          <li class="nav-header">The Icons</li>
          <li><a href="#web-application"><i class="icon-chevron-right"></i> Web Application Icons</a></li>
          <li><a href="#currency"><i class="icon-chevron-right"></i> Currency Icons</a></li>
          <li><a href="#text-editor"><i class="icon-chevron-right"></i> Text Editor Icons</a></li>
          <li><a href="#directional"><i class="icon-chevron-right"></i> Directional Icons</a></li>
          <li><a href="#video-player"><i class="icon-chevron-right"></i> Video Player Icons</a></li>
          <li><a href="#brand"><i class="icon-chevron-right"></i> Brand Icons</a></li>
          <li><a href="#medical"><i class="icon-chevron-right"></i> Medical Icons</a></li>
          
          
        </ul>
      </div>
      <div class="span9">
	<br />
	<h1 class="page-header">Font Awesome Documentation</h1>

        <!-- Global Bootstrap settings
        ================================================== -->
        <div id="new-styles">
  <h2 class="page-header">New Styles in 3.2.0</h2>
  <div class="row">
    <div class="span3">
      <h4><a href="#rotated-flipped">Rotated and Flipped Icons</a></h4>
      <div class="well well-transparent">
        <i class="icon-shield"></i>&nbsp; normal<br>
        <i class="icon-shield icon-rotate-90"></i>&nbsp; icon-rotate-90<br>
        <i class="icon-shield icon-rotate-180"></i>&nbsp; icon-rotate-180<br>
        <i class="icon-shield icon-rotate-270"></i>&nbsp; icon-rotate-270<br>
        <i class="icon-shield icon-flip-horizontal"></i>&nbsp; icon-flip-horizontal<br>
        <i class="icon-shield icon-flip-vertical"></i>&nbsp; icon-flip-vertical
      </div>
    </div>
    <div class="span3">
      <h4><a href="#stacked">Stacked Icons</a></h4>
      <div class="well well-transparent">
        <span class="icon-stack">
          <i class="icon-check-empty icon-stack-base"></i>
          <i class="icon-twitter"></i>
        </span>
        icon-twitter on icon-check-empty<br>
        <span class="icon-stack">
          <i class="icon-circle icon-stack-base"></i>
          <i class="icon-flag icon-light"></i>
        </span>
        icon-flag on icon-circle<br>
        <span class="icon-stack">
          <i class="icon-sign-blank icon-stack-base"></i>
          <i class="icon-terminal icon-light"></i>
        </span>
        icon-terminal on icon-sign-blank
      </div>
    </div>
    <div class="span3">
      <h4><a href="#bulleted-lists">Better Bulleted Lists</a></h4>
      <div class="well well-transparent">
        <ul class="icons-ul">
          <li><i class="icon-li icon-chevron-sign-right"></i>New bulleted lists</li>
          <li><i class="icon-li icon-bullseye"></i>Fix some old bugs</li>
          <li><i class="icon-li icon-play-sign"></i>And deal with arbitrary</li>
          <li><i class="icon-li icon-ok-sign"></i>Font sizes better</li>
        </ul>
      </div>
    </div>
  </div>
</div>




        <!-- Grid system
        ================================================== -->
        <section id="inline-icons">
  <h2 class="page-header">Inline Icons</h2>
  <div class="row">
    <div class="span3">
      <p>Place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag.</p>
    </div>
    <div class="span9">
      <div class="well well-transparent">
        <div style="font-size: 24px; line-height: 1.5em;">
          <i class="icon-camera-retro"></i> icon-camera-retro
        </div>
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera-retro&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> icon-camera-retro
</code></pre></div>
      <div class="alert alert-info"><i class="icon-info-sign"></i> Icon classes are echoed via CSS :before.</div>
    </div>
  </div>
</section>

        <section id="larger-icons">
  <h2 class="page-header">Larger Icons</h2>
  <div class="row">
    <div class="span3">
      <p>
        To increase the size of icons relative to its container, use <code>icon-large</code>, <code>icon-2x</code>,
        <code>icon-3x</code>, or <code>icon-4x</code>.
      </p>
    </div>
    <div class="span9">
      <p>
        Increase the icon size by using the <code>icon-large</code> (33% increase), <code>icon-2x</code>,
        <code>icon-3x</code>, or <code>icon-4x</code> classes.
      </p>
      <div class="well well-transparent">
        <div style="font-size: 24px; line-height: 1.5em;">
          <p><i class="icon-camera-retro icon-large"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-2x"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-3x"></i> icon-camera-retro</p>
          <p><i class="icon-camera-retro icon-4x"></i> icon-camera-retro</p>
        </div>
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera-retro icon-large&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> icon-camera-retro<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera-retro icon-2x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> icon-camera-retro<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera-retro icon-3x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> icon-camera-retro<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera-retro icon-4x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> icon-camera-retro<span class="nt">&lt;/p&gt;</span>
</code></pre></div>
      <div class="alert alert-info">
        <i class="icon-info-sign"></i> If your icons are getting chopped off on top and bottom, make sure you have
        sufficient line-height.
      </div>
    </div>
  </div>
</section>



        <section id="bordered-pulled">
  <h2 class="page-header">Bordered & Pulled Icons</h2>
  <div class="row">
    <div class="span3">
      <p>
        Use <code>icon-border</code> and <code>pull-right</code> or <code>pull-left</code> for easy pull quotes or
        article graphics.
      </p>
    </div>
    <div class="span9">
      <div class="well well-large well-transparent">
        <i class="icon-quote-left icon-4x pull-left icon-muted"></i>
        Use a few of the new styles together, and you've got easy pull quotes or a great introductory article image.
        Or spinning icons for loading and refreshing content. Or fun big icons in multi-line buttons. You can combine all
        of them in any combination to get lots of new possibilities.
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-quote-left icon-4x pull-left icon-muted&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
Use a few of the new styles together ... lots of new possibilities.
</code></pre></div>
      <div class="well well-large well-transparent clearfix">
        <i class="icon-flag icon-4x pull-left icon-border"></i>
        Use a few of the new styles together, and you've got easy pull quotes or a great introductory article image.
        Or spinning icons for loading and refreshing content. Or fun big icons in multi-line buttons. You can combine all
        of them in any combination to get lots of new possibilities.
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-flag icon-4x pull-left icon-border&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
Use a few of the new styles together ... lots of new possibilities.
</code></pre></div>
    </div>
  </div>
</section>




        <section id="buttons">
  <h2 class="page-header">Buttons</h2>
  <div class="row">
    <div class="span3">
      <p>
        <a class="btn" href="#">
          <i class="icon-repeat"></i> Reload</a>
        <a class="btn btn-success" href="#">
          <i class="icon-shopping-cart icon-large"></i> Checkout</a>
      </p>
      <p>
        <a class="btn btn-large btn-primary" href="#">
          <i class="icon-comment"></i> Comment</a>
        <a class="btn btn-small btn-info" href="#">
          <i class="icon-info-sign"></i> Info</a>
      </p>
      <p>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-large"></i> Delete</a>
        <a class="btn btn-small" href="#">
          <i class="icon-cog"></i> Settings</a>
      </p>
      <p>
        <a class="btn btn-large btn-danger" href="#">
          <i class="icon-flag icon-2x pull-left"></i> Font Awesome<br>Version 3.2.0</a>
      </p>
      <p>
        <a class="btn btn-primary" href="#">
          <i class="icon-refresh icon-spin"></i> Synchronizing Content...</a>
      </p>
    </div>
    <div class="span9">
      <p>
        Font Awesome icons work great in buttons. You can even combine them with larger icon styles,
        <code>pull-right</code> and <code>pull-left</code>, and <code>icon-spin</code>.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-repeat&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Reload<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-success&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shopping-cart icon-large&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Checkout<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-large btn-primary&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-comment&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Comment<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-small btn-info&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-info-sign&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-danger&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-trash icon-large&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-small&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-cog&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Settings<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-large btn-danger&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-flag icon-2x pull-left&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Font Awesome<span class="nt">&lt;br&gt;</span>Version 3.2.0<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-refresh icon-spin&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Synchronizing Content...<span class="nt">&lt;/a&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>
<section id="button-groups">
  <h2 class="page-header">Button Groups</h2>
  <div class="row">
    <div class="span3">
      <p>
      <div class="btn-group">
        <a class="btn" href="#"><i class="icon-align-left"></i></a>
        <a class="btn" href="#"><i class="icon-align-center"></i></a>
        <a class="btn" href="#"><i class="icon-align-right"></i></a>
        <a class="btn" href="#"><i class="icon-align-justify"></i></a>
      </div>
      </p>
    </div>
    <div class="span9">
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-align-left&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-align-center&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-align-right&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-align-justify&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>
<section id="button-dropdowns">
  <h2 class="page-header">Button Dropdowns</h2>
  <div class="row">
    <div class="span3">
      <div class="btn-group open">
        <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="icon-caret-down"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-fixed-width icon-pencil"></i> Edit</a></li>
          <li><a href="#"><i class="icon-fixed-width icon-trash"></i> Delete</a></li>
          <li><a href="#"><i class="icon-fixed-width icon-ban-circle"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Make admin</a></li>
        </ul>
      </div>
    </div>
    <div class="span9">
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group open&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-user&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> User<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-caret-down&quot;</span><span class="nt">&gt;&lt;/span&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-pencil&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Edit<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-trash&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-ban-circle&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Ban<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;i&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Make admin<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
      <div class="alert alert-info"><i class="icon-info-sign"></i> Don't forget to add the appropriate JavaScript to enable button dropdowns.</div>
    </div>
  </div>
</section>
<section id="bulleted-lists">
  <h2 class="page-header">Bulleted Lists</h2>
  <div class="row">
    
    <div class="span3">
      <ul class="icons-ul">
        <li><i class="icon-li icon-ok"></i>Bulleted lists (like this one)</li>
        <li><i class="icon-li icon-ok"></i>Buttons</li>
        <li><i class="icon-li icon-ok"></i>Button groups</li>
        <li><i class="icon-li icon-ok"></i>Navigation</li>
        <li><i class="icon-li icon-ok"></i>Prepended form inputs</li>
        <li><i class="icon-li icon-ok"></i>&hellip;and many more with custom CSS</li>
      </ul>
    </div>
    <div class="span9">
      <p>Easily replace individual bullets.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;icons-ul&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>Bulleted lists (like this one)<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>Buttons<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>Button groups<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>Navigation<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>Prepended form inputs<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-li icon-ok&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;hellip;</span>and many more with custom CSS<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
      <div class="alert alert-info"><i class="icon-info-sign"></i> Make sure to NOT include any whitespace after the icon declaration.</div>
    </div>
  </div>
</section>
<section id="navigation">

  <h2 class="page-header">Navigation</h2>
  <div class="row">
    <div class="span3">
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="active"><a href="#"><i class="icon-fixed-width icon-home"></i> Home</a></li>
          <li><a href="#"><i class="icon-fixed-width icon-book"></i> Library</a></li>
          <li><a href="#"><i class="icon-fixed-width icon-pencil"></i> Applications</a></li>
          <li><a href="#"><i class="icon-fixed-width icon-cogs"></i> Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="span9">
      <p>Use Font Awesome icons in navigation to provide helpful visual cues.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;nav nav-list&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;active&quot;</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-home&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-book&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-pencil&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Applications<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-fixed-width icon-cogs&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Settings<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>
<section id="form-inputs">
  <h2 class="page-header">Prepended & Appended Form Inputs</h2>
  <div class="row">
    <div class="span3">
      <form>
        <div class="input-prepend">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input class="span2" type="text" placeholder="Email address">
        </div>
        <div class="input-prepend">
          <span class="add-on"><i class="icon-key"></i></span>
          <input class="span2" type="password" placeholder="Password">
        </div>
      </form>
    </div>
    <div class="span9">
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-prepend&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;add-on&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-envelope&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;span2&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Email address&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-prepend&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;add-on&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-key&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;span2&quot;</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>
<section id="animated-spinner">
  <h2 class="page-header">Animated Spinner</h2>
  <div class="row">
    <div class="span3">
      Use the <code>icon-spin</code> class to get any icon to rotate. Works well with <code>icon-spinner</code> and
      <code>icon-refresh</code>.
    </div>
    <div class="span9">
      <div class="well well-large well-transparent lead">
        <i class="icon-spinner icon-spin icon-large"></i> Spinner icon when loading content...
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-spinner icon-spin icon-large&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Spinner icon when loading content...
</code></pre></div>
      <p class="alert alert-info">
        <i class="icon-info-sign"></i> CSS3 animations aren't supported in IE7 - IE9.
      </p>
    </div>
  </div>
</section>
<section id="rotated-flipped">
  <h2 class="page-header">Rotated &amp; Flipped</h2>
  <div class="row">
    <div class="span3">
      A set of classes that can be used to arbitrarily rotate and flip icons.
    </div>
    <div class="span9">
      <div class="well well-large well-transparent lead">
        <i class="icon-shield"></i>&nbsp; normal<br>
        <i class="icon-shield icon-rotate-90"></i>&nbsp; icon-rotate-90<br>
        <i class="icon-shield icon-rotate-180"></i>&nbsp; icon-rotate-180<br>
        <i class="icon-shield icon-rotate-270"></i>&nbsp; icon-rotate-270<br>
        <i class="icon-shield icon-flip-horizontal"></i>&nbsp; icon-flip-horizontal<br>
        <i class="icon-shield icon-flip-vertical"></i>&nbsp; icon-flip-vertical
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> normal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield icon-rotate-90&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> icon-rotate-90<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield icon-rotate-180&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> icon-rotate-180<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield icon-rotate-270&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> icon-rotate-270<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield icon-flip-horizontal&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> icon-flip-horizontal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-shield icon-flip-vertical&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> icon-flip-vertical
</code></pre></div>
      <p class="alert alert-info">
        <i class="icon-info-sign"></i> Rotating and flipping icons aren't yet supported in IE7.
      </p>
    </div>
  </div>
</section>
<section id="stacked">
  <h2 class="page-header">Stacked Icons</h2>
  <div class="row">
    <div class="span3">
      A method for easily stacking multiple icons. Use the <code>icon-stack</code> class on the parent and
      <code>icon-stack-base</code> for the bottom icon.
    </div>
    <div class="span9">
      <div class="well well-large well-transparent lead">
        <span class="icon-stack">
          <i class="icon-check-empty icon-stack-base"></i>
          <i class="icon-twitter"></i>
        </span>
        icon-twitter on icon-check-empty<br>
        <span class="icon-stack">
          <i class="icon-circle icon-stack-base"></i>
          <i class="icon-flag icon-light"></i>
        </span>
        icon-flag on icon-circle<br>
        <span class="icon-stack">
          <i class="icon-sign-blank icon-stack-base"></i>
          <i class="icon-terminal icon-light"></i>
        </span>
        icon-terminal on icon-sign-blank<br>
        <span class="icon-stack">
          <i class="icon-camera"></i>
          <i class="icon-ban-circle icon-stack-base text-error"></i>
        </span>
        icon-camera on icon-ban-circle
      </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-stack&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-check-empty icon-stack-base&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-twitter&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
icon-twitter on icon-check-empty<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-stack&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-circle icon-stack-base&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-flag icon-light&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
icon-flag on icon-circle<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-stack&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-sign-blank icon-stack-base&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-terminal icon-light&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
icon-terminal on icon-sign-blank<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;icon-stack&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-camera&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;icon-ban-circle icon-stack-base text-error&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
icon-camera on icon-ban-circle
</code></pre></div>
    </div>
  </div>
</section>





<!-- New Icons Added -->


<div class="container-fluid span9" id="the-icons">
  <br />
<h1 class="page-header">The complete set of 361 Font Awesome Icons</h1>

<div id="new">
  <h2 class="page-header">New Icons in 3.2.0</h2>
  

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-compass"></i> icon-compass</a></div>
    
      <div class="span3"><a href="#"><i class="icon-collapse"></i> icon-collapse</a></div>
    
      <div class="span3"><a href="#"><i class="icon-collapse-top"></i> icon-collapse-top</a></div>
    
      <div class="span3"><a href="#"><i class="icon-expand"></i> icon-expand</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eur"></i> icon-eur</a></div>
    
      <div class="span3"><a href="#"><i class="icon-euro"></i> icon-euro <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-gbp"></i> icon-gbp</a></div>
    
      <div class="span3"><a href="#"><i class="icon-usd"></i> icon-usd</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dollar"></i> icon-dollar <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-inr"></i> icon-inr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-rupee"></i> icon-rupee <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-jpy"></i> icon-jpy</a></div>
    
      <div class="span3"><a href="#"><i class="icon-yen"></i> icon-yen <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-cny"></i> icon-cny</a></div>
    
      <div class="span3"><a href="#"><i class="icon-renminbi"></i> icon-renminbi <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-krw"></i> icon-krw</a></div>
    
      <div class="span3"><a href="#"><i class="icon-won"></i> icon-won <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-btc"></i> icon-btc</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-file"></i> icon-file</a></div>
    
      <div class="span3"><a href="#"><i class="icon-file-text"></i> icon-file-text</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-alphabet"></i> icon-sort-by-alphabet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-alphabet-alt"></i> icon-sort-by-alphabet-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-attributes"></i> icon-sort-by-attributes</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-attributes-alt"></i> icon-sort-by-attributes-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-order"></i> icon-sort-by-order</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-order-alt"></i> icon-sort-by-order-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-up"></i> icon-thumbs-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-down"></i> icon-thumbs-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube-sign"></i> icon-youtube-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube"></i> icon-youtube</a></div>
    
      <div class="span3"><a href="#"><i class="icon-xing"></i> icon-xing</a></div>
    
      <div class="span3"><a href="#"><i class="icon-xing-sign"></i> icon-xing-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dropbox"></i> icon-dropbox</a></div>
    
      <div class="span3"><a href="#"><i class="icon-stackexchange"></i> icon-stackexchange</a></div>
    
      <div class="span3"><a href="#"><i class="icon-instagram"></i> icon-instagram</a></div>
    
      <div class="span3"><a href="#"><i class="icon-flickr"></i> icon-flickr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-adn"></i> icon-adn</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitbucket"></i> icon-bitbucket</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitbucket-sign"></i> icon-bitbucket-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tumblr"></i> icon-tumblr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tumblr-sign"></i> icon-tumblr-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-down"></i> icon-long-arrow-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-up"></i> icon-long-arrow-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-left"></i> icon-long-arrow-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-right"></i> icon-long-arrow-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-apple"></i> icon-apple</a></div>
    
      <div class="span3"><a href="#"><i class="icon-windows"></i> icon-windows</a></div>
    
      <div class="span3"><a href="#"><i class="icon-android"></i> icon-android</a></div>
    
      <div class="span3"><a href="#"><i class="icon-linux"></i> icon-linux</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dribble"></i> icon-dribble</a></div>
    
      <div class="span3"><a href="#"><i class="icon-skype"></i> icon-skype</a></div>
    
      <div class="span3"><a href="#"><i class="icon-foursquare"></i> icon-foursquare</a></div>
    
      <div class="span3"><a href="#"><i class="icon-trello"></i> icon-trello</a></div>
    
      <div class="span3"><a href="#"><i class="icon-female"></i> icon-female</a></div>
    
      <div class="span3"><a href="#"><i class="icon-male"></i> icon-male</a></div>
    
      <div class="span3"><a href="#"><i class="icon-gittip"></i> icon-gittip</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sun"></i> icon-sun</a></div>
    
      <div class="span3"><a href="#"><i class="icon-moon"></i> icon-moon</a></div>
    
      <div class="span3"><a href="#"><i class="icon-archive"></i> icon-archive</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bug"></i> icon-bug</a></div>
    
      <div class="span3"><a href="#"></i> icon-vk</a></div>
    
      <div class="span3"><a href="#"><i class="icon-weibo"></i> icon-weibo</a></div>
    
      <div class="span3"><a href="#"><i class="icon-renren"></i> icon-renren</a></div>
    
  </div>

</div>

<section id="web-application">
  <h2 class="page-header">Web Application Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-adjust"></i> icon-adjust</a></div>
    
      <div class="span3"><a href="#"><i class="icon-anchor"></i> icon-anchor</a></div>
    
      <div class="span3"><a href="#"><i class="icon-archive"></i> icon-archive</a></div>
    
      <div class="span3"><a href="#"><i class="icon-asterisk"></i> icon-asterisk</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ban-circle"></i> icon-ban-circle</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bar-chart"></i> icon-bar-chart</a></div>
    
      <div class="span3"><a href="#"><i class="icon-barcode"></i> icon-barcode</a></div>
    
      <div class="span3"><a href="#"><i class="icon-beaker"></i> icon-beaker</a></div>
    
      <div class="span3"><a href="#"><i class="icon-beer"></i> icon-beer</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bell"></i> icon-bell</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bell-alt"></i> icon-bell-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bolt"></i> icon-bolt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-book"></i> icon-book</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bookmark"></i> icon-bookmark</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bookmark-empty"></i> icon-bookmark-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-briefcase"></i> icon-briefcase</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bug"></i> icon-bug</a></div>
    
      <div class="span3"><a href="#"><i class="icon-building"></i> icon-building</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bullhorn"></i> icon-bullhorn</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bullseye"></i> icon-bullseye</a></div>
    
      <div class="span3"><a href="#"><i class="icon-calendar"></i> icon-calendar</a></div>
    
      <div class="span3"><a href="#"><i class="icon-calendar-empty"></i> icon-calendar-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-camera"></i> icon-camera</a></div>
    
      <div class="span3"><a href="#"><i class="icon-camera-retro"></i> icon-camera-retro</a></div>
    
      <div class="span3"><a href="#"><i class="icon-certificate"></i> icon-certificate</a></div>
    
      <div class="span3"><a href="#"><i class="icon-check"></i> icon-check</a></div>
    
      <div class="span3"><a href="#"><i class="icon-check-empty"></i> icon-check-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-check-minus"></i> icon-check-minus</a></div>
    
      <div class="span3"><a href="#"><i class="icon-check-sign"></i> icon-check-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle"></i> icon-circle</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle-blank"></i> icon-circle-blank</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cloud"></i> icon-cloud</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cloud-download"></i> icon-cloud-download</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cloud-upload"></i> icon-cloud-upload</a></div>
    
      <div class="span3"><a href="#"><i class="icon-code"></i> icon-code</a></div>
    
      <div class="span3"><a href="#"><i class="icon-code-fork"></i> icon-code-fork</a></div>
    
      <div class="span3"><a href="#"><i class="icon-coffee"></i> icon-coffee</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cog"></i> icon-cog</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cogs"></i> icon-cogs</a></div>
    
      <div class="span3"><a href="#"><i class="icon-collapse"></i> icon-collapse</a></div>
    
      <div class="span3"><a href="#"><i class="icon-collapse-alt"></i> icon-collapse-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-collapse-top"></i> icon-collapse-top</a></div>
    
      <div class="span3"><a href="#"><i class="icon-comment"></i> icon-comment</a></div>
    
      <div class="span3"><a href="#"><i class="icon-comment-alt"></i> icon-comment-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-comments"></i> icon-comments</a></div>
    
      <div class="span3"><a href="#"><i class="icon-comments-alt"></i> icon-comments-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-compass"></i> icon-compass</a></div>
    
      <div class="span3"><a href="#"><i class="icon-credit-card"></i> icon-credit-card</a></div>
    
      <div class="span3"><a href="#"><i class="icon-crop"></i> icon-crop</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dashboard"></i> icon-dashboard</a></div>
    
      <div class="span3"><a href="#"><i class="icon-desktop"></i> icon-desktop</a></div>
    
      <div class="span3"><a href="#"><i class="icon-download"></i> icon-download</a></div>
    
      <div class="span3"><a href="#"><i class="icon-download-alt"></i> icon-download-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-edit"></i> icon-edit</a></div>
    
      <div class="span3"><a href="#"><i class="icon-edit-sign"></i> icon-edit-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ellipsis-horizontal"></i> icon-ellipsis-horizontal</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ellipsis-vertical"></i> icon-ellipsis-vertical</a></div>
    
      <div class="span3"><a href="#"><i class="icon-envelope"></i> icon-envelope</a></div>
    
      <div class="span3"><a href="#"><i class="icon-envelope-alt"></i> icon-envelope-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eraser"></i> icon-eraser</a></div>
    
      <div class="span3"><a href="#"><i class="icon-exchange"></i> icon-exchange</a></div>
    
      <div class="span3"><a href="#"><i class="icon-exclamation"></i> icon-exclamation</a></div>
    
      <div class="span3"><a href="#"><i class="icon-exclamation-sign"></i> icon-exclamation-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-expand"></i> icon-expand</a></div>
    
      <div class="span3"><a href="#"><i class="icon-expand-alt"></i> icon-expand-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-external-link"></i> icon-external-link</a></div>
    
      <div class="span3"><a href="#"><i class="icon-external-link-sign"></i> icon-external-link-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eye-close"></i> icon-eye-close</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eye-open"></i> icon-eye-open</a></div>
    
      <div class="span3"><a href="#"><i class="icon-facetime-video"></i> icon-facetime-video</a></div>
    
      <div class="span3"><a href="#"><i class="icon-female"></i> icon-female</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fighter-jet"></i> icon-fighter-jet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-film"></i> icon-film</a></div>
    
      <div class="span3"><a href="#"><i class="icon-filter"></i> icon-filter</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fire"></i> icon-fire</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fire-extinguisher"></i> icon-fire-extinguisher</a></div>
    
      <div class="span3"><a href="#"><i class="icon-flag"></i> icon-flag</a></div>
    
      <div class="span3"><a href="#"><i class="icon-flag-alt"></i> icon-flag-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-flag-checkered"></i> icon-flag-checkered</a></div>
    
      <div class="span3"><a href="#"><i class="icon-folder-close"></i> icon-folder-close</a></div>
    
      <div class="span3"><a href="#"><i class="icon-folder-close-alt"></i> icon-folder-close-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-folder-open"></i> icon-folder-open</a></div>
    
      <div class="span3"><a href="#"><i class="icon-folder-open-alt"></i> icon-folder-open-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-food"></i> icon-food</a></div>
    
      <div class="span3"><a href="#"><i class="icon-frown"></i> icon-frown</a></div>
    
      <div class="span3"><a href="#"><i class="icon-gamepad"></i> icon-gamepad</a></div>
    
      <div class="span3"><a href="#"><i class="icon-gift"></i> icon-gift</a></div>
    
      <div class="span3"><a href="#"><i class="icon-glass"></i> icon-glass</a></div>
    
      <div class="span3"><a href="#"><i class="icon-globe"></i> icon-globe</a></div>
    
      <div class="span3"><a href="#"><i class="icon-group"></i> icon-group</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hdd"></i> icon-hdd</a></div>
    
      <div class="span3"><a href="#"><i class="icon-headphones"></i> icon-headphones</a></div>
    
      <div class="span3"><a href="#"><i class="icon-heart"></i> icon-heart</a></div>
    
      <div class="span3"><a href="#"><i class="icon-heart-empty"></i> icon-heart-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-home"></i> icon-home</a></div>
    
      <div class="span3"><a href="#"><i class="icon-inbox"></i> icon-inbox</a></div>
    
      <div class="span3"><a href="#"><i class="icon-info"></i> icon-info</a></div>
    
      <div class="span3"><a href="#"><i class="icon-info-sign"></i> icon-info-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-key"></i> icon-key</a></div>
    
      <div class="span3"><a href="#"><i class="icon-keyboard"></i> icon-keyboard</a></div>
    
      <div class="span3"><a href="#"><i class="icon-laptop"></i> icon-laptop</a></div>
    
      <div class="span3"><a href="#"><i class="icon-leaf"></i> icon-leaf</a></div>
    
      <div class="span3"><a href="#"><i class="icon-legal"></i> icon-legal</a></div>
    
      <div class="span3"><a href="#"><i class="icon-lemon"></i> icon-lemon</a></div>
    
      <div class="span3"><a href="#"><i class="icon-level-down"></i> icon-level-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-level-up"></i> icon-level-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-lightbulb"></i> icon-lightbulb</a></div>
    
      <div class="span3"><a href="#"><i class="icon-location-arrow"></i> icon-location-arrow</a></div>
    
      <div class="span3"><a href="#"><i class="icon-lock"></i> icon-lock</a></div>
    
      <div class="span3"><a href="#"><i class="icon-magic"></i> icon-magic</a></div>
    
      <div class="span3"><a href="#"><i class="icon-magnet"></i> icon-magnet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-mail-forward"></i> icon-mail-forward <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-mail-reply"></i> icon-mail-reply <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-mail-reply-all"></i> icon-mail-reply-all</a></div>
    
      <div class="span3"><a href="#"><i class="icon-male"></i> icon-male</a></div>
    
      <div class="span3"><a href="#"><i class="icon-map-marker"></i> icon-map-marker</a></div>
    
      <div class="span3"><a href="#"><i class="icon-meh"></i> icon-meh</a></div>
    
      <div class="span3"><a href="#"><i class="icon-microphone"></i> icon-microphone</a></div>
    
      <div class="span3"><a href="#"><i class="icon-microphone-off"></i> icon-microphone-off</a></div>
    
      <div class="span3"><a href="#"><i class="icon-minus"></i> icon-minus</a></div>
    
      <div class="span3"><a href="#"><i class="icon-minus-sign"></i> icon-minus-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-minus-sign-alt"></i> icon-minus-sign-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-mobile-phone"></i> icon-mobile-phone</a></div>
    
      <div class="span3"><a href="#"><i class="icon-money"></i> icon-money</a></div>
    
      <div class="span3"><a href="#"><i class="icon-moon"></i> icon-moon</a></div>
    
      <div class="span3"><a href="#"><i class="icon-move"></i> icon-move</a></div>
    
      <div class="span3"><a href="#"><i class="icon-music"></i> icon-music</a></div>
    
      <div class="span3"><a href="#"><i class="icon-off"></i> icon-off</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ok"></i> icon-ok</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ok-circle"></i> icon-ok-circle</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ok-sign"></i> icon-ok-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-pencil"></i> icon-pencil</a></div>
    
      <div class="span3"><a href="#"><i class="icon-phone"></i> icon-phone</a></div>
    
      <div class="span3"><a href="#"><i class="icon-phone-sign"></i> icon-phone-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-picture"></i> icon-picture</a></div>
    
      <div class="span3"><a href="#"><i class="icon-plane"></i> icon-plane</a></div>
    
      <div class="span3"><a href="#"><i class="icon-plus"></i> icon-plus</a></div>
    
      <div class="span3"><a href="#"><i class="icon-plus-sign"></i> icon-plus-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-power-off"></i> icon-power-off <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-print"></i> icon-print</a></div>
    
      <div class="span3"><a href="#"><i class="icon-pushpin"></i> icon-pushpin</a></div>
    
      <div class="span3"><a href="#"><i class="icon-puzzle-piece"></i> icon-puzzle-piece</a></div>
    
      <div class="span3"><a href="#"><i class="icon-qrcode"></i> icon-qrcode</a></div>
    
      <div class="span3"><a href="#"><i class="icon-question"></i> icon-question</a></div>
    
      <div class="span3"><a href="#"><i class="icon-question-sign"></i> icon-question-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-quote-left"></i> icon-quote-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-quote-right"></i> icon-quote-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-random"></i> icon-random</a></div>
    
      <div class="span3"><a href="#"><i class="icon-refresh"></i> icon-refresh</a></div>
    
      <div class="span3"><a href="#"><i class="icon-remove"></i> icon-remove</a></div>
    
      <div class="span3"><a href="#"><i class="icon-remove-circle"></i> icon-remove-circle</a></div>
    
      <div class="span3"><a href="#"><i class="icon-remove-sign"></i> icon-remove-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-reorder"></i> icon-reorder</a></div>
    
      <div class="span3"><a href="#"><i class="icon-reply"></i> icon-reply</a></div>
    
      <div class="span3"><a href="#"><i class="icon-reply-all"></i> icon-reply-all</a></div>
    
      <div class="span3"><a href="#"><i class="icon-resize-horizontal"></i> icon-resize-horizontal</a></div>
    
      <div class="span3"><a href="#"><i class="icon-resize-vertical"></i> icon-resize-vertical</a></div>
    
      <div class="span3"><a href="#"><i class="icon-retweet"></i> icon-retweet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-road"></i> icon-road</a></div>
    
      <div class="span3"><a href="#"><i class="icon-rocket"></i> icon-rocket</a></div>
    
      <div class="span3"><a href="#"><i class="icon-rss"></i> icon-rss</a></div>
    
      <div class="span3"><a href="#"><i class="icon-rss-sign"></i> icon-rss-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-screenshot"></i> icon-screenshot</a></div>
    
      <div class="span3"><a href="#"><i class="icon-search"></i> icon-search</a></div>
    
      <div class="span3"><a href="#"><i class="icon-share"></i> icon-share</a></div>
    
      <div class="span3"><a href="#"><i class="icon-share-alt"></i> icon-share-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-share-sign"></i> icon-share-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-shield"></i> icon-shield</a></div>
    
      <div class="span3"><a href="#"><i class="icon-shopping-cart"></i> icon-shopping-cart</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sign-blank"></i> icon-sign-blank</a></div>
    
      <div class="span3"><a href="#"><i class="icon-signal"></i> icon-signal</a></div>
    
      <div class="span3"><a href="#"><i class="icon-signin"></i> icon-signin</a></div>
    
      <div class="span3"><a href="#"><i class="icon-signout"></i> icon-signout</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sitemap"></i> icon-sitemap</a></div>
    
      <div class="span3"><a href="#"><i class="icon-smile"></i> icon-smile</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort"></i> icon-sort</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-alphabet"></i> icon-sort-by-alphabet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-alphabet-alt"></i> icon-sort-by-alphabet-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-attributes"></i> icon-sort-by-attributes</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-attributes-alt"></i> icon-sort-by-attributes-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-order"></i> icon-sort-by-order</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-by-order-alt"></i> icon-sort-by-order-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-down"></i> icon-sort-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sort-up"></i> icon-sort-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-spinner"></i> icon-spinner</a></div>
    
      <div class="span3"><a href="#"><i class="icon-star"></i> icon-star</a></div>
    
      <div class="span3"><a href="#"><i class="icon-star-empty"></i> icon-star-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-star-half"></i> icon-star-half</a></div>
    
      <div class="span3"><a href="#"><i class="icon-star-half-empty"></i> icon-star-half-empty</a></div>
    
      <div class="span3"><a href="#"><i class="icon-star-half-full"></i> icon-star-half-full <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-subscript"></i> icon-subscript</a></div>
    
      <div class="span3"><a href="#"><i class="icon-suitcase"></i> icon-suitcase</a></div>
    
      <div class="span3"><a href="#"><i class="icon-sun"></i> icon-sun</a></div>
    
      <div class="span3"><a href="#"><i class="icon-superscript"></i> icon-superscript</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tablet"></i> icon-tablet</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tag"></i> icon-tag</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tags"></i> icon-tags</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tasks"></i> icon-tasks</a></div>
    
      <div class="span3"><a href="#"><i class="icon-terminal"></i> icon-terminal</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-down"></i> icon-thumbs-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-down-alt"></i> icon-thumbs-down-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-up"></i> icon-thumbs-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-thumbs-up-alt"></i> icon-thumbs-up-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-ticket"></i> icon-ticket</a></div>
    
      <div class="span3"><a href="#"><i class="icon-time"></i> icon-time</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tint"></i> icon-tint</a></div>
    
      <div class="span3"><a href="#"><i class="icon-trash"></i> icon-trash</a></div>
    
      <div class="span3"><a href="#"><i class="icon-trophy"></i> icon-trophy</a></div>
    
      <div class="span3"><a href="#"><i class="icon-truck"></i> icon-truck</a></div>
    
      <div class="span3"><a href="#"><i class="icon-umbrella"></i> icon-umbrella</a></div>
    
      <div class="span3"><a href="#"><i class="icon-unchecked"></i> icon-unchecked <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-unlock"></i> icon-unlock</a></div>
    
      <div class="span3"><a href="#"><i class="icon-unlock-alt"></i> icon-unlock-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-upload"></i> icon-upload</a></div>
    
      <div class="span3"><a href="#"><i class="icon-upload-alt"></i> icon-upload-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-user"></i> icon-user</a></div>
    
      <div class="span3"><a href="#"><i class="icon-volume-down"></i> icon-volume-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-volume-off"></i> icon-volume-off</a></div>
    
      <div class="span3"><a href="#"><i class="icon-volume-up"></i> icon-volume-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-warning-sign"></i> icon-warning-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-wrench"></i> icon-wrench</a></div>
    
      <div class="span3"><a href="#"><i class="icon-zoom-in"></i> icon-zoom-in</a></div>
    
      <div class="span3"><a href="#"><i class="icon-zoom-out"></i> icon-zoom-out</a></div>
    
  </div>

</section>

<section id="currency">
  <h2 class="page-header">Currency Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-btc"></i> icon-btc</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cny"></i> icon-cny</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dollar"></i> icon-dollar <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-eur"></i> icon-eur</a></div>
    
      <div class="span3"><a href="#"><i class="icon-euro"></i> icon-euro <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-gbp"></i> icon-gbp</a></div>
    
      <div class="span3"><a href="#"><i class="icon-inr"></i> icon-inr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-jpy"></i> icon-jpy</a></div>
    
      <div class="span3"><a href="#"><i class="icon-krw"></i> icon-krw</a></div>
    
      <div class="span3"><a href="#"><i class="icon-renminbi"></i> icon-renminbi <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-rupee"></i> icon-rupee <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-usd"></i> icon-usd</a></div>
    
      <div class="span3"><a href="#"><i class="icon-won"></i> icon-won <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-yen"></i> icon-yen <span class="muted">(alias)</span></a></div>
    
  </div>

</section>

<section id="text-editor">
  <h2 class="page-header">Text Editor Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-align-center"></i> icon-align-center</a></div>
    
      <div class="span3"><a href="#"><i class="icon-align-justify"></i> icon-align-justify</a></div>
    
      <div class="span3"><a href="#"><i class="icon-align-left"></i> icon-align-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-align-right"></i> icon-align-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bold"></i> icon-bold</a></div>
    
      <div class="span3"><a href="#"><i class="icon-columns"></i> icon-columns</a></div>
    
      <div class="span3"><a href="#"><i class="icon-copy"></i> icon-copy</a></div>
    
      <div class="span3"><a href="#"><i class="icon-cut"></i> icon-cut</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eraser"></i> icon-eraser</a></div>
    
      <div class="span3"><a href="#"><i class="icon-file"></i> icon-file</a></div>
    
      <div class="span3"><a href="#"><i class="icon-file-alt"></i> icon-file-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-file-text"></i> icon-file-text</a></div>
    
      <div class="span3"><a href="#"><i class="icon-file-text-alt"></i> icon-file-text-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-font"></i> icon-font</a></div>
    
      <div class="span3"><a href="#"><i class="icon-indent-left"></i> icon-indent-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-indent-right"></i> icon-indent-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-italic"></i> icon-italic</a></div>
    
      <div class="span3"><a href="#"><i class="icon-link"></i> icon-link</a></div>
    
      <div class="span3"><a href="#"><i class="icon-list"></i> icon-list</a></div>
    
      <div class="span3"><a href="#"><i class="icon-list-alt"></i> icon-list-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-list-ol"></i> icon-list-ol</a></div>
    
      <div class="span3"><a href="#"><i class="icon-list-ul"></i> icon-list-ul</a></div>
    
      <div class="span3"><a href="#"><i class="icon-paper-clip"></i> icon-paper-clip</a></div>
    
      <div class="span3"><a href="#"><i class="icon-paperclip"></i> icon-paperclip <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-paste"></i> icon-paste</a></div>
    
      <div class="span3"><a href="#"><i class="icon-repeat"></i> icon-repeat</a></div>
    
      <div class="span3"><a href="#"><i class="icon-rotate-left"></i> icon-rotate-left <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-rotate-right"></i> icon-rotate-right <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-save"></i> icon-save</a></div>
    
      <div class="span3"><a href="#"><i class="icon-strikethrough"></i> icon-strikethrough</a></div>
    
      <div class="span3"><a href="#"><i class="icon-table"></i> icon-table</a></div>
    
      <div class="span3"><a href="#"><i class="icon-text-height"></i> icon-text-height</a></div>
    
      <div class="span3"><a href="#"><i class="icon-text-width"></i> icon-text-width</a></div>
    
      <div class="span3"><a href="#"icon-th"></i> icon-th</a></div>
    
      <div class="span3"><a href="#"><i class="icon-th-large"></i> icon-th-large</a></div>
    
      <div class="span3"><a href="#"><i class="icon-th-list"></i> icon-th-list</a></div>
    
      <div class="span3"><a href="#"><i class="icon-underline"></i> icon-underline</a></div>
    
      <div class="span3"><a href="#"><i class="icon-undo"></i> icon-undo</a></div>
    
      <div class="span3"><a href="#"><i class="icon-unlink"></i> icon-unlink</a></div>
    
  </div>

</section>

<section id="directional">
  <h2 class="page-header">Directional Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-angle-down"></i> icon-angle-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-angle-left"></i> icon-angle-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-angle-right"></i> icon-angle-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-angle-up"></i> icon-angle-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-arrow-down"></i> icon-arrow-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-arrow-left"></i> icon-arrow-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-arrow-right"></i> icon-arrow-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-arrow-up"></i> icon-arrow-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-caret-down"></i> icon-caret-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-caret-left"></i> icon-caret-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-caret-right"></i> icon-caret-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-caret-up"></i> icon-caret-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-down"></i> icon-chevron-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-left"></i> icon-chevron-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-right"></i> icon-chevron-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-sign-down"></i> icon-chevron-sign-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-sign-left"></i> icon-chevron-sign-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-sign-right"></i> icon-chevron-sign-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-sign-up"></i> icon-chevron-sign-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-chevron-up"></i> icon-chevron-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-double-angle-down"></i> icon-double-angle-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-double-angle-left"></i> icon-double-angle-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-double-angle-right"></i> icon-double-angle-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-double-angle-up"></i> icon-double-angle-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hand-down"></i> icon-hand-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hand-left"></i> icon-hand-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hand-right"></i> icon-hand-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hand-up"></i> icon-hand-up</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-down"></i> icon-long-arrow-down</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-left"></i> icon-long-arrow-left</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-right"></i> icon-long-arrow-right</a></div>
    
      <div class="span3"><a href="#"><i class="icon-long-arrow-up"></i> icon-long-arrow-up</a></div>
    
  </div>

</section>

<section id="video-player">
  <h2 class="page-header">Video Player Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-backward"></i> icon-backward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-eject"></i> icon-eject</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fast-backward"></i> icon-fast-backward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fast-forward"></i> icon-fast-forward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-forward"></i> icon-forward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-fullscreen"></i> icon-fullscreen</a></div>
    
      <div class="span3"><a href="#"><i class="icon-pause"></i> icon-pause</a></div>
    
      <div class="span3"><a href="#"><i class="icon-play"></i> icon-play</a></div>
    
      <div class="span3"><a href="#"><i class="icon-play-circle"></i> icon-play-circle</a></div>
    
      <div class="span3"><a href="#"><i class="icon-play-sign"></i> icon-play-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-resize-full"></i> icon-resize-full</a></div>
    
      <div class="span3"><a href="#"><i class="icon-resize-small"></i> icon-resize-small</a></div>
    
      <div class="span3"><a href="#"><i class="icon-step-backward"></i> icon-step-backward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-step-forward"></i> icon-step-forward</a></div>
    
      <div class="span3"><a href="#"><i class="icon-stop"></i> icon-stop</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
    
  </div>

</section>

<section id="brand">
  <h2 class="page-header">Brand Icons</h2>

  <div class="alert alert-info">
    <ul class="margin-bottom-none">
  <li>All brand icons are trademarks of their respective owners.</li>
  <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
</ul>

  </div>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-adn"></i> icon-adn</a></div>
    
      <div class="span3"><a href="#"><i class="icon-android"></i> icon-android</a></div>
    
      <div class="span3"><a href="#"><i class="icon-apple"></i> icon-apple</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitbucket"></i> icon-bitbucket</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitbucket-sign"></i> icon-bitbucket-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
    
      <div class="span3"><a href="#"><i class="icon-btc"></i> icon-btc</a></div>
    
      <div class="span3"><a href="#"><i class="icon-css3"></i> icon-css3</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dribble"></i> icon-dribble</a></div>
    
      <div class="span3"><a href="#"><i class="icon-dropbox"></i> icon-dropbox</a></div>
    
      <div class="span3"><a href="#"><i class="icon-facebook"></i> icon-facebook</a></div>
    
      <div class="span3"><a href="#"><i class="icon-facebook-sign"></i> icon-facebook-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-flickr"></i> icon-flickr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-foursquare"></i> icon-foursquare</a></div>
    
      <div class="span3"><a href="#"><i class="icon-github"></i> icon-github</a></div>
    
      <div class="span3"><a href="#"><i class="icon-github-alt"></i> icon-github-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-github-sign"></i> icon-github-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-gittip"></i> icon-gittip</a></div>
    
      <div class="span3"><a href="#"><i class="icon-google-plus"></i> icon-google-plus</a></div>
    
      <div class="span3"><a href="#"><i class="icon-google-plus-sign"></i> icon-google-plus-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-html5"></i> icon-html5</a></div>
    
      <div class="span3"><a href="#"><i class="icon-instagram"></i> icon-instagram</a></div>
    
      <div class="span3"><a href="#"><i class="icon-linkedin"></i> icon-linkedin</a></div>
    
      <div class="span3"><a href="#"><i class="icon-linkedin-sign"></i> icon-linkedin-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-linux"></i> icon-linux</a></div>
    
      <div class="span3"><a href="#"><i class="icon-maxcdn"></i> icon-maxcdn</a></div>
    
      <div class="span3"><a href="#"><i class="icon-pinterest"></i> icon-pinterest</a></div>
    
      <div class="span3"><a href="#"><i class="icon-pinterest-sign"></i> icon-pinterest-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-renren"></i> icon-renren</a></div>
    
      <div class="span3"><a href="#"><i class="icon-skype"></i> icon-skype</a></div>
    
      <div class="span3"><a href="#"><i class="icon-stackexchange"></i> icon-stackexchange</a></div>
    
      <div class="span3"><a href="#"><i class="icon-trello"></i> icon-trello</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tumblr"></i> icon-tumblr</a></div>
    
      <div class="span3"><a href="#"><i class="icon-tumblr-sign"></i> icon-tumblr-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-twitter"></i> icon-twitter</a></div>
    
      <div class="span3"><a href="#"><i class="icon-twitter-sign"></i> icon-twitter-sign</a></div>
    
      <div class="span3"><a href="#"icon-vk"></i> icon-vk</a></div>
    
      <div class="span3"><a href="#"><i class="icon-weibo"></i> icon-weibo</a></div>
    
      <div class="span3"><a href="#"><i class="icon-windows"></i> icon-windows</a></div>
    
      <div class="span3"><a href="#"><i class="icon-xing"></i> icon-xing</a></div>
    
      <div class="span3"><a href="#"><i class="icon-xing-sign"></i> icon-xing-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube"></i> icon-youtube</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
    
      <div class="span3"><a href="#"><i class="icon-youtube-sign"></i> icon-youtube-sign</a></div>
    
  </div>
</section>

<section id="medical">
  <h2 class="page-header">Medical Icons</h2>

  <div class="row the-icons">
    

    
      <div class="span3"><a href="#"><i class="icon-ambulance"></i> icon-ambulance</a></div>
    
      <div class="span3"><a href="#"><i class="icon-h-sign"></i> icon-h-sign</a></div>
    
      <div class="span3"><a href="#"><i class="icon-hospital"></i> icon-hospital</a></div>
    
      <div class="span3"><a href="#"><i class="icon-medkit"></i> icon-medkit</a></div>
    
      <div class="span3"><a href="#"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
    
      <div class="span3"><a href="#"><i class="icon-stethoscope"></i> icon-stethoscope</a></div>
    
      <div class="span3"><a href="#"><i class="icon-user-md"></i> icon-user-md</a></div>
    
  </div>

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


  </body>
</html>
