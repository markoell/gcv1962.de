<?php snippet('header', array('sticky' => false)) ?>

<!-- 1. Bilder anzeigen -->
<?php if($next = page('home/Titelbilder')): ?>
<section id="<?= $next->title()->html() ?>">
  <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
</section>
<?php endif ?>
<!-- 2. TopThema anzeigen -->
<!-- 
<?php if($next = page('home/TopThema')): ?>
<div id="<?= $next->title()->html() ?>">
  <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
</div>
<?php endif ?>
-->
<!-- 3. Begrüßung Präsi anzeigen -->
<?php if($next = page('home/Ansprache')): ?>
<section id="Ansprache" class="js--section-speach">
  <div class="container mt-5 myAnsprache">
    <?php snippet(strtolower($next->intendedTemplate()), array('data' => $next)) ?>
  </div>
</section>
<?php endif ?>
<section id="themen" class="mb-3">
  <div class="container mt-5">
    <div class="row d-flex justify-content-arround">
      <!-- 4. Nur Taschengeldjob anzeigen; Link mit Katersymbol (Modal)-->
      <?php if($next = page('home/Taschengeldjob')): ?>
      <div class="col-sm text-center">
        <img
          src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
          class="logo mx-auto d-block py-2" alt="Kater Logo">
        <!-- Button trigger modal -->
        <?php snippet('modal', ['large' => false, 'item' => $next]) ?>
      </div>
      <?php endif ?>
      <!-- Werbung -->

      <?php if($next = page('home/ihre-werbung')): ?>

      <div class="col-sm text-center">
        <img
          src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
          class="logo mx-auto d-block py-2" alt="Kater Logo">
        <!-- Button trigger modal -->
        <?php snippet('modal', ['large' => true, 'item' => $next]) ?>
      </div>
      <?php endif ?>
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
      <!-- 6. Aktuelle Termine; Link mit Katersymbol (Modal)-->
      <?php if($next = page('home/Termine')): ?>
      <div class="col-sm text-center">
        <img
          src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
          class="logo mx-auto d-block py-2" alt="Kater Logo">
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalAppointments">
          <?= $next->title()->html()  ?>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modalAppointments" tabindex="-1" role="dialog"
          aria-labelledby="modalAppointmentsTitle" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalAppointmentsTitle"><?= $next->title()->html() ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php snippet('termine', array('dates' => $next->dates()->toStructure())) ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif ?>
    </div>
  </div>
</section>

<?php snippet('scripts') ?>
<?php snippet('footer/footerBar') ?>
