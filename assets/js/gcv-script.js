$(document).ready(function () {
  
  
  /* Waypoints For the sticky navigation */
  $('.js--section-speach').waypoint(function (direction) {
    if (direction == "down") {
      $('#logo').addClass('sticky');
    } else {
      $('#logo').removeClass('sticky');
    }
  }, {
    offset: '320px;'
  });
    
 /* 
  //show modal in modal
  $('.modal').on('hidden.bs.modal', function(event) {
    $(this).removeClass( 'fv-modal-stack' );
    $('body').data( 'fv_open_modals', $('body').data( 'fv_open_modals' ) - 1 );
  });

  $('.modal').on('shown.bs.modal', function (event) {
    // keep track of the number of open modals
    if ( typeof( $('body').data( 'fv_open_modals' ) ) == 'undefined' ) {
        $('body').data( 'fv_open_modals', 0 );
    }

    // if the z-index of this modal has been set, ignore.
    if ($(this).hasClass('fv-modal-stack')) {
        return;
    }

    $(this).addClass('fv-modal-stack');
    $('body').data('fv_open_modals', $('body').data('fv_open_modals' ) + 1 );
    $(this).css('z-index', 1040 + (10 * $('body').data('fv_open_modals' )));
    $('.modal-backdrop').not('.fv-modal-stack').css('z-index', 1039 + (10 * $('body').data('fv_open_modals')));
    $('.modal-backdrop').not('fv-modal-stack').addClass('fv-modal-stack'); 
  });        

  $('#modalTickets').on('shown.bs.modal', function (event) {
    //$('#msgModal').modal('show');
  });
  */
});
