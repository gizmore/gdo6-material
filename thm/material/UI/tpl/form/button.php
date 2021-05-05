<?php
use GDO\UI\GDT_Button;
/** @var $field GDT_Button **/
?>
<a class="md-button md-secondary gdt-button">
 <?$field->htmlDisabled()?>
 <?$field->htmlHREF()?>>
 <?$field->htmlIcon()?>
 <?$field->displayLabel()?>
</a>
