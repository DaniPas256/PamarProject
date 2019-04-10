import { GlightboxClass } from "./class/glightbox.class";
import "../scss/layout.scss";

import { MainSliderClass } from "./class/main-slider.class";
import { FixedMenuClass } from "./class/fixed-menu";
import { NumbersClass } from "./class/numbers.class";
import { ContactModal } from "./class/contact-modal";
import { TilesClass } from "./class/tiles.class";
import { LogoClass } from "./class/logo.class";
import { TabsClass } from './class/tabs.class';
import { GridClass } from './js/grid.js';
import { ScrollToClass } from './class/scrollTo.class';


(function () {

  document.querySelector("html").scrollTop = 0;

  document.querySelector(".hamburger").addEventListener("click", function () {
    if (this.querySelector('.hamburger_input').checked) {
      document.querySelector('.header-container nav').classList.add('mobile-active');
    } else {
      document.querySelector('.header-container nav').classList.remove('mobile-active');
    }
  })

  document.addEventListener("DOMContentLoaded", event => {
    new FixedMenuClass();
    new ContactModal();
    console.log(document.querySelector('.section-07'));
    new ScrollToClass();


    // @ts-ignore
    switch (PAGE_NAME) {
      case 'index':
        document.addEventListener("aos:in:parallax", ({ detail }) => {
          new NumbersClass();
        });
        new MainSliderClass();
        new TilesClass();
        new LogoClass();
        new GlightboxClass();
        break;
      case 'about':
        new GlightboxClass();
        break;
      case 'experiance':
        new TabsClass();
        new GlightboxClass(['glightboxtab-1', 'glightboxtab-2', 'glightboxtab-3', 'glightboxtab-4', 'glightboxtab-5']);
        break;
      case 'references':
        new GridClass('.masonry')
        break;
      case 'references_details':
        new GlightboxClass();
        break;
    }
  });
})();
