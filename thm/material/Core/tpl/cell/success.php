<?php /** @var $field \GDO\Core\GDT_Success **/
use GDO\UI\GDT_Icon; ?>
<div class="gdo-success gdo-panel" flex layout-fill layout-padding>
<div class="md-whiteframe-8dp"><?=GDT_Icon::iconS('done')?><?= $field->html; ?></div>
</div>
