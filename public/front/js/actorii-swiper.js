if (window.innerWidth < 1200) {
  const actorsSwiper = new Swiper('.sl-team-wr', {
    slideClass: 'team-item',
    pagination: {
      el: '.swiper-pagination'
    },
    slidesPerView: 4,
    spaceBetween: 15,
    centeredSlides: false,
    breakpoints: {
      '320': {
        slidesPerView: 'auto',
        spaceBetween: 10,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      767: {
        slidesPerView: 3,
        spaceBetween: 15
      },
      991: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    },
  })

  const tabsSwiper = new Swiper('.sl-tabs-wr', {
    slidesPerView: 'auto',
    freeMode: true,
    slideClass: 'act-link'
  })
}
