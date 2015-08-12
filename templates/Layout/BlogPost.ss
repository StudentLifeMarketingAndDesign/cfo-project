<div class="large-9 columns content-left">
	<article>

		<h1>$Title</h1>
        
        <% if $FeaturedImage %>
			<p class="post-image">$FeaturedImage.setWidth(795)</p>
		<% end_if %>
        
		<div class="content">$Content</div>
		<% if $AudioClip %>
			<audio src="$AudioClip.Filename" controls="controls"></audio>
		<% end_if %>
		<% include EntryMeta %>
	</article>

</div>

<div class="large-3 columns content-right">
	<br>
	<% include BlogSideBar %>
</div>
