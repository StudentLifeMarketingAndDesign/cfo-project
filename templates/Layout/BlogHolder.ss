
<div class="large-9 columns content-left">
	<div id="BlogContent" class="blogcontent">

		<% if SelectedTag %>
			<h3><% _t('BlogHolder_ss.VIEWINGTAGGED', 'Viewing entries tagged with') %> '$SelectedTag'</h3>
		<% else_if SelectedDate %>
			<h3><% _t('BlogHolder_ss.VIEWINGPOSTEDIN', 'Viewing entries posted in') %> $SelectedNiceDate</h3>
		<% else_if SelectedAuthor %>
			<h3><% _t('BlogHolder_ss.VIEWINGPOSTEDBY', 'Viewing entries posted by') %> $SelectedAuthor</h3>
		<% end_if %>

		<% if BlogEntries %>
			<% loop BlogEntries %>
				<% include BlogSummary %>
			<% end_loop %>
		<% else %>
			<h2><% _t('BlogHolder_ss.NOENTRIES', 'There are no blog entries') %></h2>
		<% end_if %>

		<% include BlogPagination %>

	</div>
</div>

<div class="large-3 columns content-right">
	<br>
	<% include BlogSideBar %>
</div>
