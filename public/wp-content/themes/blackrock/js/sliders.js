const cardCarousels = document.querySelectorAll('.card-carousel .swiper');
const fullImageCarousels = document.querySelectorAll('.image-carousel .swiper');

cardCarousels.forEach(cardCarousel => {
    cardCarousel = new Swiper('' + cardCarousel.dataset.carouselClass + '', {
        slidesPerView: 3,
        slidesOffsetBefore: 40
    });
});

fullImageCarousels.forEach(imageCarousel => {
    imageCarousel = new Swiper('' + imageCarousel.dataset.carouselClass + '', {
        slidesPerView: 1,
    });
});


