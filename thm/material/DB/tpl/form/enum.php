<?php /** @var $field GDO\DB\GDT_Enum **/ ?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex ng-app="gdo-select">
  <label><?= $field->displayLabel(); ?></label>
  <md-select
   ng-controller="GDOSelectCtrl"
   ng-model="selection"
   ng-init='init(<?= $field->displayJSON(); ?>)'
   ng-change="valueSelected('#gwfsel_<?= $field->name; ?>')"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>>
	<?php if ($field->emptyLabel) : ?>
	  <md-option value="<?= $field->emptyValue; ?>"><?= $field->displayEmptyLabel(); ?></md-option>
	<?php endif; ?>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <md-option value="<?= $enumValue; ?>"><?= t('enum_'.$enumValue); ?></md-option>
	<?php endforeach; ?>
  </md-select>
  <input
   class="n"
   type="hidden"
   id="gwfsel_<?= $field->name; ?>"
   value="<?= $field->displayVar(); ?>"
   name="form[<?= $field->name?>]" />
  <?=$field->htmlError()?>
</md-input-container>
