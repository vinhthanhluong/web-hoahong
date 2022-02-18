export default function SlideModule() {
    document.querySelectorAll('.swiper-banner').forEach(el => {
        const slider = el.querySelector('.swiper');
        const pagination = el.querySelector('.swiper-pagination');
        const prevBtn = el.querySelector('.swiper-button-prev');
        const nextBtn = el.querySelector('.swiper-button-next');

        //not slide
        const touchMove = el.querySelector('.notslide');
        if (touchMove) {
            var notSlide = false;
        } else {
            var notSlide = true;
        }

        //loop
        const slideLoop = el.querySelector('.not-loop');
        if (slideLoop) {
            var loops = false;
        } else {
            var loops = true;
        }

        try {
            new Swiper(slider, {
                speed: 1200,
                slidesPerView: 'auto',
                autoHeight: false,
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: loops,
                allowTouchMove: notSlide,

                autoplay: {
                    delay: 6000,
                },

                pagination: {
                    el: pagination,
                    clickable: true,
                },

                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },

            });
        } catch (err) {
            console.log(err);
        }
    });

    document.querySelectorAll('.swiper-custom').forEach(el => {
        const slider = el.querySelector('.swiper');
        const pagination = el.querySelector('.swiper-pagination');
        const prevBtn = el.querySelector('.swiper-button-prev');
        const nextBtn = el.querySelector('.swiper-button-next');

        //not slide
        const touchMove = el.querySelector('.notslide');
        if (touchMove) {
            var notSlide = false;
        } else {
            var notSlide = true;
        }

        //pagi dynamic
        const pagiDynamic = el.querySelector('.dynamic');
        if (pagiDynamic) {
            var dynamic = true;
        } else {
            var dynamic = false;
        }

        //loop
        const slideLoop = el.querySelector('.not-loop');
        if (slideLoop) {
            var loops = false;
        } else {
            var loops = true;
        }

        try {
            new Swiper(slider, {
                speed: 1200,
                slidesPerView: 'auto',
                autoHeight: false,
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: loops,
                allowTouchMove: notSlide,

                // autoplay: {
                //     delay: 5000,
                // },

                pagination: {
                    el: pagination,
                    clickable: true,
                    dynamicBullets: dynamic,
                },

                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },

            });
        } catch (err) {
            console.log(err);
        }
    });

    document.querySelectorAll('.swiper-row').forEach(el => {
        const slider = el.querySelector('.swiper');
        const pagination = el.querySelector('.swiper-pagination');
        const prevBtn = el.querySelector('.swiper-button-prev');
        const nextBtn = el.querySelector('.swiper-button-next');

        try {
            new Swiper(slider, {
                speed: 1200,
                slidesPerView: 'auto',
                // spaceBetween: 15,

                autoHeight: false,
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop:true,
                autoplay: {
                    delay: 5000,
                },

                // grid: {
                //     rows: 2,
                //     fill: 'row',
                // },

                pagination: {
                    el: pagination,
                    clickable: true,
                },

                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },

                // breakpoints: {
                //     320: {
                //         spaceBetween: 15,
                //     },
                //     576: {
                //         spaceBetween: 15,
                //     },
                //     991: {
                //         spaceBetween: 15,
                //     },
                //     1200: {
                //         spaceBetween: 5,
                //     }
                // }


            });
        } catch (err) {
            console.log(err);
        }
    })

    document.querySelectorAll('.swiper-con').forEach(el => {
        const slider = el.querySelector('.swiper');
        const pagination = el.querySelector('.swiper-pagination');
        const prevBtn = el.querySelector('.swiper-prev');
        const nextBtn = el.querySelector('.swiper-next');

        //not slide
        const touchMove = el.querySelector('.notslides');
        if (touchMove) {
            var notSlide = false;
        } else {
            var notSlide = true;
        }

        //pagi dynamic
        const pagiDynamic = el.querySelector('.dynamics');
        if (pagiDynamic) {
            var dynamic = true;
        } else {
            var dynamic = false;
        }

        //loop
        const slideLoop = el.querySelector('.nots-loop');
        if (slideLoop) {
            var loops = false;
        } else {
            var loops = true;
        }

        try {
            new Swiper(slider, {
                speed: 1200,
                slidesPerView: 'auto',
                autoHeight: false,
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: loops,
                allowTouchMove: notSlide,

                // autoplay: {
                //     delay: 4000,
                // },

                pagination: {
                    el: pagination,
                    clickable: true,
                    dynamicBullets: dynamic,
                },

                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },

            });
        } catch (err) {
            console.log(err);
        }
    });

    document.querySelectorAll('.swiper-hpro').forEach(el => {
        const slider = el.querySelector('.swiper');
        const pagination = el.querySelector('.swiper-pagination');
        const prevBtn = el.querySelector('.swiper-button-prev');
        const nextBtn = el.querySelector('.swiper-button-next');

        try {
            new Swiper(slider, {
                speed: 1200,
                autoHeight: false,
                observer: true,
                observeParents: true,
                observeSlideChildren: true,

                grid: {
                    rows: 2,
                    fill: 'row',
                },

                pagination: {
                    el: pagination,
                    clickable: true,
                },

                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },

                breakpoints: {
                    320: {
                        grid: {
                            rows: 1,
                            fill: 'row',
                        },
                        slidesPerView: 2,
                    },
                    577: {
                        slidesPerView: 2,
                        
                    },

                    768: {
                        slidesPerView: 3,
                    },
                    
                    1024: {
                        slidesPerView: 4,
                    },
                }


            });
        } catch (err) {
            console.log(err);
        }
    })


    if (document.querySelector('.swiper-demo')) {
        const swiper = document.querySelector('.swiper-demo');
        const sliderContainer = swiper.querySelector('.swiper');
        const SliderPagination = swiper.querySelector('.swiper-pagination');
        const sliderPrevBtn = swiper.querySelector('.swiper-button-prev');
        const sliderNextBtn = swiper.querySelector('.swiper-button-next');
        try {
            const swiper = new Swiper(sliderContainer, {
                speed: 1000,
                loop: true,
                spaceBetween: 20,
                slidesPerView: 2,
                // autoplay: {
                //     delay: 4000,
                // },
                pagination: {
                    el: SliderPagination,
                    clickable: true,
                },

                navigation: {
                    nextEl: sliderNextBtn,
                    prevEl: sliderPrevBtn,
                },

                breakpoints: {
                    // 320: {
                    //     spaceBetween: 50
                    // },
                    // 480: {
                    //     spaceBetween: 30
                    // },
                    // 576: {
                    //     spaceBetween: 0,

                    // }
                }
                // observeParents:true,
                // observeSlideChildren: true,
                // observer: true,
            })
        }
        catch (err) {
            console.log(err)
        }
    }
}