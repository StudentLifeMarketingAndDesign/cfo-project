<!doctype html>
<html class="no-js" lang="$ContentLocale.ATT" dir="$i18nScriptDirection.ATT">

<head>
	<% base_tag %>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<% include TitleAttribute %>
	<% include OpenGraph %>
	<% include Favicon %>

	<link rel="stylesheet" href="$ThemeDir/css/app.css" />
	<script src="cfo-project/bower_components/modernizr/modernizr.js"></script>
	<% include Typekit %>
	<% include Analytics %>
</head>

<body class="$ClassName.ATT">
	<% include UiowaBar %>

	<% if $ClassName == "HomePage" %>
		<% include HeaderHome %>
	<% else %>
		<% include Header %>
	<% end_if %>

	<div class="main" role="main">
		<div class="row main-content">
			$Layout
		</div>

		<% include PageFooter %>

	</div>
	<% include Sponsors %>
	<% include Footer %>
	<% include MdBar %>
	$BetterNavigator
    <% if not $SiteConfig.DisableUITracking %>
      <script type="text/javascript">
      ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
         p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
         };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
         n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,"script","//radar-cdn.its.uiowa.edu/sp-static-js/2.7.2/radar-tracker.js","snowplow"));

      window.snowplow('newTracker', 'sp', 'radar-collector.its.uiowa.edu', {
         appId: '$SiteConfig.UITrackingID',
         cookieDomain: '.uiowa.edu',
         respectDoNotTrack: true,
         post: true,
         contexts: {
             webPage: true,
             performanceTiming: true
         }
      });

      window.snowplow('trackPageView');
      </script>
    <% end_if %>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{$ThemeDir}/build/build.js"></script>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=270867676312194&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
