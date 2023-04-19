<h1 id="<?= $page->title()->html() ?>" class="text-center py-5"><?= $page->title()->html() ?></h1>
<?php foreach ($page->layout()->toLayouts() as $layout): ?>
  <div class="row" id="<?= $layout->id() ?>">
    <?php foreach ($layout->columns() as $column): ?>
      <?php if ($column->blocks()->isNotEmpty()): ?>
        <div class="col d-flex justify-content-around">
          <div class="blocks">
            <?= $column->blocks() ?>
          </div>
        </div>
      <? endif ?>
    <?php endforeach ?>
  </div>
<?php endforeach ?>