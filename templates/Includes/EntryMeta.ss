<p class="blog-post-meta">
	<% if $Categories.exists %>
		<%t Blog.PostedIn "Posted in" %>
		<% loop $Categories %>
			<a href="$Link" title="$Title">$Title</a><% if not Last %>, <% else %>;<% end_if %>
		<% end_loop %>
	<% end_if %>

	<%t Blog.Posted "Posted" %>
	$PublishDate.Format("MMMM d, y")

	<% if $Credits %>
		<%t Blog.By "by" %>
		<% loop $Credits %><% if not $First && not $Last %>, <% end_if %><% if not $First && $Last %> and <% end_if %><% if $URLSegment %><a href="$URL">$Name.XML</a><% else %>$Name.XML<% end_if %><% end_loop %>
	<% end_if %>

	<% if $Tags.exists %>
		<br />
		Tagged:
		<% loop $Tags %>
			<a href="$Link" title="$Title">$Title</a><% if not Last %>, <% else %><% end_if %>
		<% end_loop %>
	<% end_if %>

</p>
