import * as scrollToElement from "scroll-to-element";

export class FixedMenuClass {
  private active_menu = 0;

  constructor() {
    this.init();
  }

  init() {
    document.querySelectorAll(".js-set-active li").forEach(item => {
      item.addEventListener("click", () => {
        let active = document.querySelector(".js-set-active li.active");
        if (active) {
          active.classList.remove("active");
        }
        item.classList.add("active");

        let target_id = item
          .querySelector("a")
          .getAttribute("href")
          .replace("#", "");
        let target = document.getElementById(target_id);

        scrollToElement(target, {
          offset: 0,
          ease: "out-bounce",
          duration: 1500
        });
      });
    });
  }
}
