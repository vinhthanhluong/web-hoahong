export default function ScrollTopModule() {

    if ($('.header').length) {

        let lastScroll = 0;
      
        $(window).scroll(function () {
            const pod = $('html,body').scrollTop();
            //console.log(pod);

            if (pod > 20) {
                $('.header').addClass('--fix');
                $('.main').css("margin-top", "100px");
            } else {
                $('.header').removeClass('--fix');
                $('.main').css("margin-top", "0");
            }

            if (pod < 20) {
                $('.header').removeClass('--fix-menu');
                return;
            }

            if (pod > lastScroll) {
                
                $('.header').removeClass('--fix-menu');

            }else{
                $('.header').addClass('--fix-menu');
            }
            lastScroll = pod <= 0 ? 0 : pod;

            

         
        });
    }





}