<?php snippet('header', array('sticky' => false)) ?>
<main>
  <?php if(!$page->demo()->exists()): ?>

    <?php foreach ($page->children()->listed() as $key => $section): ?>
      <section id="<?= html($section->uid()) ?>">
        <?php snippet([$key, strtolower($section->intendedTemplate()), 'default'], ['id' => $key, 'page' => $section]) ?>
      </section>
    <?php endforeach ?>
    
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