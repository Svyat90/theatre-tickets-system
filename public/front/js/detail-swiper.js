const swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  loop: true,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    200: {
      slidesPerView: 'auto'
    },
    575: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  }
});

if (window.innerWidth < 660) {
  const btn = document.querySelector('.seats-buy-btn')
  document.querySelector('.seats-map').classList.add('swiper-wrapper')
  const SeatsSwiper = new Swiper('.seats-map-wr', {
    slidesPerView: 'auto',
    freeMode: true,
  });
}
