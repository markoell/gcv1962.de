<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div id="logo" class="navbar-brand rounded sticky">
      <a id="homelink" href="<?= url() ?>" rel="home"><img src="<?= asset('/assets/images/gcvLogo.svg')->url() ?>" alt="GCV 1962 Logo" class="rounded"></a>
      <div id="logotext"><?= $site->logotext()->kirbytext() ?></div>
    </div>
  
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item pr-3">
          <?php $tmp = page('home/Termine') ?>
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalTickets">
            Tickets
          </button>
        </li>
        
        <?php foreach($kirby->collection("mainPages") as $item): ?>
        <?php $itemHaslistedChildren = $item->hasListedChildren() ?>
          <li class="nav-item <?= e($itemHaslistedChildren, 'dropdown') ?>">

            <?php if($itemHaslistedChildren): ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= html($item->title()) ?>
            </a>
            <div id="<?= $item->id() ?>" class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($item->is("AkteureGruppen")): ?>
              <div class="d-lg-flex flex-row" >
              <?php foreach ($item->children()->listed() as $subItem): ?>
                  <div class="col pb-3 px-0">
                  <a class="dropdown-item font-weight-bold" href="<?= $subItem->url() ?>"><?= $subItem->title()->html() ?></a>
                  <div class="dropdown-divider"></div>
                  <?php foreach ($subItem->children()->listed() as $subSubItem): ?>
                    <a class="dropdown-item <?= e($subSubItem->hasListedChildren(), "font-weight-bold border-bottom") ?>" href="<?= $subItem->url() ?>#<?= $subSubItem->slug() ?>"><?= $subSubItem->title()->html() ?></a>
                  <?php endforeach ?> 
                  </div>
              <?php endforeach ?>
              </div>  
                <?php else: ?>
              <?php foreach ($item->children()->listed() as $subItem): ?>
                  <a class="dropdown-item" href="<?= $subItem->url() ?>"><?= $subItem->title()->html() ?></a>
                  <?php endforeach ?>
                <?php endif ?>              
            </div>
            <?php else: //if($itemHaslistedChildren) ?>
            <a class="nav-link" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
            <?php endif //if($itemHaslistedChildren) ?>
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