<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="logo" class="navbar-brand rounded <?= e($sticky, 'sticky')?>">
      <?php snippet("nav/mainLogo") ?>
    </div>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto pr-5">

        <?php foreach ($kirby->collection("mainPages") as $item): ?>
        <?php $itemHaslistedChildren = $item->hasListedChildren() ?>
        <li class="nav-item <?= e($itemHaslistedChildren, 'dropdown') ?>">

          <?php if ($itemHaslistedChildren): ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?= html($item->title()) ?>
          </a>
          <div id="<?= $item->id() ?>" class="dropdown-menu"
            aria-labelledby="navbarDropdown">
            <?php if ($item->is("AkteureGruppen")): ?>
              <?php snippet("nav/AkteureGruppen", ['item' => $item]) ?>
            <?php else: // $item->is("AkteureGruppen")?>
            <?php foreach ($item->children()->listed() as $subItem): ?>
            <a class="dropdown-item"
              href="<?= $subItem->url() ?>"><?= $subItem->title()->html() ?></a>
            <?php endforeach ?>
            <?php endif // $item->is("AkteureGruppen")?>
          </div>
          <?php else: //if($itemHaslistedChildren)?>
          <a class="nav-link" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
          <?php endif //if($itemHaslistedChildren)?>
        </li>
        <?php endforeach //$kirby->collection("mainPages") ?>

        

      </ul>
      <div class="nav-item">
          <?php snippet("nav/tickets") ?>
        </div>
    </div>
  </div>
</nav>

<?php snippet("nav/ticketsModal") ?>
