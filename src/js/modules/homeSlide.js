import Splide from "@splidejs/splide";

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
