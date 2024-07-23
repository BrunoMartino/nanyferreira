import Splide from "@splidejs/splide";

/* control slides in Home Page */
const homeSlide = document.getElementById("banner__slide");

if (homeSlide) {
  const banner = new Splide(homeSlide, {
    type: "loop",
    rewind: true,
    pagination: true,
    arrows: false,
    autoplay: true,
  });
  banner.mount();
}

const postSlide = document.getElementById("post__wrapper");
if (postSlide) {
  const posts = new Splide(postSlide, {
    rewind: true,
    pagination: true,
    arrows: false,
    autoplay: false,
    perPage: 3,
    gap: "2rem",
    breakpoints: {
      860: {
        type: "loop",
        perPage: 2,
        autoplay: true,
        pagination: true,
      },
      620: {
        perPage: 1,
      },
    },
  });
  posts.mount();
}
/* control slides in About Page */

const photoSlide = document.getElementById("sess3__photos");

if (photoSlide) {
  const photos = new Splide(photoSlide, {
    type: "loop",
    rewind: true,
    arrows: false,
    pagination: true,
    autoplay: true,
    perPage: 4,
    perMove: 1,
    gap: "2rem",
    breakpoints: {
      960: {
        perPage: 3,
      },
      768: {
        perPage: 2,
      },
      600: {
        perPage: 1,
        gap: 0,
      },
    },
  });
  photos.mount();
}

const testimonialSlide = document.getElementById("testmonial__slide");

if (testimonialSlide) {
  const testimonial = new Splide(testimonialSlide, {
    type: "loop",
    rewind: true,
    arrows: false,
    pagination: false,
    autoplay: true,
    perPage: 4,
    perMove: 1,
    gap: "2rem",
    breakpoints: {
      960: {
        perPage: 3,
        pagination: true,
      },
      768: {
        perPage: 2,
      },
      600: {
        perPage: 1,
        gap: 0,
      },
    },
  });
  testimonial.mount();
}
