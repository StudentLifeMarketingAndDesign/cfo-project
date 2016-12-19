<div id ="content" class = "row">
    <div id="interior" class="large-12 large-centered column">
        <% if $FilterHeader %>
            <h2>$FilterHeader</h2>
        <% else %>
		  <h2>Upcoming Events</h2>
        <% end_if %>
	   	<% if $EventList %>
        <ul class="event-list xlarge-block-grid-4 large-block-grid-3 medium-block-grid-2 small-block-grid-1">
	            <% loop $EventList %>
                    <% include EventCard %>
	            <% end_loop %>
        </ul>
        <% else %>
        <div class="row">
            <div class="large-8 columns">
            	<p>No Events</p>
            </div>
         </div>
        <% end_if %>
       
    </div>  
</div>