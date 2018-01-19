// MOBILE NAVIGATION
$('.mobile-nav li.menu-item-has-children').prepend('<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>');
$('span.sub-toggle').click(function (){
  $(this).siblings(".sub-menu").slideToggle();
});
$('span.sub-toggle').click(function (){
$(this).children().toggleClass('fa-angle-down fa-angle-up');
});

// HAMBURGER ICON ANIMATION
$('.hamburger').click(function() {
	$('.hamburger, body, #page-container').toggleClass('is-active');
});

// HAMBURGER VERTICAL ALIGN
function hamburgerIcon() {
	$('.hamburger').css('height', $('header').height());
}

$(document).ready(function () {
	hamburgerIcon();
});

$(window).resize(function () {
	hamburgerIcon();
});