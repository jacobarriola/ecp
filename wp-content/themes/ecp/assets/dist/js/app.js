jQuery(document).ready(function(e){if(e.isFunction(e.fn.flickity)){var t=e(".js-carousel");t.flickity({cellAlign:"left",imagesLoaded:!0,lazyLoad:!0,lazyLoad:1,setGallerySize:!1,pageDots:!1,wrapAround:!0})}e(".js-menu-trigger,.js-menu-screen").on("click",function(t){t.preventDefault(),e(".js-menu,.js-menu-screen").toggleClass("is-visible")})}),function(){var e=navigator.userAgent.toLowerCase().indexOf("webkit")>-1,t=navigator.userAgent.toLowerCase().indexOf("opera")>-1,n=navigator.userAgent.toLowerCase().indexOf("msie")>-1;(e||t||n)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e,t=location.hash.substring(1);/^[A-z0-9_-]+$/.test(t)&&(e=document.getElementById(t),e&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus()))},!1)}();