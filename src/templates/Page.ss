<!doctype html>
<html class="no-js" lang="$ContentLocale.ATT" dir="$i18nScriptDirection.ATT">

<head>
	<% base_tag %>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<% include TitleAttribute %>
	<% include OpenGraph %>
	<% include Favicon %>

	<link rel="stylesheet" href="$ThemeDir/dist/css/app.css" />
	<script src="cfo-project/bower_components/modernizr/modernizr.js"></script>
	<% include Typekit %>
	<% include Analytics %>
</head>

<body class="$ClassName.ATT">
	<% include DivisionBarFoundation %>

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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{$ThemeDir}/dist/scripts/app.js"></script>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=270867676312194&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>