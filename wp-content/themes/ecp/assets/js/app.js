jQuery(document).ready(function($) {

// $(document).foundation();

//////////////////////////////////////////////////////////////////////////////
// Carousel
//////////////////////////////////////////////////////////////////////////////

if($.isFunction($.fn.flickity)) {
  var $carousel = $('.js-carousel');
  $carousel.flickity({
    // options
    cellAlign: 'left',
    lazyLoad: true,
    lazyLoad: 1,
    setGallerySize: false,
    pageDots: false,
    wrapAround: true // infinite scrolling
  });
}

// Offcanvas menu: show/hide on click
$('.js-menu-trigger,.js-menu-screen').on('click', function(evt) {
  evt.preventDefault();
  $('.js-menu,.js-menu-screen').toggleClass('is-visible');
});

});
