// Swiper for slideshow
const swiperSlideshowSub = new Swiper('.slideshow-sub', {
    navigation: {
        nextEl: ".swiper-button-next-slide",
        prevEl: ".swiper-button-prev-slide"
    },
    loop: true,
    slidesPerView: 5,
    spaceBetween: 2,
    watchSlidesProgress: true,
});
new Swiper('.slideshow', {
    navigation: {
        nextEl: ".swiper-button-next-slide",
        prevEl: ".swiper-button-prev-slide"
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    loop: true,
    autoplay: true,
    thumbs: {
        swiper: swiperSlideshowSub
    },
});

// Swiper for Trend
new Swiper('.slide-trend', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});
// Swiper for hot deal
new Swiper('.slide-hot-deal', {
    slidesPerView: 5,
    spaceBetween: 15,
    navigation: {
        nextEl: ".swiper-button-next-hd",
        prevEl: ".swiper-button-prev-hd"
    },
    breakpoints: {
        0: {
            slidesPerView: "auto"
        },
        992: {
            slidesPerView: 4
        },
        1200: {
            slidesPerView: 5
        },
    },
});
// Swiper for category
new Swiper('.slide-category', {
    slidesPerView: 7,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next-category",
        prevEl: ".swiper-button-prev-category"
    },
    breakpoints: {
        992: {
            slidesPerView: 6
        },
        1200: {
            slidesPerView: 7
        },
    },
});
// Swiper for accessory in mobile
if (deviceWidth < 992) {
    new Swiper('.slide-accessory-mb', {
        spaceBetween: 15,
        slidesPerView: 'auto',
    });
}
// Swiper for banner sub
new Swiper('.slide-banner', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    spaceBetween: 15,
    autoplay: true,
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        992: {
            slidesPerView: 2
        },
    },
});
// Swiper for accessory in PC
new Swiper('.accessory-tab', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});