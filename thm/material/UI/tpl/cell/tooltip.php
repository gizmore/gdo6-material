<?php
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_Tooltip;
$field instanceof GDT_Tooltip; ?>
<?php if ($field->iconText) : ?>
<md-button class="md-icon-button">
  <?=GDT_Icon::iconS('help')?>
  <md-tooltip md-direction="right" ><?= $field->iconText; ?></md-tooltip>
</md-button>
<?php endif; ?>