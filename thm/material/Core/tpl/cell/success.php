<?php /** @var $field \GDO\Core\GDT_Success **/
use GDO\UI\GDT_Icon; ?>
<div class="gdo-success gdo-panel" flex layout-fill layout-padding>
  <div class="md-whiteframe-8dp">
<?php if ($field->hasTitle()) : ?>
    <h3><?=GDT_Icon::iconS('check')?><?=$field->renderTitle()?></h3>
  <?php if ($field->hasText()) : ?>
    <p><?php $field->renderText()?></p>
  <?php endif; ?>
<?php else : ?>
    <p><?=GDT_Icon::iconS('check')?><?=$field->renderText()?></p>
<?php endif; ?>
  </div>
</div>
