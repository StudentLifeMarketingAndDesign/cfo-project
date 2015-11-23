<% if $URLSegment == "home" %>
	<meta property="og:title" content="$SiteConfig.Title" />
	<meta property="og:content" content="The Division of Student Life fosters student success by creating and promoting inclusive educationally purposeful services and activities within and beyond the classroom." />
  <% if $BackgroundFeature %>
  	<meta property="og:image" content="$BackgroundFeature.Image.AbsoluteURL" />
  <% else %>
 	 <meta property="og:image" content="{$BaseHref}division-project/images/hero-image.jpg" />
  <% end_if %>

<% else %>
	<meta property="og:title" content="$Title - $SiteConfig.Title" />

	<% if $Image %>
		<meta property="og:image" content="$Image.ScaleWidth(600).AbsoluteURL" />
		<meta property="og:image:width" content="$Image.ScaleWidth(600).Width" />
		<meta property="og:image:height" content="$Image.ScaleWidth(600).Height" />
	<% else_if $Photo %>
		<meta property="og:image" content="$Photo.ScaleWidth(600).AbsoluteURL" />
		<meta property="og:image:width" content="$Photo.ScaleWidth(600).Width" />
		<meta property="og:image:height" content="$Photo.ScaleWidth(600).Height" />
	<% else_if $BackgroundImage %>
		<meta property="og:image" content="$BackgroundImage.ScaleWidth(600).AbsoluteURL" />
		<meta property="og:image:width" content="$BackgroundImage.ScaleWidth(600).Width" />
		<meta property="og:image:height" content="$BackgroundImage.ScaleWidth(600).Height" />
	<% else %>
		<meta property="og:image" content="{$BaseHref}cfo-project/images/og-dsl.png" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
	<% end_if %>
	<meta property="og:description" content="$Content.Summary(50).ATT" />


<% end_if %>
	<meta property="og:type" content="article" />
	<meta property="og:url" content="$AbsoluteLink" />
	<meta property="og:site_name" content="$SiteConfig.Title.ATT" />
	<meta property="fb:app_id" content="127918570561161" />
