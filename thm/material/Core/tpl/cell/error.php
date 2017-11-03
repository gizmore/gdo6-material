<?php /** @var $field \GDO\Core\GDT_Error **/
use GDO\UI\GDT_Icon; ?>
<div class="gdo-error gdo-panel" flex layout-fill layout-padding>
  <div class="md-whiteframe-8dp"><?=GDT_Icon::iconS('error')?><?= $field->html; ?></div>
</div>
