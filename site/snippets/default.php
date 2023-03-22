<?php if($page->hasListedChildren()): ?>
  <?php foreach ($page->children()->listed() as $key => $value): ?>
    <div id="<? $key ?>" class="container mt-5">
        <?php snippet([$key, strtolower($value->intendedTemplate()), 'default'], ['page' => $value]) ?>
    </div>
<?php endforeach ?>
<?php else: ?>
  <h2 id="<?= $page->title()->html() ?>"><?= $page->title()->html() ?></h2>
  <p>
    <?= $page->text()->kirbytext()?>
  </p>
<?php endif ?>