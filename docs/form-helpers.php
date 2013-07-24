<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form Helpers · Booted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="a responsive web template built with twitter bootstrap, using LESS CSS and managed through github">
    <meta name="author" content="imagiinate.com">
    <meta name="keywords" content="jquery,jquery plugins,twitter bootstrap,bootstrap form,bootstrap form helpers,states,states list">
    <!-- Le styles -->
    <link href="../assets/css/twittstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/bs-docs.css" rel="stylesheet">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    
     <!-- Le styles -->
    <link href="../assets/css/bootstrap-formhelpers.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-formhelpers-countries.flags.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-formhelpers-currencies.flags.css" rel="stylesheet">
    
<!--     <link href="../assets/css/form-helpers-docs.css" rel="stylesheet"> -->
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
  <div class="jumbotron masthead">
    <div class="container">
      <h1>Form Helpers</h1>
      <p class="lead">Extend Bootstrap's components—now with 12 custom jQuery plugins.</p>
      
    </div>
  </div>
  
  
  <div class="bs-docs-social">
    <div class="container">
      <ul class="bs-docs-social-buttons">
        <li>
          <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=vlamanna&amp;repo=BootstrapFormHelpers&amp;type=watch&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" style="width: 100px; height: 20px;"></iframe>
        </li>
        <li>
          <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=vlamanna&amp;repo=BootstrapFormHelpers&amp;type=fork&amp;count=true" allowtransparency="true" frameborder="0" scrolling="0" style="width: 98px; height: 20px;"></iframe>
        </li>
        <li class="follow-btn">
          <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.1347008535.html#_=1350836523114&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=vincentlamanna&amp;show_count=true&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button" style="width: 236px; height: 20px; " title="Twitter Follow Button" data-twttr-rendered="true"></iframe>
        </li>
        <li class="tweet-btn">
          <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1347008535.html#_=1350836523111&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;size=m&amp;text=Bootstrap%20Form%20Helpers&amp;url=http%3A%2F%2Fvlamanna.github.com%2FBootstrapFormHelpers%2F&amp;via=vincentlamanna" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px; " title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav affix-top" data-spy="affix" data-offset-top="502" data-offset-bottom="250">
          <li><a href="#overview"><i class="icon-chevron-right"></i> Overview</a></li>
          <li><a href="#selectbox"><i class="icon-chevron-right"></i> Select Box</a></li>
          <li><a href="#countries"><i class="icon-chevron-right"></i> Countries</a></li>
          <li><a href="#states"><i class="icon-chevron-right"></i> States</a></li>
          <li><a href="#currencies"><i class="icon-chevron-right"></i> Currencies</a></li>
          <li><a href="#phone"><i class="icon-chevron-right"></i> Phone</a></li>
          <li><a href="#languages"><i class="icon-chevron-right"></i> Languages</a></li>
          <li><a href="#timezones"><i class="icon-chevron-right"></i> Timezones</a></li>
          <li><a href="#googlefonts"><i class="icon-chevron-right"></i> Google Fonts</a></li>
          <li><a href="#datepicker"><i class="icon-chevron-right"></i> Date Picker</a></li>
          <li><a href="#timepicker"><i class="icon-chevron-right"></i> Time Picker</a></li>
          <li><a href="#fonts"><i class="icon-chevron-right"></i> Fonts</a></li>
          <li><a href="#fontsizes"><i class="icon-chevron-right"></i> Font Sizes</a></li>
        </ul>
      </div>
      <div class="span9">


        <!-- Overview
        ================================================== -->
        <section id="overview">
          <div class="page-header">
            <h1>OVERVIEW :) Bootstrap Form Helpers</h1>
          </div>
          
          <p>These components are based on <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>

          <p>These components are distributed for free but you can contribute and make them better.</p>

        </section>
        
        
        <!-- Select Box
        ================================================== -->
        <section id="selectbox">
          <div class="page-header">
            <h1>Select Box <small>bootstrap-formhelpers-selectbox.js</small></h1>
          </div>
          
          <h3>About select box</h3>
          <p>For adding a select box, include bootstrap-formhelpers-selectbox.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simple example for adding a select box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox">
              <input type="hidden" name="selectbox1" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                    <li><a tabindex="-1" href="#" data-option="1">Option 1</a></li>
                    <li><a tabindex="-1" href="#" data-option="2">Option 2</a></li>
                    <li><a tabindex="-1" href="#" data-option="3">Option 3</a></li>
                    <li><a tabindex="-1" href="#" data-option="4">Option 4</a></li>
                    <li><a tabindex="-1" href="#" data-option="5">Option 5</a></li>
                    <li><a tabindex="-1" href="#" data-option="6">Option 6</a></li>
                    <li><a tabindex="-1" href="#" data-option="7">Option 7</a></li>
                    <li><a tabindex="-1" href="#" data-option="8">Option 8</a></li>
                    <li><a tabindex="-1" href="#" data-option="9">Option 9</a></li>
                    <li><a tabindex="-1" href="#" data-option="10">Option 10</a></li>
                    <li><a tabindex="-1" href="#" data-option="11">Option 11</a></li>
                    <li><a tabindex="-1" href="#" data-option="12">Option 12</a></li>
                    <li><a tabindex="-1" href="#" data-option="13">Option 13</a></li>
                    <li><a tabindex="-1" href="#" data-option="14">Option 14</a></li>
                    <li><a tabindex="-1" href="#" data-option="15">Option 15</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox"&gt;
  &lt;input type="hidden" name="selectbox1" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option="12"&gt;Option 12&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="1"&gt;Option 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="2"&gt;Option 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="3"&gt;Option 3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="4"&gt;Option 4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="5"&gt;Option 5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="6"&gt;Option 6&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="7"&gt;Option 7&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="8"&gt;Option 8&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="9"&gt;Option 9&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="10"&gt;Option 10&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="11"&gt;Option 11&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="12"&gt;Option 12&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="13"&gt;Option 13&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="14"&gt;Option 14&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="15"&gt;Option 15&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Simple example for adding a select box and selecting a default option</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox">
              <input type="hidden" name="selectbox2" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option="12">Option 12</span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                    <li><a tabindex="-1" href="#" data-option="1">Option 1</a></li>
                    <li><a tabindex="-1" href="#" data-option="2">Option 2</a></li>
                    <li><a tabindex="-1" href="#" data-option="3">Option 3</a></li>
                    <li><a tabindex="-1" href="#" data-option="4">Option 4</a></li>
                    <li><a tabindex="-1" href="#" data-option="5">Option 5</a></li>
                    <li><a tabindex="-1" href="#" data-option="6">Option 6</a></li>
                    <li><a tabindex="-1" href="#" data-option="7">Option 7</a></li>
                    <li><a tabindex="-1" href="#" data-option="8">Option 8</a></li>
                    <li><a tabindex="-1" href="#" data-option="9">Option 9</a></li>
                    <li><a tabindex="-1" href="#" data-option="10">Option 10</a></li>
                    <li><a tabindex="-1" href="#" data-option="11">Option 11</a></li>
                    <li><a tabindex="-1" href="#" data-option="12">Option 12</a></li>
                    <li><a tabindex="-1" href="#" data-option="13">Option 13</a></li>
                    <li><a tabindex="-1" href="#" data-option="14">Option 14</a></li>
                    <li><a tabindex="-1" href="#" data-option="15">Option 15</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox"&gt;
  &lt;input type="hidden" name="selectbox2" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option="12"&gt;Option 12&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="1"&gt;Option 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="2"&gt;Option 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="3"&gt;Option 3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="4"&gt;Option 4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="5"&gt;Option 5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="6"&gt;Option 6&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="7"&gt;Option 7&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="8"&gt;Option 8&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="9"&gt;Option 9&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="10"&gt;Option 10&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="11"&gt;Option 11&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="12"&gt;Option 12&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="13"&gt;Option 13&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="14"&gt;Option 14&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="15"&gt;Option 15&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Simple example for adding a select box with a filter</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox">
              <input type="hidden" name="selectbox3" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option="12">Option 12</span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <input type="text" class="bfh-selectbox-filter">
                <div role="listbox">
                  <ul role="option">
                    <li><a tabindex="-1" href="#" data-option="1">Option 1</a></li>
                    <li><a tabindex="-1" href="#" data-option="2">Option 2</a></li>
                    <li><a tabindex="-1" href="#" data-option="3">Option 3</a></li>
                    <li><a tabindex="-1" href="#" data-option="4">Option 4</a></li>
                    <li><a tabindex="-1" href="#" data-option="5">Option 5</a></li>
                    <li><a tabindex="-1" href="#" data-option="6">Option 6</a></li>
                    <li><a tabindex="-1" href="#" data-option="7">Option 7</a></li>
                    <li><a tabindex="-1" href="#" data-option="8">Option 8</a></li>
                    <li><a tabindex="-1" href="#" data-option="9">Option 9</a></li>
                    <li><a tabindex="-1" href="#" data-option="10">Option 10</a></li>
                    <li><a tabindex="-1" href="#" data-option="11">Option 11</a></li>
                    <li><a tabindex="-1" href="#" data-option="12">Option 12</a></li>
                    <li><a tabindex="-1" href="#" data-option="13">Option 13</a></li>
                    <li><a tabindex="-1" href="#" data-option="14">Option 14</a></li>
                    <li><a tabindex="-1" href="#" data-option="15">Option 15</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox"&gt;
  &lt;input type="hidden" name="selectbox3" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option="12"&gt;Option 12&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="1"&gt;Option 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="2"&gt;Option 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="3"&gt;Option 3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="4"&gt;Option 4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="5"&gt;Option 5&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="6"&gt;Option 6&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="7"&gt;Option 7&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="8"&gt;Option 8&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="9"&gt;Option 9&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="10"&gt;Option 10&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="11"&gt;Option 11&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="12"&gt;Option 12&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="13"&gt;Option 13&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="14"&gt;Option 14&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a tabindex="-1" href="#" data-option="15"&gt;Option 15&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        
         <!-- Countries
        ================================================== -->
        <section id="countries">
          <div class="page-header">
            <h1>Countries <small>bootstrap-formhelpers-countries.js</small></h1>
          </div>
          
          <h3>About countries</h3>
          <p>For adding a drop-down of countries or display country name from country code, include bootstrap-formhelpers-countries.{language}.js and bootstrap-formhelpers-countries.js once alongside the other JS files.</p>
          <p>If you want to have access to the country flags, you can include bootstrap-formhelpers-countries.flags.css once alongside the other CSS files.</p>
          <h3>Use cases</h3>

          <p>Example for loading the list of countries and selecting a default country</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-countries" data-country="US"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-countries" data-country="US"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of countries, limited to a specific list of countries</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-countries" data-countryList="US,AG,AU"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-countries" data-countryList="US,AG,AU"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of countries in JavaScript and selecting a default country</p>
          <form class="bs-docs-example form-inline">
            <button onclick="$('#countries1').bfhcountries({country: 'US'});return false;" class="btn">Load Countries</button>
            <select id="countries1" class="input-medium"></select>
          </form>
          <pre class="prettyprint">&lt;button onclick="$('#countries1').bfhcountries({country: 'US'})" class="btn"&gt;Load Countries&lt;/button&gt;
