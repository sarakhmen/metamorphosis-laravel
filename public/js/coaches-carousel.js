$('#coaches-carousel').owlCarousel({
    responsiveClass: true,
    nav: true,
    dots: false,
    navContainer: '.custom-nav-container',
    navText: ["&lt;","&gt;"],
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1400: {
        items: 4,
        // nav: true,
      }
    }
  })