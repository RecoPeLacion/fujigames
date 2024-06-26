(function($){

    //slider
    $('.themeProductsDetailsList').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
    });

    //slider
    $('.themeBannerSliderList').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
    });

    //case slider
    $('.themeCaseList').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });

    //case slider
    $('#themeProductsCaseList01').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            centerMode: true
          }
        }
      ]
    });

    $('#themeProductsCaseList02').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            centerMode: true
          }
        }
      ]
    });

    $('#themeProductsCaseList03').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            centerMode: true
          }
        }
      ]
    });

    $('#themeProductsCaseList04').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            centerMode: true
          }
        }
      ]
    });

    // hamburger menu
    $('.mainHeaderHamburger').click(function(e) {
      e.preventDefault();
      $(this).toggleClass('active')
      $('body').toggleClass('ovHidden')
      $('.mainHeaderNavWrap').toggleClass('openMenu')
    })

    // input change color
    $('.themeContactFormRadio input').on('change', function() {
    $('.themeContactFormRadio input').each(function() {
      const labelSpan = $(this).next('span');
      if ($(this).is(':checked')) {
          labelSpan.addClass('checked-label');
      } else {
          labelSpan.removeClass('checked-label');
      }
    });
    });

    // Trigger change event on page load to apply class to the initially checked radio button
    $('.themeContactFormRadio input:checked').trigger('change');

})(jQuery);

document.addEventListener( 'wpcf7mailsent', function( event ) {
	setTimeout( () => {
		location = 'https://fujigames-corporate.yohakuoffice.co.jp/thank-you/';
	}, 1000 ); // Wait for 3 seconds to redirect.
}, false );


