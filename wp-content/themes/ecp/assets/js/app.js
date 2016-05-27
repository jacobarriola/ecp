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
    setGallerySize: false,
    pageDots: false,
    wrapAround: true, // infinite scrolling
    // prevNextButtons: false // using custon method below
  });

  $carousel.flickity( 'next');
  $('.button--next-wrapped').on( 'click', function(e) {
    e.preventDefault();
    $carousel.flickity( 'next', true );
  });

  $carousel.flickity( 'previous');
  $('.button--previous-wrapped').on( 'click', function(e) {
    e.preventDefault();
    $carousel.flickity( 'previous', true );
  });
}

// Offcanvas menu: show/hide on click
$('.js-menu-trigger,.js-menu-screen').on('click', function(evt) {
  evt.preventDefault();
  $('.js-menu,.js-menu-screen').toggleClass('is-visible');
});

});
