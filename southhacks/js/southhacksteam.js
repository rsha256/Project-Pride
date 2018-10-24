$(document).ready(function () {
  $('.card').each(function (i) {
    setTimeout(function () {
      $('.card').eq(i).addClass('is-visible');
    }, 125 * i);
  });
});
