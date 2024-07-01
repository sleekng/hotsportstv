import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper/bundle';

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 4,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.category-next',
    prevEl: '.category-prev',
  },
});
