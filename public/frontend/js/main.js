$(document).ready(function() 
{ 
  $("#owl-demo").owlCarousel({

      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
  rtl:false,
    loop:true,
    margin:0,
    // nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
      // singleItem:true, // is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : true
 
  });
  $('.owl-carousel').owlCarousel({
    autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
    loop:true,
    margin:10,
    // nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});