<div class="large-9 columns content-left">
	<article>

		<h1>$Title</h1>
		<% include EntryMeta %>
		<%--
		<% if $FeaturedImage %>
			<p class="post-image">$FeaturedImage.setWidth(795)</p>
		<% end_if %>
		--%>
		<div class="content">$Content</div>
		<h2>Audio:</h2>
		<% if $AudioClip %>
			<audio src="$AudioClip.Filename" controls="controls" preload="none"></audio>
		<% end_if %>
	</article>
</div>
<div class="large-3 columns content-right">
	<br>
	<% include BlogSideBar %>
</div>
