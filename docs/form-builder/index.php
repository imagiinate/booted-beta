<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Form Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/booted-beta/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/booted-beta/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body style="margin-top: 0px;">
    
    <?php include '../../include/docs-nav.php'; ?>
    
    <header class="jumbotron subhead" id="overview">
	  <div class="container">
	    <h1>Form Builder</h1>
	    <p class="lead">After you get up and running, you can place Font Awesome icons just about anywhere with the <code>&lt;i&gt;</code> tag. Many examples appreciatively re-used from the Bootstrap documentation. .</p>
	  </div>
	</header>
	

    <div class="container">
      <div class="row clearfix">
        <!-- Building Form. -->
        <div class="span6">
          <div class="clearfix">
            <h2>Your Form</h2>
            <hr>
            <div id="build">
              <form id="target" class="form-horizontal">
              </form>
            </div>
          </div>
        </div>
        <!-- / Building Form. -->

        <!-- Components -->
        <div class="span6">
          <h2>Drag & Drop components</h2>
          <hr>
          <div class="tabbable">
            <ul class="nav nav-tabs" id="navtab">
              <!-- Tab nav -->
            </ul>
            <form class="form-horizontal" id="components">
              <fieldset>
                <div class="tab-content">
                  <!-- Tabs of snippets go here -->
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- / Components -->

      </div>

      <div class="row clearfix">
        <div class="span12">
          <hr>
          By Adam Moore (<a href="http://twitter.com/minikomi" >@minikomi</a>).<br/>
          Source on (<a href="https://github.com/minikomi/Bootstrap-Form-Builder" >Github</a>).
        </div>
      </div>

    </div> <!-- /container -->

    <script data-main="assets/js/main-built.js" src="assets/js/lib/require.js" ></script>
  </body>
</html>