&lt;select id="countries1" class="input-medium"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of countries and flags using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <input type="text" class="bfh-selectbox-filter">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example for displaying the country name and flag from a country code</p>
          <form class="bs-docs-example form-inline">
            <span class="bfh-countries" data-country="US" data-flags="true"></span>
          </form>
          <pre class="prettyprint">&lt;span class="bfh-countries" data-country="US" data-flags="true"&gt;&lt;/span&gt;</pre>
        </section>
        
        
        <!-- States
        ================================================== -->
        <section id="states">
          <div class="page-header">
            <h1>States <small>bootstrap-formhelpers-states.js</small></h1>
          </div>
          
          <h3>About states</h3>
          <p>For adding a drop-down of states of a country or display state name from state and country code, include bootstrap-formhelpers-states.{language}.js and bootstrap-formhelpers-states.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Example for loading the list of states for a country and selecting a default state</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-states" data-country="US" data-state="CA"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-states" data-country="US" data-state="CA"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of states for a country and selecting a default state in JavaScript</p>
          <form class="bs-docs-example form-inline">
            <button onclick="$('#states1').bfhstates({country: 'US', state: 'CA'});return false;" class="btn">Load States</button>
            <select id="states1" class="input-medium"></select>
          </form>
          <pre class="prettyprint">&lt;button onclick="$('#states1').bfhstates({country: 'US', state: 'CA'})" class="btn"&gt;Load States&lt;/button&gt;
