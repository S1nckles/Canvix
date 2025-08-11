document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.cta-swiper', {
      loop: true,
      autoHeight: true, 
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});