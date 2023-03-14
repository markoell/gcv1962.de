<div class="container mt-5 js--section-topics">
  <div class="row d-flex justify-content-arround">
    <!-- 6. Aktuelle Termine; Link mit Katersymbol (Modal)-->
    
    <?php foreach ($page->children()->listed() as $key => $value): ?>
    <div class="col-sm text-center">
        <?php snippet(strtolower($value->intendedTemplate()), ['id' => $key, 'data' => $value]) ?>
    </div>
    <?php endforeach ?> 

    <?php if(false): ?>
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
    <?php endif ?>
  </div>
</div>