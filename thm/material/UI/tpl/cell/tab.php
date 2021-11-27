<?php
use GDO\UI\GDT_Tab;
$field instanceof GDT_Tab;
?>
<md-tab label="<?= $field->displayLabel(); ?>">
  <md-content class="md-padding">
<?php
foreach ($field->getFields() as $gdt)
{
	echo $cell ? $gdt->renderCell() : $gdt->renderForm();
}
?>
  </md-content>
</md-tab>
