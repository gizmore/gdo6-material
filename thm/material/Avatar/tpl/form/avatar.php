<?php
use GDO\Avatar\GDO_Avatar;
use GDO\Avatar\GDT_Avatar;
$field instanceof GDT_Avatar;
?>
<md-input-container class="md-block md-float md-icon-left" flex>
  <label><?= $field->displayLabel(); ?></label>
  <md-select
   ng-controller="GDOSelectCtrl"
   ng-model="selection"
   ng-init='init(<?= $field->displayJSON(); ?>)'
   ng-change="valueSelected('#gwfsel_<?= $field->name; ?>')">
	<md-option value="0"><?= t('no_avatar'); ?></md-option>
	<?php foreach ($field->choices as $value => $gwfAvatar) : $gwfAvatar instanceof GDO_Avatar; ?>
	<md-option value="<?= $value; ?>">
	  <?= $gwfAvatar->getGDOAvatar($field->user)->renderCell(); ?>
	  <?= $gwfAvatar->getVar('file_name'); ?>
	</md-option>
	<?php endforeach; ?>
  </md-select>
  <input
   class="n"
   type="hidden"
   id="gwfsel_<?= $field->name; ?>"
   value="<?= $field->displayVar(); ?>"
   <?=$field->htmlFormName()?> />
  <div class="gdo-error"><?= $field->error; ?></div>
</md-input-container>
