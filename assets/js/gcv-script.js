$(document).ready(function () {
  
  
  /* Waypoints For the sticky navigation */
  $('.js--sticky').waypoint(function (direction) {
    if (direction == "down") {
      $('#logo').addClass('sticky');
    } else {
      $('#logo').removeClass('sticky');
    }
  }, {
    offset: '320px;'
  });
});
