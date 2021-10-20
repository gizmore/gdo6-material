<?php /** @var $field \GDO\UI\GDT_Panel; **/ ?>
<div layout="row" layout-fill layout-padding>
  <div class="md-whiteframe-2dp" layout-fill>
<?php if ($field->hasTitle()) : ?>
  <h3><?=$field->renderTitle()?></h3>
<?php endif; ?>
<?php if ($field->hasText()) : ?>
  <p><?=$field->renderText()?></p>
<?php endif; ?>
<?php if ($field->fields) : ?>
<?php foreach ($field->fields as $gdt) : ?>
<?=$gdt->renderCell()?>
<?php endforeach; ?>
<?php endif; ?>
  </div>
</div>
