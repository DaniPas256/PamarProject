import * as GLightbox from "glightbox";

export class GlightboxClass {
  private lightboxDescription;

  constructor() {
    this.init();
  }

  init() {
    this.lightboxDescription = GLightbox({
      selector: "glightboxTest"
    });
  }
}
