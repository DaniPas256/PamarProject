const MODAL_CONTAINER = document.querySelector('.contact__modal');

export class ContactModal {
    constructor() {
        this.init();
    };

    init() {
        document.querySelector('.js-contact-modal').addEventListener('click', () => {
            MODAL_CONTAINER.classList.add('active');
        });

        document.querySelector('.js-close-modal').addEventListener('click', () => {
            MODAL_CONTAINER.classList.remove('active');
        });
    }
}
