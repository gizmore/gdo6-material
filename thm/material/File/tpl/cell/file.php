<?php /** @var $gdo \GDO\File\GDO_File **/ ?>
<?php if ($gdo->isImageType()) : ?>
<div class="gdo-image-file">
  <img src="<?=$gdo->getHref()?>" />
</div>
<?php else : ?>
<div class="gdo-file">
  <span class="gdo-file-name"><?= html($gdo->getName()); ?></span>
  <span class="gdo-file-size"><?= $gdo->displaySize(); ?></span>
  <span class="gdo-file-type"><?= $gdo->getType(); ?></span>
</div>
<?php endif; ?>
