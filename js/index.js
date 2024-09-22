const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    breakpoints: {
        0:{
            slidesPerView: 1,
            spaceBetween: 10
        },
        600:{
            slidesPerView: 2,
            spaceBetween: 10
        },
        1024:{
            slidesPerView: 3,
            spaceBetween: 10
        }
    }
  });