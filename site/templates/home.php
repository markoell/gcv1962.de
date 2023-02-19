<?php
  $termine = $kirby->collection("datesOverview");
  $taschengeldJob = page('home/Taschengeldjob');
  $werbung = page('home/ihre-werbung');
?>

<?php snippet('header', array('sticky' => false)) ?>
<main>
  <?php snippet('popups', array('popups' => $popups)) //TopThema anzeigen ?>

  <?php if(!$page->demo()->exists()): ?>
    <!-- 2. Bilder anzeigen -->
    <?php
      $next = page('home/Titelbilder');
      if(!is_null($next)): 
    ?>
      <section id="<?= $next->title()->html() ?>">
        <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
      </section>
    <?php endif ?>
    <!-- 3. Begrüßung Präsi anzeigen -->
    <?php 
      $next = page('home/Ansprache');
      if(!is_null($next)): 
    ?>
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
          <?php if(!is_null($termine) && $termine->hasListedChildren()): ?>
            <?php snippet("home/termine") ?>
          <?php endif //Termine ?>

          <!-- 4. Nur Taschengeldjob anzeigen; Link mit Katersymbol (Modal)-->
          <?php if(!is_null($taschengeldJob) && $taschengeldJob->isListed()): ?>
          <div class="col-sm text-center">
            <img
              src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
              class="logo mx-auto d-block py-2" alt="Kater Logo">
            <!-- Button trigger modal -->
            <?php snippet('modal', ['large' => false, 'item' => $taschengeldJob]) ?>
          </div>
          <?php endif //Taschengeldjob ?>

          <?php if(!is_null($werbung) && $werbung->isListed()): ?>
            <div class="col-sm text-center">
              <img
                src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
                class="logo mx-auto d-block py-2" alt="Kater Logo">
              <!-- Button trigger modal -->
              <?php snippet('modal', ['large' => true, 'item' => $werbung]) ?>
            </div>
          <?php endif //Werbung ?>

          <!-- 5. Ansprache des PP; Link mit Katersymbol (Modal?)-->
          <?php 
            $next = page('home/Prinzenpaars');
            if(!is_null($next)): 
          ?>
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
  <?php else: ?>
    <section id="<?= $page->title()->html() ?>" class="my-5">
      <div class="container py-5">
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
  <?php endif //$text->exist() ?>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>