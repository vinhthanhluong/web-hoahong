export default function ScrollTopModule() {

    if ($('.scroll-top').length) {
        $(".scroll-top").click(function () {
            $('html,body').animate({
                scrollTop: 0,
            }, 10);
            return false;
        });

        let lastScrollTop = 0;
        $(window).scroll(function () {
            const st = $('html,body').scrollTop();
            //console.log(st);

            if (st <= 10) {
                $('.scroll-top').removeClass('--active');
                return;
            }

            if (st > lastScrollTop) {
                $('.scroll-top').removeClass('--active');
            } else {
                $('.scroll-top').addClass('--active');
            }
            lastScrollTop = st <= 0 ? 0 : st;
        });
    }




}