<div class="d-lg-flex flex-row">
  <?php foreach ($item->children()->listed() as $subItem): ?>
  <div class="col pb-3 px-0">
    <a class="dropdown-item font-weight-bold"
      href="<?= $subItem->url() ?>"><?= $subItem->title()->html() ?></a>
    <div class="dropdown-divider"></div>
    <?php foreach ($subItem->children()->listed() as $subSubItem): ?>
    <a class="dropdown-item nav-item-small <?= e($subSubItem->hasListedChildren(), "font-weight-bold") ?>"
      href="<?= $subItem->url() ?>#<?= $subSubItem->slug() ?>"><?= $subSubItem->title()->html() ?></a>
    <?php endforeach // $subItem->children()->listed()?>
  </div>
  <?php endforeach // $item->children()->listed()?>
</div>