<?php
use GDO\DB\GDT_Enum;
$field instanceof GDT_Enum;
?>
<md-select
 ng-controller="GDOSelectCtrl"
 ng-model="selection"
 multiple="true"
 placeholder="<?= html($field->displayLabel()); ?>"
 ng-init='multiple=true; selection=<?=json_encode($field->filterVar()); ?>;'
 ng-change="multiValueSelected('#fsel_<?= $field->name; ?>')">
  <?php foreach ($field->enumValues as $enumValue) : ?>
	<md-option value="<?= $enumValue; ?>"><?= t($enumValue); ?></md-option>
	<?php endforeach; ?>
  </md-select>
  <input
   class="n"
   type="hidden"
   id="fsel_<?= $field->name; ?>"
   value="<?= $field->display(); ?>"
   name="f[<?= $field->name?>]" />
  <div class="gdo-error"><?= $field->error; ?></div>
</md-input-container>
