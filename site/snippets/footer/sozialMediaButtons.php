<div class="btn-group" role="group" aria-label="Sozial Media Buttons">
  <?php if ($site->facebook()->isNotEmpty()): ?>
  <a class="btn btn-sm btn-light py-0"
    href="<?= $site->facebook()->html() ?>" target="_blank"
    title="Besuch uns auf Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="sr-only">Visit on
      Facebook</span></a>
  <?php endif ?>
  <?php if ($site->google()->isNotEmpty()): ?>
  <a class="btn btn-sm btn-light py-0"
    href="<?= $site->google()->html() ?>" target="_blank"
    title="Besuch uns auf Google+"><i class="fab fa-google-plus-g" aria-hidden="true"></i><span class="sr-only">Visit on
      Google+</span></a>
  <?php endif ?>
  <?php if ($site->twitter()->isNotEmpty()): ?>
  <a class="btn btn-sm btn-light py-0"
    href="<?= $site->twitter()->html() ?>" target="_blank"
    title="Besuch uns auf Twitter"><i class="fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Visit on
      Twitter</span></a>
  <?php endif ?>
  <!--li><a href="mailto:?subject=test&body=test%20it:%20http%3A%2F%2Fgcv.de" target="_blank" title="Send email"><i class="fas fa-envelope-square fa-2x" aria-hidden="true"></i><span class="sr-only">Send email</span></a></li-->
</div>