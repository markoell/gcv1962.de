<!DOCTYPE html>
<html lang="de" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">

  <!-- favicon_iconset -->
  <?php snippet('header/favicon_iconset') ?>
  
  <!-- mata_information -->
  <?php snippet('meta_information'); ?>
  
  <!-- robots -->  
  <?php snippet('robots'); ?>
 
  <!-- css -->
  <?php snippet('header/css') ?>

  <?php if(isset($css) && !empty($css) && is_array($css)): ?>
  <?php foreach($css as $asset): ?>
    <?= Bnomei\Fingerprint::css('assets/css/' . $asset) ?>
  <?php endforeach ?>
  <?php endif ?>

  <!-- JavaScript -->
  <?= js('/assets/vendors/jquery/jquery.js') ?>
  <?= js('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>

  <!-- PhotoSwipeLightbox -->
  <script type="module">
    import PhotoSwipeLightbox from '/assets/vendors/photoswipe/photoswipe-lightbox.esm.min.js';
    const lightbox = new PhotoSwipeLightbox({
      gallery: '#my-gallery',
      children: 'a',
      pswpModule: () => import('/assets/vendors/photoswipe/photoswipe.esm.min.js')
    });
    lightbox.init();
  </script>
    
</head>
<body class="d-flex flex-column h-100">
  <header>
    <?php snippet('nav/navigationbar', array('sticky' => $sticky)) ?>
  </header>
