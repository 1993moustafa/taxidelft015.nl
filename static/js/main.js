$(document).ready(function () {
  $('.navbar-shark .dropdown').hover(function () {
          $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
      }, function () {
          $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
      });
  });