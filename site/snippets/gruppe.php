<div class="card bg-transparent border-0 pt-4">
  <h4 class="card-header bg-transparent">
    <div class="container">
      <?= $page->title()->html() ?>
    </div>
  </h4>
  <div class="card-body">
    <div class="container">
      <div class="row">
        <?php if($page->hasImages()): ?>
          <div class="col-md-5">
            <div class="pswp-gallery" id="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
              <?php $i = 0; foreach($page->images() as $image): $i++; ?>
                <?php $dimensions = $image->dimensions(); ?>
                <?php $size = $i == 1 ? 450 : 50 ?>
                <?php $thumb = $image->resize($size) ?>
                <figure class="figure mb-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <a href="<?= $image->url() ?>" itemprop="contentUrl" data-pswp-width="<?= $dimensions->width() ?>" data-pswp-height="<?= $dimensions->height() ?>">
                      <img src="<?= $thumb->url() ?>" class="figure-img img-fluid" itemprop="thumbnail" alt="Image description" target="_blank" />
                  </a>
                  <figcaption class="figure-caption" itemprop="caption description"><?= $image->text() ?></figcaption>
                </figure>
              <?php endforeach ?>
            </div>
          </div>
        <?php endif ?>
        <div class="col-md-7">
          <div class="card-text"><?php echo $page->text()->kirbytext() ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
