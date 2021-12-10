export default function FileActiveModule() {


    $('.tab-link-mobi').on('click', function () {
        $('.tab-link').slideToggle();
    });

    if ($('.header-catalog').length) {
        // $('.cata-tt').on('click', function () {
        //     $('.header-catalog').toggleClass('active');
        //     $('.cata-content').slideToggle();
        // });

        $('.header-catalog').hover(function () {
            $(this).addClass('active');
            $('.cata-content').stop().slideDown();

        }, function () {
            $(this).removeClass('active');
            $('.cata-content').stop().slideUp();
        }
        );
    }

    if ($('.header-mobi-cata').length) {
        const width = $(window).width();
        
        if (width < 1200) {
            $('.header-catalog').appendTo('.header-mobi-cata');
        }

        if (width < 768) {
            $('.header-mobi-cata').appendTo('.header-right');
        }
        
    }
}