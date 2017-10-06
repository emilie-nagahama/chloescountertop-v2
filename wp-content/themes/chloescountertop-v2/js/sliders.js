jQuery(function($){

  $(function() {
    $('.home-slider').slick({
      autoplay: true,
      autoplaySpeed: 2500,
      slidesToShow: 1,
      adaptiveHeight: true
    });

    $('.living-true-slider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,
      dots: true,
      adaptiveHeight: true,
      prevArrow: false,
      nextArrow: false
    });

    $('.mission-slider').slick({
      autoplay: true,
      autoplaySpeed: 2500,
      slidesToShow: 1,
      dots: false,
      adaptiveHeight: true,
      prevArrow: false,
      nextArrow: false
    });
  });
});
