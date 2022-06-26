$('#reviews-carousel').owlCarousel({
    responsiveClass: true,
    // autoWidth: true,
    nav: false,
    dots: true,
    margin: 30,
    dotsContainer:'.custom-dots-container',
    responsive: {
      0: {
        items: 1,
      },
      1200: {
        items: 2,
        dots: false,
      },
      1400: {
        items: 2,
        dots: false,
        margin: 60,
      }
    }
  })