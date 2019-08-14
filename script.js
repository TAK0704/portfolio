
var mySwiper = new Swiper ('.swiper-container', {
  autoplay: true,
  autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
  loop: true,
  effect: 'fade',
  pagination: {
    el: '.swiper-pagination',
  },

});

var mySwiper = new Swiper ('.swiper-container2', {
  autoplay: true,
  autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

});

