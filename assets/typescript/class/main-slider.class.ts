let SLIDE_SIZE = document
  .querySelector(".slider-image img") == null ? 0 : document
    .querySelector(".slider-image img")
    .getBoundingClientRect().width;
const NUMBER_OF_ELEMENTS = Array.from(document.querySelectorAll(".slider-item"))
  .length;
const SINGLE_ELEMENT_SIZE_PERCENT = Math.ceil(100 / NUMBER_OF_ELEMENTS);
const ANIMATION_TIME = 1000;
const SLIDE_TIME = 4000 + ANIMATION_TIME;

const PROGRESS_BAR = document.querySelector(".js-progress-bar");
const FRAME_PER_SECOND = 60 / (SLIDE_TIME / 1000);
const PROGRESS_CYCLE =
  SINGLE_ELEMENT_SIZE_PERCENT / (SLIDE_TIME / FRAME_PER_SECOND);

export class MainSliderClass {
  public slider_container: HTMLElement;
  public active_slide = 0;
  public slides_number = 0;

  private progress_state = 0;

  constructor() {
    this.init();
  }

  init() {
    this.slider_container = document.querySelector(".js-main-slider");

    let resize = this.debounce(() => {
      this.resizeImage();
    }, 100);
    window.addEventListener("resize", resize);

    this.resizeImage();

    if (this.slider_container !== null) {
      // @ts-ignore
      this.slides_number =
        document.querySelector(".js-slider-area > .slider-image") === null
          ? 0
          : Array.from(
            document.querySelectorAll(".js-slider-area > .slider-image")
          ).length;

      Array.from(document.querySelectorAll(".slider-item")).forEach(item => {
        item.addEventListener("click", () => {
          this.active_slide = this.getChildNumber(item);
          this.progress_state = this.active_slide * SINGLE_ELEMENT_SIZE_PERCENT;
          this.nextSlide();
        });
      });

      requestAnimationFrame(() => {
        this.moveBar();
      });
    }
  }

  resizeImage() {
    let image_width_to_set = document
      .querySelector(".slider-window")
      .getBoundingClientRect().width;

    Array.from(document.querySelectorAll(".slider-image img")).forEach(item => {
      item.style.width = image_width_to_set + "px";
    });

    SLIDE_SIZE = document
      .querySelector(".slider-image img")
      .getBoundingClientRect().width;
  }

  debounce(func, wait, immediate = false) {
    let timeout;
    return function () {
      let context = this,
        args = arguments;
      let later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      let callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

  moveBar() {
    this.progress_state += PROGRESS_CYCLE;
    if (this.progress_state > 100) {
      this.progress_state = 0;
      this.active_slide = 0;
      this.nextSlide();
    } else {
      var slide = Math.floor(this.progress_state / SINGLE_ELEMENT_SIZE_PERCENT);
      if (slide != this.active_slide) {
        this.active_slide = slide;
        this.nextSlide();
      }
    }
    (<HTMLElement>PROGRESS_BAR).style.transform =
      "translateX(-" + (100 - this.progress_state) + "%)";

    requestAnimationFrame(() => {
      this.moveBar();
    });
  }

  nextSlide() {
    let current_active = document.querySelector(".slider-image.active");
    current_active.classList.remove("active");

    const next_element =
      current_active.nextElementSibling ||
      document.querySelector(".js-slider-area > .slider-image:first-child");
    next_element.classList.add("active");
    (<HTMLElement>document.querySelector(".js-slider-area")).style.transform =
      "translateX(-" + this.active_slide * SLIDE_SIZE + "px)";
  }

  getChildNumber(child: any) {
    var i = 0;
    while ((child = child.previousElementSibling) != null) {
      i++;
    }
    return i;
  }
}
