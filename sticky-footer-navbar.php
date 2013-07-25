<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twittstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">

    <!-- CSS -->
    <link href="/booted-beta/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

    </style>
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/booted-beta/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body style="margin-top:40px;">
	  <?php include 'include/docs-nav.php'; ?>

    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Sticky footer with fixed navbar</h1>
        </div>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added within <code>#wrap</code> with <code>padding-top: 60px;</code> on the <code>.container</code>.</p>
        <p>Back to <a href="./sticky-footer.html">the sticky footer</a> minus the navbar.</p>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      </div>
    </div>



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

  </body>
</html>
