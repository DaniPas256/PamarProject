import '../scss/layout.scss';

import { MainSliderClass } from './class/main-slider.class';
import { FixedMenuClass } from './class/fixed-menu';
import { NumbersClass } from './class/numbers.class';
import { ContactModal } from './class/contact-modal';
import { TilesClass } from './class/tiles.class';
import { LogoClass } from './class/logo.class';

(function () {
    document.querySelector('html').scrollTop = 0;

    document.addEventListener('DOMContentLoaded', (event) => {
        document.addEventListener('aos:in:parallax', ({ detail }) => {
            new NumbersClass();
        });
        new MainSliderClass();
        new FixedMenuClass();
        new ContactModal();
        new TilesClass();
        new LogoClass();
    });

    // lightGallery.lightGallery(document.getElementById('lightgallery'))
})();