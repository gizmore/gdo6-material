<?php /** @var $gdo \GDO\File\GDO_File **/ ?>
<?php if ($gdo) : ?>
<?php if ( ($gdo->isImageType()) && ($gdo->getHref()) ) : ?>
<div class="gdo-file gdo-image-file">
  <img src="<?=$gdo->getHref()?>" />
</div>
<?php else : ?>
<div class="gdo-file">
  <span class="gdo-file-name"><?= html($gdo->getName()); ?></span>
  <span class="gdo-file-size"><?= $gdo->displaySize(); ?></span>
  <span class="gdo-file-type"><?= $gdo->getType(); ?></span>
</div>
<?php endif; ?>
<?php endif; ?>
