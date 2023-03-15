<?php snippet('header', array('sticky' => false)) ?>
<main>
  <?php if(!$page->demo()->exists()): ?>

    <?php foreach ($page->children()->listed() as $key => $value): ?>
      <section id="<?= $key ?>" class="js--section-<?= $key ?>">
        <?php snippet([$key, strtolower($value->intendedTemplate()), 'default'], ['id' => $key, 'page' => $value]) ?>
      </section>

    <?php endforeach ?> 
    <?php exit ?>
  <?php else: ?>
    <section id="<?= $page->title()->html() ?>" class="my-5">
      <div class="container py-5">
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
  <?php endif //!$demo->exist() ?>
</main>

<?php snippet('footer/footerbar') ?>
<?php snippet('scripts') ?>

</body>
</html>