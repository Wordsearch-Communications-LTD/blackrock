const cardCarousels = document.querySelectorAll('.card-carousel .swiper');
const fullImageCarousels = document.querySelectorAll('.image-carousel .swiper');

cardCarousels.forEach(cardCarousel => {
    cardCarousel = new Swiper('' + cardCarousel.dataset.carouselClass + '', {
        slidesPerView: 1,
        slidesOffsetBefore: 10,
        spaceBetween: 0,
        pagination: {
            el: cardCarousel.dataset.carouselClass + '-pagination',
            clickable: true,
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
            clickable: true,
        },
        onAny(eventName, ...args){

            // use the carousel events to add classes that 
            // show hide or change color of custom cursor
            
            
            if(eventName == "init"){
                if(args[0].activeIndex === 0){
                    console.log('stop prev');
                    currentCarouseNode.classList.add('disable-prev');
                }
                else {
                    currentCarouseNode.classList.remove('disable-prev');
                }
            }
            
            if(eventName == "activeIndexChange"){
                currentCarouseNode.classList.add('cursor-change');
            }

            if(eventName == "transitionEnd"){
                currentCarouseNode.classList.remove('cursor-change');

                //if first slide add disable previous
                if(args[0].activeIndex === 0){
                    console.log('stop prev');
                    currentCarouseNode.classList.add('disable-prev');
                }
                else {
                    currentCarouseNode.classList.remove('disable-prev');
                }

                //if last slide disable next
                if((args[0].activeIndex + 1) === args[0].slides.length) {
                    
                    currentCarouseNode.classList.add('disable-next');
                }
                else {
                    
                    currentCarouseNode.classList.remove('disable-next');
                }
            }

        }
    });

    currentCarouseNode.addEventListener('touchstart', e => {
        currentCarouseNode.classList.add('mobile-touched');
    });
});




