document.addEventListener('DOMContentLoaded', function () {
  const el = document.querySelector('.cta-swiper');
  if (!el) return;

  new Swiper(el, {
    slidesPerView: 1,
    loop: true,
    autoHeight: true,
    navigation: {
      nextEl: '.testimonial .next',
      prevEl: '.testimonial .prev',
    },
    a11y: true,
  });
});
