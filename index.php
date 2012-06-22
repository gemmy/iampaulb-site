<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Paul Bennett | Web Design | London, UK</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link href="css/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
  
  <style type='text/css'>
	  a { color: #2d2d2d; text-decoration: none;}
	  a:visited { color: #551a8b; }
	  a:hover { color: #fe57a1; border-bottom: 1px dotted #2d2d2d;}
	  a:focus { outline: thin dotted; }
	  
  </style>
  
  <!-- time zone script -->
  
  <?php
date_default_timezone_set('Europe/London');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){

}
?>
  
  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'><!-- 'Merriweather', serif; -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'><!-- 'PT Sans', sans-serif; -->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
  	<h1 class="title">iampaulb</h1>
  	
  	<nav>
	  	<a href="#">About</a>
	  	<a href="#">Skills</a>
	  	<a href="#">Contact</a>
  	</nav>

  </header>
  
  <div role="main">
  	<section id="mainhead">
  		Web designer hiding in secret, in the city of London.<br><span>Learning to come out of hiding to be a heroic web ninja!<span>
  	</section>
  	<p>
  	<section id="mainfoot">
  		Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
  	</section>

  </div>
  
  <footer>
  	<div class="social">
  		<div class="tbird">
  		<a href="http://www.twitter.com/paulbe_"><img  src="img/twitter-bird-light-bgs.png" alt="twitter-bird-light-bgs" width="100" height="100">
  		</div> 
  		
  		<div class="tweet"></div>
  		
  		<nav class="socialicons">
  			<ul>
  				<li><a href="http://twitter.com/paulbe_"><img src="img/twitter-2.png" alt="twitter-2" width="24" height="24"></a></li>
  				<li><a href="linkedin"><img src="img/linkedin.png" alt="linkedin" width="24" height="24"></a></li>
  				<li><a href="https://github.com/iampaulb"><img src="img/github.png" alt="github" width="24" height="24"></a></li> 
  				<li><a href="facebook"><img src="img/facebook.png" alt="facebook" width="24" height="24"></a></li>				
  			</ul>
  		</nav>
  	</div> 	
  	<section id="footlow">
  	<div id="footb_left">
  		This open sourced site is hosted on <a href ="https://github.com/iampaulb/iampaulb-site">Github.</a><br>
  		Patches, suggestions, and comments are welcome.
  	</div>
  	
  	<div id="footb_right">
  		Paul Bennett | <a href="mailto:hello@iampaulb.com">Email</a> | <a href="skype:skypepaulbennett">Skype</a> |<br> <?php echo date('H:i | D, F j ')?>
  	</div>
  </section>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->
  <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="js/jquery.tweet.js" type="text/javascript"></script>  

<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "paulbe_",
            join_text: "auto",
            avatar_size: 32,
            count: 3,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });
</script>
  
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>