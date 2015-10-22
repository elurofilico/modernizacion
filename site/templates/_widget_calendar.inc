<?php 
  
  $today = date('Y-m-d');

  $future_events_all = $pages->get('template=events')->children('date>='.$today.',sort=date,start=0');
  $events = array();
  foreach($future_events_all as $event) {
    $events[] = array(
      'date'  => parseDate($event->date,$user->language->name),
      'title' => $event->title,
      'url'   => $event->url
      );
  }

  function parseDate($d,$l) {
    if($l == 'default'){
      $parts = explode(' - ', $d);
      return $parts[2].'-'.$parts[1].'-'.$parts[0];
    } else {
      $parts = explode(' - ', $d);
      return $parts[2].'-'.$parts[0].'-'.$parts[1];
    }
  }

?>

  <script type="text/javascript">
    var EVENTS = <?php echo json_encode($events) ?>;
  </script>

  <div id="mini-clndr" class="margin-bottom-30">
    <script id="mini-clndr-template" type="text/template">

      <div class="controls">
        <div class="clndr-previous-button"><i class="fa fa-chevron-left"></i></div><div class="month"><%= month %> <%= year %></div><div class="clndr-next-button"><i class="fa fa-chevron-right"></i></div>
      </div>

      <div class="days-container">
        <div class="days">
          <div class="headers">
            <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
          </div>
          <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
        </div>
        <div class="events">
          <div class="headers">
            <div class="x-button"><i class="fa fa-times"></i></div>
            <div class="event-header"><?php echo ($user->language->name =='default')?'EVENTOS':'EVENTS'; ?></div>
          </div>
          <div class="events-list">
            <% _.each(eventsThisMonth, function(event) { %>
              <div class="event">
                <a href="<%= event.url %>"><%= event.title %><br/><%= moment(event.date).format('L') %></a>
              </div>
            <% }); %>
          </div>
        </div>
      </div>

    </script>
  </div>