const cardCarousels = document.querySelectorAll('.card-carousel .swiper');
const fullImageCarousels = document.querySelectorAll('.image-carousel .swiper');

cardCarousels.forEach(cardCarousel => {
    cardCarousel = new Swiper('' + cardCarousel.dataset.carouselClass + '', {
        slidesPerView: 1,
        slidesOffsetBefore: 0,
        spaceBetween: 20,
        pagination: {
            el: cardCarousel.dataset.carouselClass + '-pagination',
          },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesOffsetBefore: 40
            },
            1024: {
                slidesPerView: 3
            }
        }  
    });
});

fullImageCarousels.forEach(imageCarousel => {

    imageCarousel = new Swiper('' + imageCarousel.dataset.carouselClass + '', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: imageCarousel.dataset.carouselClass + '-pagination',
          },
    });
});


