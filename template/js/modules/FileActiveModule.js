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

    if ($('.product-calog')) {
        $('.c-icon').on('click', function () {
            $(this).closest('.c-item').find('.c-content').slideToggle();
            $(this).closest('.c-item').toggleClass('active').siblings().removeClass('active');

            $(this).closest('.c-item').siblings().find('.c-content').slideUp();
            
        });
        
    }

    
}