const MODAL_CONTAINER = document.querySelector('.contact__modal');

export class ContactModal {
    constructor() {
        this.init();
    };

    init() {
        Array.from(document.querySelectorAll('.js-contact-modal')).forEach(item => {
            item.addEventListener('click', () => {
                MODAL_CONTAINER.classList.add('active');
            })
        });

        document.querySelector('.js-close-modal').addEventListener('click', () => {
            MODAL_CONTAINER.classList.remove('active');
        });
    }
}
