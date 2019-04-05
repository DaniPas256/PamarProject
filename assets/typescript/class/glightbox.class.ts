import * as GLightbox from "glightbox";

export class GlightboxClass {
  constructor(public $selectors = ['glightboxTest']) {
    this.init();
  }

  init() {
    this.$selectors.forEach(item => {
      GLightbox({
        selector: item
      });
    })
  }
}
