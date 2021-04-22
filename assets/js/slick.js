$(()=>{
    var createSlick = ()=>{
      let slider = $(".slider");
  
      slider.not('.slick-initialized').slick({
        autoplay: false,
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              adaptiveHeight: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });	
    }
  
    createSlick();
  
   $(window).on( 'resize orientationchange', createSlick );
  })















