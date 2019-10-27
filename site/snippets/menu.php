<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="logo" class="rounded">
      <a id="homelink" href="<?= url() ?>" rel="home"><img
          src="<?= $site->url() ?>/assets/images/LogoGr.jpg" alt=""
          class="rounded d-block"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li>
          <?php $tmp = page('home/Termine') ?>
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalTickets">
            Tickets
          </button>
          <!-- Modal -->
        </li>

        <?php foreach ($kirby->collection("mainPages") as $item): ?>
        <li
          class="nav-item <?= r($item->hasVisibleChildren(), ' dropdown') ?>">
          <?php
            if ($item->hasVisibleChildren()): ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?= $item->title()->html() ?>
          </a>
          <?php $large = $item->Large()->exists() ?>
          <div
            class="dropdown-menu dropdown-menu-right <?= e($large, 'dropdown-menu-large') ?>"
            aria-labelledby="navbarDropdownPortfolio" style="right: -40px;">

            <?php foreach ($item->children()->visible() as $childPage): ?>
            <div <?= e($childPage->ShowSubItems()->exists() || $large, ' class="floatablegroup"') ?>>
              <a class="dropdown-item <?= e($childPage->ShowSubItems()->exists() || $large, 'parent') ?>"
                href="<?= $childPage->url() ?>"><?php e($childPage->Kurztitel()->exists(), $childPage->Kurztitel()->html(), $childPage->title()->html()) ?></a>
              <?php if ($childPage->ShowSubItems()->exists()): ?>
              <?php foreach ($childPage->children()->visible() as $childChildPage): ?>
              <a class="dropdown-item child"
                href="<?= $childPage->url() . '#' . $childChildPage->uid() ?>"><?php e($childChildPage->Kurztitel()->exists(), $childChildPage->Kurztitel()->html(), $childChildPage->title()->html()) ?></a>
              <?php endforeach ?>
              <?php endif ?>
            </div>
            <?php endforeach ?>
          </div>
          <?php else: ?>
          <a class="nav-link " href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          <?php endif ?>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="modalTickets" tabindex="-1" role="dialog" aria-labelledby="modalTicketsTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTicketsTitle"><?= $tmp->title()->html() ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php snippet('termine', array('dates' => $tmp->dates()->toStructure()->filterBy('targettext', 'Tickets'))) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>