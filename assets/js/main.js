jQuery(document).ready(function ($) {
  jQuery(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true, // enable navigation
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",

      // "<i class='fas fa-arrow-left'></i>",
      // "<i class='fa fa-angle-right'></i>",


    ], // set custom arrow icons
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
}); 



// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:true
//         },
//         600:{
//             items:2,
//             nav:false
//         },
//         1000:{
//             items:3,
//             nav:true,
//             loop:false
//         }
//     }
// })
