import "flowbite";
import "./modules/homeSlide.js";
import "./modules/parallaxSection.js";
import AnimaScroll from "./modules/animaScroll.js";

const animaScroll = new AnimaScroll('[data-anima="scroll"]');

animaScroll.init();

/*controls sub-menus on header*/

const menuHasSubmenu = document.querySelectorAll(".menu-item-has-children > a");
menuHasSubmenu.forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();

    const subMenu = link.nextElementSibling;

    if (subMenu.classList.contains("show__submenu")) {
      subMenu.classList.remove("show__submenu");
    } else {
      subMenu.classList.add("show__submenu");
    }
  });
});
