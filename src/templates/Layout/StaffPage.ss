<div class="<% if $Children || $Parent %>large-9 columns content-left<% else %>large-12<% end_if %> columns">
	<article>
			<% if $Photo %>
					<img src="$Photo.CroppedFocusedImage(706,397).URL" alt="Photograph of $FirstName $LastName" class="staff-img">
				<% else %>
					<img src="{$ThemeDir}/dist/images/placeholder.gif" alt="Placeholder photograph of $FirstName $LastName" class="staff-img">
			<% end_if %>
			<hr>
			<h1>$Title</h1>
			<% if $Position %><h3>$Position</h3><% end_if %>
			<% if $Phone || $EmailAddress %>
				<p>
					<% if $EmailAddress %>Email: <a href="mailto:$EmailAddress">$EmailAddress</a><% end_if %>
					<% if $Phone %><br>Phone: $Phone<% end_if %>
				</p>
			<% end_if %>
			$Content
	</article>
</div>
<% if $Children || $Parent %><%--Determine if Side Nav should be rendered, you can change this logic--%>
	<div class="large-3 columns content-right">
		<br>
		<% include SideNav %>
	</div>
<% end_if %>
