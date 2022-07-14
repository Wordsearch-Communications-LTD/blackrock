const cardCarousels = document.querySelectorAll('.card-carousel .swiper');
const fullImageCarousels = document.querySelectorAll('.image-carousel .swiper');

cardCarousels.forEach(cardCarousel => {
    cardCarousel = new Swiper('' + cardCarousel.dataset.carouselClass + '', {
        slidesPerView: 1,
        slidesOffsetBefore: 10,
        spaceBetween: 0,
        pagination: {
            el: cardCarousel.dataset.carouselClass + '-pagination',
          },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesOffsetBefore: 30,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                slidesOffsetBefore: 30,
                spaceBetween: 0,
            }
        }  
    });
});

fullImageCarousels.forEach(imageCarousel => {
    let currentCarouseNode = imageCarousel;

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

    currentCarouseNode.addEventListener('touchstart', e => {
        currentCarouseNode.classList.add('mobile-touched');
    });
});