&lt;select id="states1" class="input-medium"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of states using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox bfh-states" data-country="US" data-state="CA">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-states" data-country="US" data-state="CA"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example for loading the list of states based on a country selector</p>
          <form class="bs-docs-example form-inline">
            <select id="countries_states1" class="input-medium bfh-countries" data-country="US"></select>
            <select class="input-medium bfh-states" data-country="countries_states1"></select>
          </form>
          <pre class="prettyprint">&lt;select id="countries_states1" class="input-medium bfh-countries" data-country="US"&gt;&lt;/select&gt;
&lt;select class="input-medium bfh-states" data-country="countries_states1"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of states based on a country select using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div id="countries_states2" class="bfh-selectbox bfh-countries" data-country="US">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
            <div class="bfh-selectbox bfh-states" data-country="countries_states2">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div id="countries_states2" class="bfh-selectbox bfh-countries" data-country="US"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="bfh-selectbox bfh-states" data-country="countries_states2"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example for displaying the state name from a state and country code</p>
          <form class="bs-docs-example form-inline">
            <span class="bfh-states" data-country="US" data-state="CA"></span>
          </form>
          <pre class="prettyprint">&lt;span class="bfh-states" data-country="US" data-state="CA"&gt;&lt;/span&gt;</pre>
        </section>
        
        
        <!-- Currencies
        ================================================== -->
        <section id="currencies">
            <div class="page-header">
                <h1>Currencies <small>bootstrap-formhelpers-currencies.js</small></h1>
            </div>
          
          <h3>About currencies</h3>
          <p>For adding a drop-down of currencies or display currency name from country code, include bootstrap-formhelpers-currencies.{language}.js and bootstrap-formhelpers-currencies.js once alongside the other JS files.</p>
          <p>If you want to have access to the country flags, you can include bootstrap-formhelpers-countries.flags.css once alongside the other CSS files.</p>
          <h3>Use cases</h3>

          <p>Example for loading the list of currencies and selecting a default currency</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-currencies" data-currency="EUR"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-currencies" data-currency="EUR"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of currencies, limited to a specific list of currencies</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-currencies" data-currencyList="USD,AUD,EUR"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-currencies" data-currencyList="USD,AUD,EUR"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of currencies in JavaScript and selecting a default currency</p>
          <form class="bs-docs-example form-inline">
            <button onclick="$('#currencies1').bfhcurrencies({currency: 'USD'});return false;" class="btn">Load Currencies</button>
            <select id="currencies1" class="input-medium"></select>
          </form>
          <pre class="prettyprint">&lt;button onclick="$('#currencies1').bfhcurrencies({currency: 'USD'})" class="btn"&gt;Load Currencies&lt;/button&gt;
