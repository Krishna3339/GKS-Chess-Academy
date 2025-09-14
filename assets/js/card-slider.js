document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.swiper-start').forEach(container => {
    const isDisabled = container.classList.contains('swiper-disabled');
    const isHeroSlider = container.classList.contains('bd-hero-slider');

    new Swiper(container, {
      loop: !isDisabled,
      slidesPerView: isHeroSlider ? 1 : 3,  // 👈 Show 1 slide for hero, 3 for others
      spaceBetween: isHeroSlider ? 0 : 30,
      autoplay: isDisabled ? false : {
        delay: 3000,
        disableOnInteraction: false,
      },
      allowTouchMove: !isDisabled,
      pagination: {
        el: container.querySelector('.bd-class-pagination') || null,
        clickable: true,
      },
      breakpoints: isHeroSlider
        ? {} // No responsive change needed for hero
        : {
            0: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
          },
      effect: isHeroSlider ? 'fade' : 'slide',
      fadeEffect: isHeroSlider ? { crossFade: true } : undefined,
    });
  });
});
