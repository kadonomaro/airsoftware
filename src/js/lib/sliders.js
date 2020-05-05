function infiniteSlider(selector) {
    $(selector).slick({
        variableWidth: true,
        focusOnSelect: false,
        accessibility: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 10000,
        arrows: false,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1
    });
}


function internshipTeamSlider(selector) {
    $(selector).slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: $('.internship-team-slider').find('.js-slider-prev'),
        nextArrow: $('.internship-team-slider').find('.js-slider-next'),
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}


export { infiniteSlider, internshipTeamSlider }