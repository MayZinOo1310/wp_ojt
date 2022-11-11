//main slide
var slider = new Swiper ('.branch-slider', {
  slidesPerView: 3,
  spaceBetween: 14,
  centeredSlides: true,
  loop: true,
  loopedSlides: 3,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

//thumbnail slide
var thumbs = new Swiper ('.branch-thumbs', {
  slidesPerView: 3,
  spaceBetween: 44,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
});