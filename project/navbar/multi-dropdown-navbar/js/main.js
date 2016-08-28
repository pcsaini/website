$(".button").click(function() {
  $(this).toggleClass('menu-opened');
  $('.menu').toggleClass('open');
});
$(".dropdown").click(function() {
  $(this).toggleClass('submenu opened');
  $('.sub-menu').toggleClass('open');

});

$(".dropdown1").click(function() {
  $(this).toggleClass('submenu opened');
  $('.sub-sub-menu').toggleClass('open');

});

