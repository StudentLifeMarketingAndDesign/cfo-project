<!doctype html>
<html class="no-js" lang="$ContentLocale.ATT" dir="$i18nScriptDirection.ATT">

<head>
	<% base_tag %>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>$Title | $SiteConfig.Title | The University of Iowa</title>

	<% include MetaTags %>
	<% include Favicon %>

	<link rel="stylesheet" href="$ThemeDir/css/app.css" />
	<script src="$ThemeDir/bower_components/modernizr/modernizr.js"></script>
	<% include Typekit %>
</head>

<body class="$ClassName.ATT">
	<% include DivisionBar %>
	<% include Header %>
	<div class="main typography" role="main">
		<div class="row">
			$Layout
		</div>
	</div>
	<% include Footer %>
	<% include Analytics %>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{$ThemeDir}/build/build.js"></script>
</body>

</html>
