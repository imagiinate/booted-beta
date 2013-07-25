<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Font awesome · Twittstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="twittstrap.com">
    
    
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/bs-docs.css" rel="stylesheet">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    <!-- Font Awesome -->
<!--     <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	

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
    <h1>Font awesome</h1>
    <p class="lead">After you get up and running, you can place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag. Many examples appreciatively re-used from the Bootstrap documentation. .</p>
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
        </ul>
      </div>
      <div class="span9">



        <!-- Global Bootstrap settings
        ================================================== -->
        <div id="new-styles">
  <h2 class="page-header">New Styles in 3.2.0</h2>
  <div class="row">
    <div class="span4">
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
    <div class="span4">
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
    <div class="span4">
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
    <div class="span12">
    </div>
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
<p><a href="http://ace-subido.github.io/css3-microsoft-metro-buttons/"> CSS3 Microsoft Modern Buttons</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
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


  </body>
</html>
