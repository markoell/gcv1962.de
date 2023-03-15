<?php if($page->hasListedChildren()): ?>
  <?php foreach ($page->children()->listed() as $key => $value): ?>
    <div id="<? $key ?>" class="container mt-5">
        <?php snippet(strtolower($value->intendedTemplate()), ['page' => $value]) ?>
    </div>
<?php endforeach ?>
<?php else: ?>
  <h2 id="<?= $data->title()->html() ?>"><?= $data->title()->html() ?></h2>
  <p>
    <?= $page->text()->kirbytext()?>
  </p>
<?php endif ?>