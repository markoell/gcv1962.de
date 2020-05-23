<?php
  $topThemaPage = page('home/topthema');
  $termine = page('home/Termine');
  $taschengeldJob = page('home/Taschengeldjob');
  $werbung = page('home/ihre-werbung');
?>


<?php snippet('header', array('sticky' => false)) ?>

<!-- 1. Bilder anzeigen -->
<?php if($next = page('home/Titelbilder')): ?>
<section id="<?= $next->title()->html() ?>">
  <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
</section>
<?php endif ?>
<!-- 2. TopThema anzeigen -->
<?php if($topThemaPage->exists() && $topThemaPage->isListed()): ?>
<div id="<?= $topThemaPage->title()->html() ?>">
  <?php snippet(strtolower($topThemaPage->intendedTemplate()), array('data' => $topThemaPage)) ?>
</div>
<?php endif ?>
<!-- 3. Begrüßung Präsi anzeigen -->
<?php if($next = page('home/Ansprache')): ?>
<section id="Ansprache" class="js--section-speach">
  <div class="container mt-5">
    <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
  </div>
</section>
<?php endif ?>
<section id="themen" class="js--section-topics my-5">
  <div class="container mt-5">
    <div class="row d-flex justify-content-arround">
      <!-- 6. Aktuelle Termine; Link mit Katersymbol (Modal)-->
      <?php if($termine->exists() && $termine->isListed()): ?>
        <?php snippet("home/termine") ?>
      <?php endif //Termine ?>

      <!-- 4. Nur Taschengeldjob anzeigen; Link mit Katersymbol (Modal)-->
      <?php if($taschengeldJob->exists() && $taschengeldJob->isListed()): ?>
      <div class="col-sm text-center">
        <img
          src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
          class="logo mx-auto d-block py-2" alt="Kater Logo">
        <!-- Button trigger modal -->
        <?php snippet('modal', ['large' => false, 'item' => $taschengeldJob]) ?>
      </div>
      <?php endif //Taschengeldjob ?>

      <?php if($werbung->exists() && $werbung->isListed()): ?>
        <div class="col-sm text-center">
          <img
            src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
            class="logo mx-auto d-block py-2" alt="Kater Logo">
          <!-- Button trigger modal -->
          <?php snippet('modal', ['large' => true, 'item' => $werbung]) ?>
        </div>
      <?php endif //Werbung ?>

      <!-- 5. Ansprache des PP; Link mit Katersymbol (Modal?)-->
      <?php if($next = page('home/Prinzenpaars')): ?>
      <div class="col-sm text-center">
        <img
          src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
          class="logo mx-auto d-block py-2" alt="Kater Logo">
        <!-- Button trigger modal -->
        <?php snippet('modal', ['large' => true, 'item' => $next]) ?>
      </div>
      <?php endif ?>
    </div>
  </div>
</section>

<?php snippet('scripts') ?>
<?php snippet('footer/footerbar') ?>
