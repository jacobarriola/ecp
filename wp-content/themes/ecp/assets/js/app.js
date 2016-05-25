jQuery(document).ready(function($) {

// $(document).foundation();

// Offcanvas menu: show/hide on click
$('.js-menu-trigger,.js-menu-screen').on('click', function(evt) {
  evt.preventDefault();
  $('.js-menu,.js-menu-screen').toggleClass('is-visible');
});

});
