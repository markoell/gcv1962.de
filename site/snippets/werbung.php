<?php if($page->hasListedChildren()): ?>
  <?php foreach ($page->children()->listed() as $key => $value): ?>
    <div id="<?php $key ?>" class="container mt-5">
        <?php snippet([$key, strtolower($value->intendedTemplate()), 'default'], ['page' => $value]) ?>
    </div>
<?php endforeach ?>
<?php else: ?>
  <h2 id="<?= $page->title()->html() ?>"><?= $page->title()->html() ?></h2>
  <?php foreach ($page->layout()->toLayouts() as $layout): ?>
  <div class="row justify-content-around" id="<?= $layout->id() ?>">
    <?php foreach ($layout->columns() as $column): ?>
      <?php if ($column->blocks()->isNotEmpty()): ?>
        <div class="col p-2">
          <div class="blocks">
            <?= $column->blocks() ?>
          </div>
        </div>
      <? endif ?>
    <?php endforeach ?>
  </div>
<?php endforeach ?>
<?php endif ?>