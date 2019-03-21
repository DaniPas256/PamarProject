const SLIDE_SIZE = 500;

export class MainSliderClass {
    public slider_container: HTMLElement;
    public active_slide = 0;
    public slides_number = 0;
    private loop;

    constructor() {
        this.init();
    };

    init() {
        this.slider_container = document.querySelector(".js-main-slider");
        if (this.slider_container !== null) {
            this.slides_number = document.querySelector(".js-slider-area > .slider-image") === null ? 0 : Array.from(document.querySelectorAll(".js-slider-area > .slider-image")).length;
            this.loop = setInterval(() => {
                let current_active = document.querySelector('.slider-image.active');
                current_active.classList.remove('active');

                const next_element = current_active.nextElementSibling || document.querySelector(".js-slider-area > .slider-image:first-child");
                next_element.classList.add('active');
                this.active_slide++;
                if (this.active_slide >= this.slides_number) {
                    this.active_slide = 0;
                }

                // @ts-ignore
                document.querySelector('.js-slider-area').style.transform = 'translateX(-' + this.active_slide * SLIDE_SIZE + 'px)';
            }, 4000);
        }
    };
};