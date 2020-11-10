<?php
use GDO\Form\GDT_Submit;
/** @var $field GDT_Submit **/
?>
<input
 type="submit"
 class="md-button md-primary md-raised"
 <?=$field->htmlFormName()?>
 value="<?=$field->displayLabel()?>"
 <?=$field->htmlDisabled()?> /></input>
