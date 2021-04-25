<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">

<!-- Iconset generyted on https://realfavicongenerator.net -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= url("assets/vendors/favicon_package_v0.16/apple-touch-icon.png") ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= url("assets/vendors/favicon_package_v0.16/favicon-32x32.png") ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= url("assets/vendors/favicon_package_v0.16/favicon-16x16.png") ?>">
  <link rel="manifest" href="<?= url("assets/vendors/favicon_package_v0.16/site.webmanifest") ?>">
  <link rel="mask-icon" href="<?= url("assets/vendors/favicon_package_v0.16/safari-pinned-tab.svg") ?>" color="#0e5b39">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  <?= css('assets/vendors/fontawesome-free/css/all.css') ?>
  <?= css('assets/vendors/bootstrap/css/bootstrap.css') ?>
  <?= css('https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,400i,700') ?>
  <?= css('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap') ?>
  <?= css('assets/vendors/photoswipe/photoswipe.css') ?>
  <?= css('assets/vendors/photoswipe/default-skin/default-skin.css') ?>

  <?= Bnomei\Fingerprint::css('assets/css/gcv.css') ?>
  <?= Bnomei\Fingerprint::css('assets/css/gcv-media.css') ?>
  <?= Bnomei\Fingerprint::css('assets/css/gcv-ie.css') ?>

  <?php if(isset($css) && !empty($css) && is_array($css)): ?>
  <?php foreach($css as $asset): ?>
    <?= Bnomei\Fingerprint::css('assets/css/' . $asset) ?>
  <?php endforeach ?>
  <?php endif ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  <?= js('/assets/vendors/jquery/jquery.js') ?>
  <?= js('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>
  <?= js('/assets/vendors/photoswipe/photoswipe.min.js') ?>
  <?= js('/assets/vendors/photoswipe/photoswipe-ui-default.min.js') ?>
    
  <title><?= $site->title()->html() ?> | <?= $page->headline()->html() ?></title>
</head>
<body>
<?php snippet('nav/navigationbar', array('sticky' => $sticky)) ?>
