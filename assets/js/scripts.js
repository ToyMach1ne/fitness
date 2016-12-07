// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

$('.font-text').on('click', function(event) {
  var $orderButton = $('.modal-dialog');

  if ($(this).hasClass('super-button-opened')) {
    $orderButton.removeClass('headnav-opened');
    $(this).removeClass('super-button-opened')
    $('.close').removeClass('close-order--show')
  } else {
    $orderButton.addClass('headnav-opened');
    $(this).addClass('super-button-opened')
    $('.close').addClass('close-order--show')
  }
})
$('.close').on('click', function(event) {
  $('.modal-dialog').removeClass('headnav-opened');
  $('.font-text').removeClass('super-button-opened')
  $(this).removeClass('close-order--show')

})
