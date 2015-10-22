var clndr = {};

$(document).ready(function() {

      if(LANG && LANG=='default'){
          moment.locale('es');
      } else {
        moment.locale('en');
      }

      var currentMonth = moment().format('YYYY-MM');
      var nextMonth    = moment().add('month', 1).format('YYYY-MM');

      if($('#mini-clndr').size()){
        $('#mini-clndr').clndr({
            template: $('#mini-clndr-template').html(),
            events: EVENTS,

            clickEvents: {
              click: function(target) {
                if(target.events.length) {
                  var daysContainer = $('#mini-clndr').find('.days-container');
                  daysContainer.toggleClass('show-events', true);
                  $('#mini-clndr').find('.x-button').click( function() {
                    daysContainer.toggleClass('show-events', false);
                  });
                }
              }
            },
            adjacentDaysChangeMonth: true
          });
      }


      $('#myCarousel').carousel({
        interval: 40000
      });

      $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {
       
            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
            
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
           
        }
      });

});