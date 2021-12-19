export default function SlideProductModule() {
    function slideThumbs() {

        if (document.querySelector('#slide-thumbs')) {
            const swiper = document.querySelector('#slide-thumbs');
            const sliderContainer = swiper.querySelector('.swiper');
            const SliderPagination = swiper.querySelector('.swiper-pagination');
            const sliderPrevBtn = swiper.querySelector('.swiper-button-prev');
            const sliderNextBtn = swiper.querySelector('.swiper-button-next');
            try {
                const thumbsmall = new Swiper('#thumbs-small', {
                    speed: 1000,
                    // loop: true,
                    // spaceBetween: 10,
                    // slidesPerView: 3,
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    breakpoints: {
                        320: {
                            spaceBetween: 10,
                            slidesPerView: 3,
                        },

                        768: {
                            spaceBetween: 30,
                            slidesPerView: 3,

                        }
                    }
                });

                const thumbbig = new Swiper('#thumbs-big', {
                    speed: 1000,
                    // loop: true,
                    slidesPerView: 1,
                    // spaceBetween: 10,
                    thumbs: {
                        swiper: thumbsmall,
                    },
                });
                //  click slide
                // if ($('.pro-color.cl-w').length) {
                //     $('.pro-color.cl-w').on('click', function () {
                //         thumbbig.slideTo(1);
                //     });
                // }
            }
            catch (err) {
                console.log(err)
            }
        }

    }

    $('#slide-thumbs').length && slideThumbs();


    function slideThumb() {
        if (document.querySelector('#thumb-product')) {
            const swiper = document.querySelector('#thumb-product');
            const sliderContainer = swiper.querySelector('.swiper');
            const SliderPagination = swiper.querySelector('.swiper-pagination');
            const sliderPrevBtn = swiper.querySelector('.swiper-button-prev');
            const sliderNextBtn = swiper.querySelector('.swiper-button-next');
            try {
                const thumbsmall = new Swiper('#thumb-small', {
                    speed: 1000,
                    loop: true,
                    // spaceBetween: 10,
                    // slidesPerView: 3,
                    direction: 'vertical',
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    breakpoints: {
                        320: {
                            spaceBetween: 10,
                            slidesPerView: 3,
                        },

                        768: {
                            spaceBetween: 10,
                            slidesPerView: 4,

                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },



                });

                const thumbbig = new Swiper('#thumb-big', {
                    speed: 1000,
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 10,
                    thumbs: {
                        swiper: thumbsmall,
                    },
                });
                //  click slide
                // if ($('.pro-color.cl-w').length) {
                //     $('.pro-color.cl-w').on('click', function () {
                //         thumbbig.slideTo(1);
                //     });
                // }
            }
            catch (err) {
                console.log(err)
            }
        }

    }

    $('#thumb-product').length && slideThumb();

}