&lt;select id="currencies1" class="input-medium"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of currencies and currencies flags using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox bfh-currencies" data-currency="EUR" data-flags="true">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <input type="text" class="bfh-selectbox-filter">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-currencies" data-currency="EUR" data-flags="true"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>



          <p>Example for displaying the currency name and currency flag from a currency code</p>
          <form class="bs-docs-example form-inline">
              <span class="bfh-currencies" data-currency="XCD" data-flags="true"></span>
          </form>
          <pre class="prettyprint">&lt;span class="bfh-currencies" data-currency="XCD" data-flags="true"&gt;&lt;/span&gt;</pre>
       </section>
       
       
       <!-- Phone
        ================================================== -->
        <section id="phone">
          <div class="page-header">
            <h1>Phone <small>bootstrap-formhelpers-phone.js</small></h1>
          </div>
          
          <h3>About phone</h3>
          <p>For simple formatting of phone numbers, include bootstrap-formhelpers-phone.format.js and bootstrap-formhelpers-phone.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simple example for formatting a phone number in input text</p>
          <form class="bs-docs-example form-inline">
            <input type="text" class="input-medium bfh-phone" data-format="+1 (ddd) ddd-dddd">
          </form>
          <pre class="prettyprint">&lt;input type="text" class="input-medium bfh-phone" data-format="+1 (ddd) ddd-dddd"&gt;</pre>

          <p>Simple example for displaying a formatted phone number</p>
          <form class="bs-docs-example form-inline">
            <span class="bfh-phone" data-format="+1 (ddd) ddd-dddd" data-number="15555555555"></span>
          </form>
          <pre class="prettyprint">&lt;span class="bfh-phone" data-format="+1 (ddd) ddd-dddd" data-number="15555555555"&gt;&lt;/span&gt;</pre>

          <p>Example for formatting a phone number based on a country</p>
          <form class="bs-docs-example form-inline">
            <input type="text" class="input-medium bfh-phone" data-country="US">
          </form>
          <pre class="prettyprint">&lt;input type="text" class="input-medium bfh-phone" data-country="US"&gt;</pre>

        </section>
        
        
        <!-- Languages
        ================================================== -->
        <section id="languages">
          <div class="page-header">
            <h1>Languages <small>bootstrap-formhelpers-languages.js</small></h1>
          </div>
          
          <h3>About Languages</h3>
          <p>For adding a drop-down of languages or display languages name from language code, include bootstrap-formhelpers-languages.codes.js and bootstrap-formhelpers-languages.js once alongside the other JS files.</p>
          <p>If you want to have access to the country names, you can include bootstrap-formhelpers-countries.{language}.js</p>
          <p>If you want to have access to the country flags, you can include bootstrap-formhelpers-countries.flags.css once alongside the other CSS files.</p>
          <h3>Use cases</h3>

          <p>Example for loading the list of languages and selecting a default language</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-languages" data-language="en"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-languages" data-language="en"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of languages with country names</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-languages" data-language="en_US" data-available="en_US,fr_CA,es_MX"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-languages" data-language="en_US" data-available="en_US,fr_CA,es_MX"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of languages and flags using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox bfh-languages" data-language="en_US" data-available="en_US,fr_CA,es_MX" data-flags="true">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-languages" data-language="en_US" data-available="en_US,fr_CA,es_MX" data-flags="true"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example for displaying the language name and flag from language code</p>
          <form class="bs-docs-example form-inline">
            <span class="bfh-languages" data-language="en_US" data-flags="true"></span>
          </form>
          <pre class="prettyprint">&lt;span class="bfh-languages" data-language="en_US" data-flags="true"&gt;&lt;/span&gt;</pre>
        </section>
        
        
        <!-- Timezones
        ================================================== -->
        <section id="timezones">
          <div class="page-header">
            <h1>Timezones <small>bootstrap-formhelpers-timezones.js</small></h1>
          </div>
          
          <h3>About timezones</h3>
          <p>For adding a drop-down of timezones of a country from country code, include bootstrap-formhelpers-timezones.codes.js and bootstrap-formhelpers-timezones.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Example for loading the list of timezones for a country</p>
          <form class="bs-docs-example form-inline">
            <select class="input-medium bfh-timezones" data-country="US"></select>
          </form>
          <pre class="prettyprint">&lt;select class="input-medium bfh-timezones" data-country="US"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of timezones for a country in JavaScript</p>
          <form class="bs-docs-example form-inline">
            <button onclick="$('#timezones1').bfhtimezones({country: 'US'});return false;" class="btn">Load Timezones</button>
            <select id="timezones1" class="input-medium"></select>
          </form>
          <pre class="prettyprint">&lt;button onclick="$('#timezones1').bfhtimezones({country: 'US'})" class="btn"&gt;Load Timezones&lt;/button&gt;
