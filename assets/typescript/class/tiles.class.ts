export class TilesClass {
    constructor() {
        this.init();
    };

    init() {
        document.querySelectorAll('.slide__tile').forEach((item) => {
            item.addEventListener('click', () => {
                this.moveToSelected(item);
            })
        })
    }

    moveToSelected(element) {
        let selected;

        if (element == "next") {
            selected = document.querySelector('.selected').nextElementSibling;
        } else if (element == "prev") {
            selected = document.querySelector('.selected').previousElementSibling;
        } else {
            selected = element;
        }
        selected.className = 'slide__tile selected active';

        let next = selected.nextElementSibling;
        if (next) {
            next.className = 'slide__tile next';
        }

        let prev = selected.previousElementSibling;
        if (prev) {
            prev.className = 'slide__tile prev';
        }

        if (next) {
            let nextSecond = next.nextElementSibling;
            if (nextSecond) {
                nextSecond.className = 'slide__tile nextRightSecond';
                item = nextSecond.nextElementSibling;
                while (item !== null) {
                    item.className = 'slide__tile hideRight';
                    item = item.nextElementSibling;
                }
            }
        }

        if (prev) {
            let prevSecond = prev.previousElementSibling;
            if (prevSecond) {
                prevSecond.className = 'slide__tile prevLeftSecond';
                var item = prevSecond.previousElementSibling;
                while (item !== null) {
                    item.className = 'slide__tile hideLeft';
                    item = item.previousElementSibling;
                }
            }
        }
    }

}
