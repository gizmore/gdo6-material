<?php
use GDO\Form\GDT_Hidden;
$field instanceof GDT_Hidden;
?>
<input
 class="n"
 <?=$field->htmlFormName()?>
 value="<?= $field->display(); ?>"
 type="hidden" />
 