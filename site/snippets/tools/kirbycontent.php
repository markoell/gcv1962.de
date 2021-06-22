
<?php //Textausgabe ?>
<?php if($item->text()->isNotEmpty()): ?>
  <div class="my-5">
    <?= $item->text()->kirbytext() ?>
  </div>
<?php endif ?>

<?php //Unterseiten ?>
<?php if($item->hasListedChildren()): ?>
  <?php foreach($item->children()->listed() as $child): ?>
    <?php snippet('tools/kirbycontent', ['item' => $child])  ?>
  <?php endforeach // $item->children()->listed() ?>
<?php endif // $item->hasListedChildren() ?>