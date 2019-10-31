$(document).ready(function () {
  /* For the sticky navigation */
  $('.js--section-speach').waypoint(function (direction) {
    if (direction == "down") {
      $('#logo').addClass('sticky');
    } else {
      $('#logo').removeClass('sticky');
    }
  }, {
    offset: '60px;'
  });

  //Remove the '#' char on redirect via logo
  if (window.location.href === "<?= url()?>/#") {
    history.pushState({
      id: 'startpage'
    }, '<?= $site->title()->html() ?> | <?= $page->title()->html() ?>', '<?= url()?>/');
  }

  var homeLink = $("a#homelink").click(function () {

    window.location.href = "<?= url() ?>/#";
    return false;

  });

});