<% if $Posts %>
	<ul class="side-nav">
		<% loop $Posts %>
			<li>
				<a href="$Link" title="$Title">
					<span class="text">$Title</span>
				</a>
			</li>
		<% end_loop %>
	</ul>
<% end_if %>