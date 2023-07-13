jQuery(document).ready(function($) {

    var data = {
        'action': 'cart_count_retriever'
    };


    $(document).on("click", ".add_to_cart_button ", function() {

        setTimeout(function() {
            jQuery.post(ajax_object.ajax_url, data, function(response) {
                // alert('Got this from the server: ' + response);
                $('.cart-custom span').html(response);
            });
        }, 1000);


    });

    $(".nav-tabs a").click(function(e) {
        console.log("clicked");
        e.preventDefault();
        $(this).tab('show');
    });

    $('.view-link').click(function() {
        $('body').css("overflow-y", "hidden");
        $('.popup-lightbox').fadeToggle("hidden");

        var title = $(this).parent().find('.article-title').text();
        var date = $(this).parent().find('.date').text();
        var text = $(this).parent().find('.testimonial-text').html();
        var image = $(this).parents('.article').find('.article-thumbnail img').attr('attr-link');

        $('.popup-lightbox .testimonial-text .testimonial-desc').html(text);
        $('.popup-lightbox .testimonial-text .article-title').text(title);
        $('.popup-lightbox .testimonial-text .date').text(date);
        $('.popup-lightbox .testimonial-info .testimonial-image img').attr("src", image);

    });

    $('.popup-lightbox').click(function() {
        $('body').css("overflow-y", "auto");
        $('.popup-lightbox').fadeToggle("hidden");
    });

    $('body.page-template-about .tutor-info').click(function() {
        var name = $(this).find('.tutor-name').text();
        var text = $(this).find('.tutor-full-detail').html();
        var image = $(this).find('.tutor-thumbnail img').attr("src");

        $('body.page-template-about .tutor-detail .tutor-name').text(name);
        $('body.page-template-about .tutor-detail .tutor-description').html(text);

        if (image) {
            $('body.page-template-about .tutor-detail .tutor-thumbnail img').show();
            $('body.page-template-about .tutor-detail .tutor-thumbnail img').attr("src", image);
        } else {
            $('body.page-template-about .tutor-detail .tutor-thumbnail img').hide();
        }

    });


    $('.home-courses-slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        rtl: false,
        dots: false,
        responsive: [{
                breakpoint: 1301,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
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
                }
            }
        ]


    });

    $('.class-type-slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
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

    $('.tutor-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
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
                    slidesToShow: 1,
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


$('.slider-main').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows: false,
	  asNavFor: '.slider-nav',
	  autoplay: false,
	});

	$('.slider-nav').slick({
	  slidesToShow: 1,
	  asNavFor: '.slider-main',
	  focusOnSelect: true,
	  autoplay: false,
	  arrows: true,
	});




});