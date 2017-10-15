<?php
use GDO\Table\GDT_RowNum;
$field instanceof GDT_RowNum;
$field->num++;
?>
<?php $id = $num = $field->gdo ? $field->gdo->getID() : $field->num; ?>
<?php $id = $field->name.$id; ?>
<?php $name = "{$field->name}[$num]"; ?>
<div ng-controller="GDOCbxCtrl">
  <md-checkbox
   ng-init="<?= $id; ?>=false"
   ng-model="<?= $id; ?>"
   ng-change="cbxChangedDyn('<?= $id; ?>');"
   >
</md-checkbox>
  <input
   class="n"
   type="checkbox"
   id ="<?= $id; ?>"
   name="<?= $name ?>" />
</div>