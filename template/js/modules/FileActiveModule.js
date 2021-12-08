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
}