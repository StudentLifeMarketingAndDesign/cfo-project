
<div class="<% if $Children || $Parent %>large-9 columns content-left<% else %>large-12<% end_if %> columns">
    <article class="article">
        <% include MemberDetails %>

    <% if $PaginatedList.Exists %>
        <h2>Posts by $CurrentProfile.FirstName $CurrentProfile.Surname for $Title:</h2>
        <% loop $PaginatedList %>
            <% include PostSummary %>
        <% end_loop %>
    <% end_if %>
    
    $Form
    $CommentsForm

    <% with $PaginatedList %>
        <% include Pagination %>
    <% end_with %>
    </article>
</div>
<% if $Children || $Parent %><%--Determine if Side Nav should be rendered, you can change this logic--%>
<div class="large-3 columns content-right">
    <br>
    <% include SideNav %>
</div>
<% end_if %>
