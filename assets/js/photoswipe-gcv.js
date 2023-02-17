import PhotoSwipeLightbox from '/assets/vendors/photoswipe/photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
  gallery: '#my-gallery',
  children: 'a',
  pswpModule: () => import('/assets/vendors/photoswipe/photoswipe.esm.js')
});
lightbox.init();