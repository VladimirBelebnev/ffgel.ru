import Swiper, {Pagination, Navigation} from "swiper";

Swiper.use([Pagination, Navigation]);

const slider = () => {
    const sliderSlider = new Swiper('.slider__slider', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 15000,
        },
        slidesPerView: 1,
        pagination: {
            el: '.slider__pagination',
            clickable: true,
        },
        on: {
            slideChange: function (swiper) {
                document.querySelector('.slider__number').innerHTML =
                    swiper.realIndex + 1 <= 9 ? `0${swiper.realIndex + 1}` : swiper.realIndex + 1;
            }
        },
    });

    const calendarSlider = new Swiper('.calendar__slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        pagination: {
            el: '.calendar__pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.calendar__next',
            prevEl: '.calendar__prev',
        },
        breakpoints: {
            1170: {
                spaceBetween: 20,
                slidesPerView: 3
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            300: {
                slidesPerView: 1,
            }
        }
    });
};

slider();