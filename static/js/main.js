$(document).ready(function () {
  $('.navbar-shark .dropdown').hover(function () {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    },
    function () {
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});

(function ($) {
  "use strict";
  var $navbar = $(".navbar-shark"),
  y_pos = $navbar.offset().top,
  height = $navbar.height();

  $(document).scroll(function () {
      var scrollTop = $(this).scrollTop();

      if (scrollTop > y_pos + height) {
          $navbar.addClass("fixed-top").animate({
              top: 0
          });
      } else if (scrollTop <= y_pos) {
          $navbar.removeClass("fixed-top").clearQueue().animate({
              //top: "-48px"
          }, 0);
      }
  });

})(jQuery, undefined);