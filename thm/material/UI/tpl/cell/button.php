<?php
use GDO\UI\GDT_Button;
$field instanceof GDT_Button;
$field->addClass("md-button md-raised");
$field->addClass($field->primaryButton?"md-primary":"md-secondary");
?>
<a <?=$field->htmlAttributes()?> href="<?=$href?>" <?=$field->htmlDisabled()?>>
  <?=$field->displayLabel()?>
  <?=$field->htmlIcon()?>
</a>
