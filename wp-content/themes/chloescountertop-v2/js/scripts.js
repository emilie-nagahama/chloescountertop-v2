jQuery(function($) {

  $('.opt-in-button').click(function(e){
    e.preventDefault();
    $('.gifts-optin form.form-box').toggleClass('slide-down-optin');
  });

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

  //Mobile Menu Function
  $('.menu-button').click(function(event) {
    event.preventDefault();
    $('#mobile-menu').slideToggle();
    $(this).html($(this).text() === 'Menu' ? '&#x1F187;' : 'Menu');
  });

  //Popup Function
  var modal = $('.modalwindow'),
  box = $('.modal-box');

  //Select all the a tag with name equal to modal
  $('.popup-button').click(function(e) {
      e.preventDefault();

      //Get the A tag
      // $('model').toggle();
      //Get the window height and width
      var winH = $(window).height();
      var winW = $(window).width();
      //Set the popup window to center
      box.css('top', winH/2-box.height()/2);
      box.css('left', winW/2-box.width()/2);
      //transition effect
      box.fadeIn(500);

      $('body').addClass('popup-body');
  });

  // If close button or esc is clicked
  function resetForm(e) {
    $(box).fadeOut(500);
    $('body').removeClass('popup-body');
    $('.validate').trigger('reset').removeClass('submission-error');
    $('#mce-error-response').hide();
  }

  $('.close').click(function(e) {
    e.preventDefault();
    resetForm();
  });

  $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode === 27) {
      resetForm();
    }
  });

  //Validate subscribe form
  $('.validate').submit(function(e) {
    var $this = $(this);
    $.ajax({
      type: "GET", // GET & url for json slightly different
      url: "http://chloescountertop.us5.list-manage.com/subscribe/post-json?u=69a2680f7acd058053dfa0020&id=32fc4ab161&c=?",
      data: $this.serialize(),
      dataType    : 'json',
      contentType: "application/json; charset=utf-8",
      error       : function(err) { alert("Could not connect to the registration server."); },
      success     : function(data) {
          if (data.result != "success") {
              // Something went wrong, parse data.msg string and display message
              $('#mce-error-response').show()
              $this.addClass('submission-error');
          } else {
              // It worked, so hide form and display thank-you message.
              $(box).children('h3').text('Thank you for subscribing! Please confirm your email address to complete subscription');
              $('#mc_embed_signup').hide();
          }
      }
    });
    return false;
  });

  // Instagram API Functionality
  var $grid = $('.ig-wrapper');
  var endpointURL = 'https://api.instagram.com/v1/users/self/media/recent/?count=6&access_token=4052048.6b1d0cb.efd61d0b222a4970b3b658acc8f2a60d';
  var photoElements = '';
  var buildPhotoGrid = function (value) {
    photoElements +=  '<li class="Grid-item">';
    photoElements +=      '<a href="' + value.link + '" target="_blank" style="background: url(' + value.images.standard_resolution.url + ')"></a>';
    photoElements +=  '</li>';
  };

  $.ajax({
    dataType: 'jsonp',
    method: 'GET',
    url: endpointURL,
  })
  .done(function (apiData) {
    photoElements += '<ul class="Grid">';
    $.each(apiData.data, function (key, value) {
      buildPhotoGrid(value);
    });
    photoElements += '</ul>';
    $grid.append(photoElements);
  });

//end of document.ready
});