&lt;select id="timezones1" class="input-medium"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of timezones using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-selectbox bfh-timezones" data-country="US">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-timezones" data-country="US"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example for loading the list of timezones based on a country selector</p>
          <form class="bs-docs-example form-inline">
            <select id="countries_timezones1" class="input-medium bfh-countries" data-country="US"></select>
            <select class="input-medium bfh-timezones" data-country="countries_timezones1"></select>
          </form>
          <pre class="prettyprint">&lt;select id="countries_timezones1" class="input-medium bfh-countries" data-country="US"&gt;&lt;/select&gt;
&lt;select class="input-medium bfh-timezones" data-country="countries_timezones1"&gt;&lt;/select&gt;</pre>

          <p>Example for loading the list of timezones based on a country select using Bootstrap Form Helpers' Select Box</p>
          <form class="bs-docs-example form-inline">
            <div id="countries_timezones2" class="bfh-selectbox bfh-countries" data-country="US">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
            <div class="bfh-selectbox bfh-timezones" data-country="countries_timezones2">
              <input type="hidden" value="">
              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                <b class="caret"></b>
              </a>
              <div class="bfh-selectbox-options">
                <div role="listbox">
                  <ul role="option">
                  </ul>
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div id="countries_timezones2" class="bfh-selectbox bfh-countries" data-country="US"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="bfh-selectbox bfh-timezones" data-country="countries_timezones2"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-medium" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
  &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        
         <!-- Google Fonts
        ================================================== -->
        <section id="googlefonts">
          <div class="page-header">
            <h1>Google Fonts <small>bootstrap-formhelpers-googlefonts.js</small></h1>
          </div>
          
          <h3>About Google fonts</h3>
          <p>For adding a drop-down of Google Fonts, include bootstrap-formhelpers-googlefonts.codes.js and bootstrap-formhelpers-googlefonts.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simplest example, with default selected value.</p>
          <form class="bs-docs-example form-inline">
          <div class="bfh-selectbox bfh-googlefonts" data-family="Lato">
            <input type="hidden" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
            <span class="bfh-selectbox-option input-large" data-option=""></span>
            <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text" class="bfh-selectbox-filter">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-googlefonts" data-family="Lato"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-large" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Display a subset.</p>
          <form class="bs-docs-example form-inline">
          <div class="bfh-selectbox bfh-googlefonts" data-subsets="latin-ext">
            <input type="hidden" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
            <span class="bfh-selectbox-option input-large" data-option=""></span>
            <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text" class="bfh-selectbox-filter">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-googlefonts" data-subsets="latin-ext"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-large" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Limit font choices.</p>
          <form class="bs-docs-example form-inline">
          <div class="bfh-selectbox bfh-googlefonts" data-family="Lato" data-families="Open Sans,Josefin Slab,Avro,Lato,Vollkorn,Abril Fatface,Ubuntu,PT Sans,PT Serif,Old Standard TT,Droid Sans">
            <input type="hidden" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
            <span class="bfh-selectbox-option input-large" data-option=""></span>
            <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text" class="bfh-selectbox-filter">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-googlefonts" data-families="Open Sans,Josefin Slab,Avro,Lato,Vollkorn,Abril Fatface,Ubuntu,PT Sans,PT Serif,Old Standard TT,Droid Sans"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-large" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        
        
        <!-- Date Picker
        ================================================== -->
        <section id="datepicker">
          <div class="page-header">
            <h1>Date Picker <small>bootstrap-formhelpers-datepicker.js</small></h1>
          </div>
          
          <h3>About Date Picker</h3>
          <p>For adding a date picker, include bootstrap-formhelpers-datepicker.{language}.js and bootstrap-formhelpers-datepicker.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simplest example.</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-datepicker">
              <div class="input-prepend bfh-datepicker-toggle" data-toggle="bfh-datepicker">
                <span class="add-on"><i class="icon-calendar"></i></span>
                <input type="text" class="input-medium" readonly>
              </div>
              <div class="bfh-datepicker-calendar">
                <table class="calendar table table-bordered">
                  <thead>
                    <tr class="months-header">
                      <th class="month" colspan="4">
                        <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
                        <span></span>
                        <a class="next" href="#"><i class="icon-chevron-right"></i></a>
                      </th>
                      <th class="year" colspan="3">
                        <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
                        <span></span>
                        <a class="next" href="#"><i class="icon-chevron-right"></i></a>
                      </th>
                    </tr>
                    <tr class="days-header">
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-datepicker"&gt;
  &lt;div class="input-prepend bfh-datepicker-toggle" data-toggle="bfh-datepicker"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-calendar"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input type="text" class="input-medium" readonly&gt;
  &lt;/div&gt;
  &lt;div class="bfh-datepicker-calendar"&gt;
    &lt;table class="calendar table table-bordered"&gt;
      &lt;thead&gt;
        &lt;tr class="months-header"&gt;
          &lt;th class="month" colspan="4"&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;span&gt;&lt;/span&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-right"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/th&gt;
          &lt;th class="year" colspan="3"&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;span&gt;&lt;/span&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-right"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr class="days-header"&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example showing how to set a default date and format.</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-datepicker" data-format="y-m-d" data-date="2000-01-01">
              <div class="input-prepend bfh-datepicker-toggle" data-toggle="bfh-datepicker">
                <span class="add-on"><i class="icon-calendar"></i></span>
                <input type="text" class="input-medium" readonly>
              </div>
              <div class="bfh-datepicker-calendar">
                <table class="calendar table table-bordered">
                  <thead>
                    <tr class="months-header">
                      <th class="month" colspan="4">
                        <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
                        <span></span>
                        <a class="next" href="#"><i class="icon-chevron-right"></i></a>
                      </th>
                      <th class="year" colspan="3">
                        <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
                        <span></span>
                        <a class="next" href="#"><i class="icon-chevron-right"></i></a>
                      </th>
                    </tr>
                    <tr class="days-header">
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-datepicker" data-format="y-m-d" data-date="2000-01-01"&gt;
  &lt;div class="input-prepend bfh-datepicker-toggle" data-toggle="bfh-datepicker"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-calendar"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input type="text" class="input-medium" readonly&gt;
  &lt;/div&gt;
  &lt;div class="bfh-datepicker-calendar"&gt;
    &lt;table class="calendar table table-bordered"&gt;
      &lt;thead&gt;
        &lt;tr class="months-header"&gt;
          &lt;th class="month" colspan="4"&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;span&gt;&lt;/span&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-right"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/th&gt;
          &lt;th class="year" colspan="3"&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-left"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;span&gt;&lt;/span&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-right"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr class="days-header"&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        <!-- Time Picker
        ================================================== -->
        <section id="timepicker">
          <div class="page-header">
            <h1>Time Picker <small>bootstrap-formhelpers-timepicker.js</small></h1>
          </div>
          
          <h3>About Time Picker</h3>
          <p>For adding a time picker, include bootstrap-formhelpers-timepicker.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simplest example.</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-timepicker">
              <div class="input-prepend bfh-timepicker-toggle" data-toggle="bfh-timepicker">
                <span class="add-on"><i class="icon-time"></i></span>
                <input type="text" class="input-medium" readonly>
              </div>
              <div class="bfh-timepicker-popover">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="hour">
                        <a class="next" href="#"><i class="icon-chevron-up"></i></a><br>
                        <input type="text" class="input-mini" readonly><br>
                        <a class="previous" href="#"><i class="icon-chevron-down"></i></a>
                      </td>
                      <td class="separator">:</td>
                      <td class="minute">
                        <a class="next" href="#"><i class="icon-chevron-up"></i></a><br>
                        <input type="text" class="input-mini" readonly><br>
                        <a class="previous" href="#"><i class="icon-chevron-down"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-timepicker"&gt;
  &lt;div class="input-prepend bfh-timepicker-toggle" data-toggle="bfh-timepicker"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-time"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input type="text" class="input-medium" readonly&gt;
  &lt;/div&gt;
  &lt;div class="bfh-timepicker-popover"&gt;
    &lt;table class="table"&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td class="hour"&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-up"&gt;&lt;/i&gt;&lt;/a&gt;&lt;br&gt;
            &lt;input type="text" class="input-mini" readonly&gt;&lt;br&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/td&gt;
          &lt;td class="separator"&gt;:&lt;/td&gt;
          &lt;td class="minute"&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-up"&gt;&lt;/i&gt;&lt;/a&gt;&lt;br&gt;
            &lt;input type="text" class="input-mini" readonly&gt;&lt;br&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

          <p>Example showing how to set a default time.</p>
          <form class="bs-docs-example form-inline">
            <div class="bfh-timepicker" data-time="08:00">
              <div class="input-prepend bfh-timepicker-toggle" data-toggle="bfh-timepicker">
                <span class="add-on"><i class="icon-time"></i></span>
                <input type="text" class="input-medium" readonly>
              </div>
              <div class="bfh-timepicker-popover">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="hour">
                        <a class="next" href="#"><i class="icon-chevron-up"></i></a><br>
                        <input type="text" class="input-mini" readonly><br>
                        <a class="previous" href="#"><i class="icon-chevron-down"></i></a>
                      </td>
                      <td class="separator">:</td>
                      <td class="minute">
                        <a class="next" href="#"><i class="icon-chevron-up"></i></a><br>
                        <input type="text" class="input-mini" readonly><br>
                        <a class="previous" href="#"><i class="icon-chevron-down"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-timepicker" data-time="08:00"&gt;
  &lt;div class="input-prepend bfh-timepicker-toggle" data-toggle="bfh-timepicker"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-time"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input type="text" class="input-medium" readonly&gt;
  &lt;/div&gt;
  &lt;div class="bfh-timepicker-popover"&gt;
    &lt;table class="table"&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td class="hour"&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-up"&gt;&lt;/i&gt;&lt;/a&gt;&lt;br&gt;
            &lt;input type="text" class="input-mini" readonly&gt;&lt;br&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/td&gt;
          &lt;td class="separator"&gt;:&lt;/td&gt;
          &lt;td class="minute"&gt;
            &lt;a class="next" href="#"&gt;&lt;i class="icon-chevron-up"&gt;&lt;/i&gt;&lt;/a&gt;&lt;br&gt;
            &lt;input type="text" class="input-mini" readonly&gt;&lt;br&gt;
            &lt;a class="previous" href="#"&gt;&lt;i class="icon-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
          &lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        
         <!-- Fonts
        ================================================== -->
        <section id="fonts">
          <div class="page-header">
            <h1>Fonts <small>bootstrap-formhelpers-fonts.js</small></h1>
          </div>
          
          <h3>About Fonts</h3>
          <p>For adding a drop-down of Fonts, include bootstrap-formhelpers-fonts.codes.js and bootstrap-formhelpers-fonts.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simplest example, with default selected value.</p>
          <form class="bs-docs-example form-inline">
          <div class="bfh-selectbox bfh-fonts" data-family="Helvetica">
            <input type="hidden" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
            <span class="bfh-selectbox-option input-large" data-option=""></span>
            <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text" class="bfh-selectbox-filter">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-fonts" data-family="Helvetica"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-large" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>
        
        
        <!-- Font Sizes
        ================================================== -->
        <section id="fontsizes">
          <div class="page-header">
            <h1>Font Sizes <small>bootstrap-formhelpers-fontsizes.js</small></h1>
          </div>
          
          <h3>About Font Sizes</h3>
          <p>For adding a drop-down of Font Sizes, include bootstrap-formhelpers-fontsizes.codes.js and bootstrap-formhelpers-fontsizes.js once alongside the other JS files.</p>
          <h3>Use cases</h3>

          <p>Simplest example, with default selected value.</p>
          <form class="bs-docs-example form-inline">
          <div class="bfh-selectbox bfh-fontsizes" data-size="14">
            <input type="hidden" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
            <span class="bfh-selectbox-option input-large" data-option=""></span>
            <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text" class="bfh-selectbox-filter">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
          </form>
          <pre class="prettyprint">&lt;div class="bfh-selectbox bfh-fontsizes" data-size="14"&gt;
  &lt;input type="hidden" value=""&gt;
  &lt;a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#"&gt;
    &lt;span class="bfh-selectbox-option input-large" data-option=""&gt;&lt;/span&gt;
    &lt;b class="caret"&gt;&lt;/b&gt;
  &lt;/a&gt;
  &lt;div class="bfh-selectbox-options"&gt;
    &lt;input type="text" class="bfh-selectbox-filter"&gt;
    &lt;div role="listbox"&gt;
    &lt;ul role="option"&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

        </section>

      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Designed and built by <a href="http://twitter.com/vincentlamanna" target="_blank">@vincentlamanna</a>.</p>
        <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p>Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p>Flags from <a href="http://www.gosquared.com">GoSquared</a>, licensed under <a href="../assets/img/bootstrap-formhelpers-countries.flags-LICENSE.txt">GoSquared</a>.</p>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
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
    
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-selectbox.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-languages.codes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-languages.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-currencies.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-fonts.codes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-fonts.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-fontsizes.codes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-fontsizes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-googlefonts.codes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-googlefonts.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-datepicker.en_US.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-datepicker.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-timepicker.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-phone.format.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-phone.js"></script>
    
    
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-countries.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-countries.en_US.js"></script>
    
    
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-currencies.en_US.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-states.en_US.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-states.js"></script>
    
    
    <script src="../assets/js/holder/holder.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>

    <script src="../assets/js/application.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-timezones.codes.js"></script>
    <script src="../assets/js/form-helpers/bootstrap-formhelpers-timezones.js"></script>
    
    
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    
    
  </body>
</html>
