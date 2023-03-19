<div class="container my-5 js--section-topics">
  <div class="row d-flex justify-content-arround">
    
    <?php foreach ($page->children()->listed() as $key => $value): ?>
    <div class="col-sm text-center">
        <?php snippet(strtolower($value->intendedTemplate()), ['id' => $key, 'page' => $value]) ?>
    </div>
    <?php endforeach ?> 

  </div>
</div>