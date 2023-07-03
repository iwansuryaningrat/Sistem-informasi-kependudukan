// year footer
var currentYear = new Date().getFullYear();
$('#yearNow').text(currentYear);

// scroll to up button
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 1080) {
      $('#scroll-to-top .btn.btn-main').css({
        opacity: '1',
        'pointer-events': 'auto',
        'z-index': '999',
        visibility: 'visible',
      });
    } else {
      $('#scroll-to-top .btn.btn-main').css({
        opacity: '0',
        'pointer-events': 'none',
        'z-index': '-1',
        visibility: 'hidden',
      });
    }
  });

  $('#scroll-to-top').click(function () {
    $('html').animate({ scrollTop: 0 }, 150);
  });
});

// add gallery fixed button
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 0 && $(window).scrollTop() <= 1080) {
      $('#add-gallery-fixed').removeClass('hide');
      $('#add-gallery-fixed').removeClass('top');
      $('#add-gallery-fixed').addClass('down');
    } else if ($(window).scrollTop() > 1080) {
      $('#add-gallery-fixed').removeClass('hide');
      $('#add-gallery-fixed').removeClass('down');
      $('#add-gallery-fixed').addClass('top');
    } else {
      $('#add-gallery-fixed').removeClass('top');
      $('#add-gallery-fixed').removeClass('down');
      $('#add-gallery-fixed').addClass('hide');
    }
  });
});
