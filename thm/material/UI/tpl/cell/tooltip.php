<?php
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_Tooltip;
$field instanceof GDT_Tooltip; ?>
<md-button class="md-icon-button">
  <?= $field->htmlIcon(); ?>
  <md-tooltip md-direction="right"><?= $field->tooltip; ?></md-tooltip>
</md-button>
