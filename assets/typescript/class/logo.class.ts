let slider_area: HTMLElement = document.querySelector('.logo__slider--viewer');
export class LogoClass {
    public translate = 0;
    public increment_value = 1;
    public target = 'last';

    constructor() {
        this.init();
    };

    init() {
        requestAnimationFrame(() => {
            this.logoSlider()
        });
    }

    isElementInViewport(el) {
        let rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    logoSlider() {
        this.translate += this.increment_value;
        slider_area.style.transform = 'translateX(-' + this.translate + 'px)';
        let next_unloaded: HTMLElement = document.querySelector('.logo__slider--viewer .unloaded');


        if (this.target == 'last') {
            if (this.isElementInViewport(document.querySelector('.logo__slider--viewer > .last'))) {
                this.target = 'first';
                this.increment_value *= -1;
            }
        } else {
            if (this.translate < 0) {
                this.target = 'last';
                this.increment_value *= -1;
            }
        }

        if (next_unloaded !== null) {
            if (this.isElementInViewport(next_unloaded)) {
                next_unloaded.className = 'loaded';
                next_unloaded.setAttribute('src', next_unloaded.dataset.src);
                next_unloaded.dataset.src = '';
            }
        }

        requestAnimationFrame(() => {
            this.logoSlider()
        });
    }
}
