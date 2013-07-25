<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Customize · Twittstrap</title>
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

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Customize and download</h1>
    <p class="lead"><a href="https://github.com/twittstrap/twittstrap/zipball/master">Download Twittstrap</a> or customize variables, components, JavaScript plugins, and more.</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#components"><i class="icon-chevron-right"></i> 1. Choose components</a></li>
          <li><a href="#plugins"><i class="icon-chevron-right"></i> 2. Select jQuery plugins</a></li>
          <li><a href="#variables"><i class="icon-chevron-right"></i> 3. Customize variables</a></li>
          <li><a href="#download"><i class="icon-chevron-right"></i> 4. Download</a></li>
        </ul>
      </div>
      <div class="span9">


        <!-- Customize form
        ================================================== -->
        <form>
          <section class="download" id="components">
            <div class="page-header">
              <a class="btn btn-small pull-right toggle-all" href="#">Toggle all</a>
              <h1>
                1. Choose components
              </h1>
            </div>
            <div class="row download-builder">
              <div class="span3">
                <h3>Scaffolding</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="reset.less"> Normalize and reset</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="scaffolding.less"> Body type and links</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="grid.less"> Grid system</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="layouts.less"> Layouts</label>
                <h3>Base CSS</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="type.less"> Headings, body, etc</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="code.less"> Code and pre</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="labels-badges.less"> Labels and badges</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="tables.less"> Tables</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="forms.less"> Forms</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="buttons.less"> Buttons</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="sprites.less"> Icons</label>
              </div><!-- /span -->
              <div class="span3">
                <h3>Components</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="button-groups.less"> Button groups and dropdowns</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="navs.less"> Navs, tabs, and pills</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="navbar.less"> Navbar</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="breadcrumbs.less"> Breadcrumbs</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="pagination.less"> Pagination</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="pager.less"> Pager</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="thumbnails.less"> Thumbnails</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="alerts.less"> Alerts</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="progress-bars.less"> Progress bars</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="hero-unit.less"> Hero unit</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="media.less"> Media component</label>
                <h3>JS Components</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="tooltip.less"> Tooltips</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="popovers.less"> Popovers</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="modals.less"> Modals</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="dropdowns.less"> Dropdowns</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="accordion.less"> Collapse</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="carousel.less"> Carousel</label>
              </div><!-- /span -->
              <div class="span3">
                <h3>Miscellaneous</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="wells.less"> Wells</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="close.less"> Close icon</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="utilities.less"> Utilities</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="component-animations.less"> Component animations</label>
                <h3>Responsive</h3>
                <label class="checkbox"><input checked="checked" type="checkbox" value="responsive-utilities.less"> Visible/hidden classes</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="responsive-767px-max.less"> Narrow tablets and below (<767px)</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="responsive-768px-979px.less"> Tablets to desktops (767-979px)</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="responsive-1200px-min.less"> Large desktops (>1200px)</label>
                <label class="checkbox"><input checked="checked" type="checkbox" value="responsive-navbar.less"> Responsive navbar</label>
              </div><!-- /span -->
            </div><!-- /row -->
          </section>

          <section class="download" id="plugins">
            <div class="page-header">
              <a class="btn btn-small pull-right toggle-all" href="#">Toggle all</a>
              <h1>
                2. Select jQuery plugins
              </h1>
            </div>
            <div class="row download-builder">
              <div class="span3">
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-transition.js">
                  Transitions <small>(required for any animation)</small>
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-modal.js">
                  Modals
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-dropdown.js">
                  Dropdowns
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-scrollspy.js">
                  Scrollspy
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-tab.js">
                  Togglable tabs
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-tooltip.js">
                  Tooltips
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-popover.js">
                  Popovers <small>(requires Tooltips)</small>
                </label>
              </div><!-- /span -->
              <div class="span3">
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-affix.js">
                  Affix
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-alert.js">
                  Alert messages
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-button.js">
                  Buttons
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-collapse.js">
                  Collapse
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-carousel.js">
                  Carousel
                </label>
                <label class="checkbox">
                  <input type="checkbox" checked="true" value="bootstrap-typeahead.js">
                  Typeahead
                </label>
              </div><!-- /span -->
              <div class="span3">
                <h4 class="muted">Heads up!</h4>
                <p class="muted">All checked plugins will be compiled into a single file, bootstrap.js. All plugins require the latest version of <a href="http://jquery.com/" target="_blank">jQuery</a> to be included.</p>
              </div><!-- /span -->
            </div><!-- /row -->
          </section>


          <section class="download" id="variables">
            <div class="page-header">
              <a class="btn btn-small pull-right toggle-all" href="#">Reset to defaults</a>
              <h1>
                3. Customize variables
              </h1>
            </div>
            <div class="row download-builder">
              <div class="span3">
                <h3>Scaffolding</h3>
                <label>@bodyBackground</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@textColor</label>
                <input type="text" class="span3" placeholder="@grayDark">

                <h3>Links</h3>
                <label>@linkColor</label>
                <input type="text" class="span3" placeholder="#08c">
                <label>@linkColorHover</label>
                <input type="text" class="span3" placeholder="darken(@linkColor, 15%)">
                <h3>Colors</h3>
                <label>@blue</label>
                <input type="text" class="span3" placeholder="#049cdb">
                <label>@green</label>
                <input type="text" class="span3" placeholder="#46a546">
                <label>@red</label>
                <input type="text" class="span3" placeholder="#9d261d">
                <label>@yellow</label>
                <input type="text" class="span3" placeholder="#ffc40d">
                <label>@orange</label>
                <input type="text" class="span3" placeholder="#f89406">
                <label>@pink</label>
                <input type="text" class="span3" placeholder="#c3325f">
                <label>@purple</label>
                <input type="text" class="span3" placeholder="#7a43b6">

                <h3>Sprites</h3>
                <label>@iconSpritePath</label>
                <input type="text" class="span3" placeholder="'../img/glyphicons-halflings.png'">
                <label>@iconWhiteSpritePath</label>
                <input type="text" class="span3" placeholder="'../img/glyphicons-halflings-white.png'">

                <h3>Grid system</h3>
                <label>@gridColumns</label>
                <input type="text" class="span3" placeholder="12">
                <label>@gridColumnWidth</label>
                <input type="text" class="span3" placeholder="60px">
                <label>@gridGutterWidth</label>
                <input type="text" class="span3" placeholder="20px">
                <label>@gridColumnWidth1200</label>
                <input type="text" class="span3" placeholder="70px">
                <label>@gridGutterWidth1200</label>
                <input type="text" class="span3" placeholder="30px">
                <label>@gridColumnWidth768</label>
                <input type="text" class="span3" placeholder="42px">
                <label>@gridGutterWidth768</label>
                <input type="text" class="span3" placeholder="20px">

              </div><!-- /span -->
              <div class="span3">

                <h3>Typography</h3>
                <label>@sansFontFamily</label>
                <input type="text" class="span3" placeholder="'Helvetica Neue', Helvetica, Arial, sans-serif">
                <label>@serifFontFamily</label>
                <input type="text" class="span3" placeholder="Georgia, 'Times New Roman', Times, serif">
                <label>@monoFontFamily</label>
                <input type="text" class="span3" placeholder="Menlo, Monaco, 'Courier New', monospace">

                <label>@baseFontSize</label>
                <input type="text" class="span3" placeholder="14px">
                <label>@baseFontFamily</label>
                <input type="text" class="span3" placeholder="@sansFontFamily">
                <label>@baseLineHeight</label>
                <input type="text" class="span3" placeholder="20px">

                <label>@altFontFamily</label>
                <input type="text" class="span3" placeholder="@serifFontFamily">
                <label>@headingsFontFamily</label>
                <input type="text" class="span3" placeholder="inherit">
                <label>@headingsFontWeight</label>
                <input type="text" class="span3" placeholder="bold">
                <label>@headingsColor</label>
                <input type="text" class="span3" placeholder="inherit">

                <label>@fontSizeLarge</label>
                <input type="text" class="span3" placeholder="@baseFontSize * 1.25">
                <label>@fontSizeSmall</label>
                <input type="text" class="span3" placeholder="@baseFontSize * 0.85">
                <label>@fontSizeMini</label>
                <input type="text" class="span3" placeholder="@baseFontSize * 0.75">

                <label>@paddingLarge</label>
                <input type="text" class="span3" placeholder="11px 19px">
                <label>@paddingSmall</label>
                <input type="text" class="span3" placeholder="2px 10px">
                <label>@paddingMini</label>
                <input type="text" class="span3" placeholder="1px 6px">

                <label>@baseBorderRadius</label>
                <input type="text" class="span3" placeholder="4px">
                <label>@borderRadiusLarge</label>
                <input type="text" class="span3" placeholder="6px">
                <label>@borderRadiusSmall</label>
                <input type="text" class="span3" placeholder="3px">

                <label>@heroUnitBackground</label>
                <input type="text" class="span3" placeholder="@grayLighter">
                <label>@heroUnitHeadingColor</label>
                <input type="text" class="span3" placeholder="inherit">
                <label>@heroUnitLeadColor</label>
                <input type="text" class="span3" placeholder="inherit">

                <h3>Tables</h3>
                <label>@tableBackground</label>
                <input type="text" class="span3" placeholder="transparent">
                <label>@tableBackgroundAccent</label>
                <input type="text" class="span3" placeholder="#f9f9f9">
                <label>@tableBackgroundHover</label>
                <input type="text" class="span3" placeholder="#f5f5f5">
                <label>@tableBorder</label>
                <input type="text" class="span3" placeholder="#ddd">

                <h3>Forms</h3>
                <label>@placeholderText</label>
                <input type="text" class="span3" placeholder="@grayLight">
                <label>@inputBackground</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@inputBorder</label>
                <input type="text" class="span3" placeholder="#ccc">
                <label>@inputBorderRadius</label>
                <input type="text" class="span3" placeholder="3px">
                <label>@inputDisabledBackground</label>
                <input type="text" class="span3" placeholder="@grayLighter">
                <label>@formActionsBackground</label>
                <input type="text" class="span3" placeholder="#f5f5f5">
                <label>@btnPrimaryBackground</label>
                <input type="text" class="span3" placeholder="@linkColor">
                <label>@btnPrimaryBackgroundHighlight</label>
                <input type="text" class="span3" placeholder="darken(@white, 10%)">

              </div><!-- /span -->
              <div class="span3">

                <h3>Form states &amp; alerts</h3>
                <label>@warningText</label>
                <input type="text" class="span3" placeholder="#c09853">
                <label>@warningBackground</label>
                <input type="text" class="span3" placeholder="#fcf8e3">
                <label>@errorText</label>
                <input type="text" class="span3" placeholder="#b94a48">
                <label>@errorBackground</label>
                <input type="text" class="span3" placeholder="#f2dede">
                <label>@successText</label>
                <input type="text" class="span3" placeholder="#468847">
                <label>@successBackground</label>
                <input type="text" class="span3" placeholder="#dff0d8">
                <label>@infoText</label>
                <input type="text" class="span3" placeholder="#3a87ad">
                <label>@infoBackground</label>
                <input type="text" class="span3" placeholder="#d9edf7">

                <h3>Navbar</h3>
                <label>@navbarHeight</label>
                <input type="text" class="span3" placeholder="40px">
                <label>@navbarBackground</label>
                <input type="text" class="span3" placeholder="@grayDarker">
                <label>@navbarBackgroundHighlight</label>
                <input type="text" class="span3" placeholder="@grayDark">
                <label>@navbarText</label>
                <input type="text" class="span3" placeholder="@grayLight">
                <label>@navbarBrandColor</label>
                <input type="text" class="span3" placeholder="@navbarLinkColor">
                <label>@navbarLinkColor</label>
                <input type="text" class="span3" placeholder="@grayLight">
                <label>@navbarLinkColorHover</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@navbarLinkColorActive</label>
                <input type="text" class="span3" placeholder="@navbarLinkColorHover">
                <label>@navbarLinkBackgroundHover</label>
                <input type="text" class="span3" placeholder="transparent">
                <label>@navbarLinkBackgroundActive</label>
                <input type="text" class="span3" placeholder="@navbarBackground">
                <label>@navbarSearchBackground</label>
                <input type="text" class="span3" placeholder="lighten(@navbarBackground, 25%)">
                <label>@navbarSearchBackgroundFocus</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@navbarSearchBorder</label>
                <input type="text" class="span3" placeholder="darken(@navbarSearchBackground, 30%)">
                <label>@navbarSearchPlaceholderColor</label>
                <input type="text" class="span3" placeholder="#ccc">

                <label>@navbarCollapseWidth</label>
                <input type="text" class="span3" placeholder="979px">
                <label>@navbarCollapseDesktopWidth</label>
                <input type="text" class="span3" placeholder="@navbarCollapseWidth + 1">

                <h3>Dropdowns</h3>
                <label>@dropdownBackground</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@dropdownBorder</label>
                <input type="text" class="span3" placeholder="rgba(0,0,0,.2)">
                <label>@dropdownLinkColor</label>
                <input type="text" class="span3" placeholder="@grayDark">
                <label>@dropdownLinkColorHover</label>
                <input type="text" class="span3" placeholder="@white">
                <label>@dropdownLinkBackgroundHover</label>
                <input type="text" class="span3" placeholder="@linkColor">
              </div><!-- /span -->
            </div><!-- /row -->
          </section>

          <section class="download" id="download">
            <div class="page-header">
              <h1>
                4. Download
              </h1>
            </div>
            <div class="download-btn">
              <a class="btn btn-primary" href="#" onClick="_gaq.push(['_trackEvent', 'Customize', 'Download', 'Customize and Download']);">Customize and Download</a>
              <h4>What's included?</h4>
              <p>Downloads include compiled CSS, compiled and minified CSS, and compiled jQuery plugins, all nicely packed up into a zipball for your convenience.</p>
            </div>
          </section><!-- /download -->
        </form>



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
