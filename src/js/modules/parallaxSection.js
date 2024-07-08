import SimpleParallax from "simple-parallax-js/vanilla";

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementsByClassName("sess4-parallax");
  if (image) {
    new SimpleParallax(image, {
      orientation: "down",
      scale: 1.5,
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementsByClassName("sess6-parallax");
  if (image) {
    new SimpleParallax(image, {
      orientation: "down",
      scale: 1.5,
    });
  }
});
