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
	<script src="cfo-project/bower_components/modernizr/modernizr.js"></script>
	<% include Typekit %>
	<% include Analytics %>
</head>

<body class="$ClassName.ATT">

	<% include DivisionBar %>

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
	<% include Footer %>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{$ThemeDir}/build/build.js"></script>

	<script src="cfo-project/javascript/responsive-nav.js"></script>
	<script>
		var navigation = responsiveNav(".nav-collapse", {
			insert: "before"
		});
	</script>

</body>
</html>
