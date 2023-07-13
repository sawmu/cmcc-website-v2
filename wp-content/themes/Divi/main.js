$.noConflict();
jQuery(document).ready(function($) {
  // Use $ for jQuery code here
  $('.ministry-slider').slick({
    infinite: true,
    speed: 200,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    dots: false,

    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,

            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 545,
            settings: {
                slidesToShow: 1,
                centerMode: false,
            }
        }
    ]
});
});
