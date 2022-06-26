$('#abonements-carousel').owlCarousel({
    responsiveClass:true,
    autoWidth: true,
    nav:false,
    dotsContainer:'.custom-dots-container',
    responsive:{
        0:{
          items:1,
          margin:30,
        },
        768:{
            items:2,
            margin:30,
          },
        992:{
            items:3,
            margin:30,
            dots: false,
        },
        1200:{
            margin:60,
            items:3,
            dots: false,
        }
    }
  })