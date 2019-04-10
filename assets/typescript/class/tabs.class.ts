
const CONTROLS = document.querySelectorAll('.js-tab-controls button')
const TABS = document.querySelector('.js-tabs-content');

export class TabsClass {
    public active_tabs;

    constructor() {
        this.init();
    };

    init() {
        CONTROLS.forEach(item => {
            let _this = this;
            item.addEventListener('click', function () {
                _this.changeTab(this.dataset.tab);
            })
        });

        // @ts-ignore
        this.changeTab($_ACTIVE_TAB);
    }

    changeTab(active) {
        this.active_tabs = active;
        CONTROLS.forEach((item: HTMLElement) => {
            item.classList.remove('active');
            if (Number(item.dataset.tab) === active) {
                item.classList.add('active');
            }
        });

        TABS.querySelector('.active') ? TABS.querySelector('.active').classList.remove('active') : null;

        setTimeout(() => {
            TABS.querySelector(`.tab[data-tab="${active}"]`).classList.remove('unactive');
            TABS.querySelectorAll(`.tab:not([data-tab="${active}"])`).forEach(item => item.classList.add('unactive'));
            setTimeout(() => {
                TABS.querySelector(`.tab[data-tab="${active}"]`).classList.add('active');
            }, 100);
        }, 550);
    }
}