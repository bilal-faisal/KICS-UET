$(function () {
  $('.nav .dropdown').on('mouseenter mouseleave', function () {
    $(this).find('.dropdown-toggle').dropdown('toggle');
  });
});
