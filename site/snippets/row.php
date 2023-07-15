<div class="container my-5 js--section-topics">
  <div class="row d-flex justify-content-arround">

    <?php foreach ($page->children()->listed() as $key => $section) : ?>
      <div class="col-sm text-center">
        <?php snippet([$key, strtolower($section->intendedTemplate()), 'default'], ['id' => $key, 'page' => $section]) ?>
      </div>
    <?php endforeach ?>

  </div>
</div>