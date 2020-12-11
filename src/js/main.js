window.addEventListener('load', () => {
    const hamburger_btn = document.getElementById('bth-ham');
    const menu_wrapper = document.getElementById('menu-wrap');
    const main_tag = document.getElementById('main_tag');
    hamburger_btn.addEventListener('click', () => {
        hamburger_btn.classList.toggle('open');
        menu_wrapper.classList.toggle('visible');
        main_tag.classList.toggle('shadowing');
    });


    // slick slider initialize
    $(document).ready(function() {
        $('.social__photos').slick({
            autoplay: true,
            centerMode: true,
            centerPadding: '60px',
            cssEase: 'ease',
            slidesToShow: 4,
            lazyLoad: 'ondemand',
            speed: 1500,
            initialSlide: 3,

            responsive: [{
                    breakpoint: 769,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 320,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
})