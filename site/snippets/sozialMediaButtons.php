<ul class="share-buttons">
    <?php if($site->facebook()->isNotEmpty()): ?>
        <li><a class="text-light" href="<?= $site->facebook()->html() ?>" target="_blank" title="Besuch uns auf Facebook"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i><span class="sr-only">Visit on Facebook</span></a></li>
    <?php endif ?>
    <?php if($site->google()->isNotEmpty()): ?>
        <li><a class="text-light" href="<?= $site->google()->html() ?>" target="_blank" title="Besuch uns auf Google+"><i class="fab fa-google-plus-square fa-2x" aria-hidden="true"></i><span class="sr-only">Visit on Google+</span></a></li>
    <?php endif ?>
    <?php if($site->twitter()->isNotEmpty()): ?>
      <li><a class="text-light" href="<?= $site->twitter()->html() ?>" target="_blank" title="Besuch uns auf Twitter"><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i><span class="sr-only">Visit on Twitter</span></a></li>
    <?php endif ?>
  <!--li><a href="mailto:?subject=test&body=test%20it:%20http%3A%2F%2Fgcv.de" target="_blank" title="Send email"><i class="fas fa-envelope-square fa-2x" aria-hidden="true"></i><span class="sr-only">Send email</span></a></li-->
</ul>
