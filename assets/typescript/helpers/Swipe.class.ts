export class Swipe {
    private xDown;
    private yDown;
    private element;
    private xDiff;
    private yDiff;

    public onLeft: any = () => { };
    public onRight: any = () => { };
    public onUp: any = () => { };
    public onDown: any = () => { };

    constructor(element) {
        this.xDown = null;
        this.yDown = null;
        this.element = typeof (element) === 'string' ? document.querySelector(element) : element;

        this.element.addEventListener('touchstart', (evt) => {
            this.xDown = evt.touches[0].clientX;
            this.yDown = evt.touches[0].clientY;
        }, false);

    }

    handleTouchMove(evt) {
        if (!this.xDown || !this.yDown) {
            return;
        }

        let xUp = evt.touches[0].clientX;
        let yUp = evt.touches[0].clientY;

        this.xDiff = this.xDown - xUp;
        this.yDiff = this.yDown - yUp;

        if (Math.abs(this.xDiff) > Math.abs(this.yDiff)) { // Most significant.
            if (this.xDiff > 0) {
                this.onLeft();
            } else {
                this.onRight();
            }
        } else {
            if (this.yDiff > 0) {
                this.onUp();
            } else {
                this.onDown();
            }
        }

        // Reset values.
        this.xDown = null;
        this.yDown = null;
    }

    run() {
        this.element.addEventListener('touchmove', (evt) => {
            this.handleTouchMove(evt)
        }, false);
    }
}