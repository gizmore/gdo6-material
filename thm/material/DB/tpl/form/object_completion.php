<?php /** @var $field \GDO\DB\GDT_Object **/
$id = 'gwfac_'.$field->name;
?>
<md-input-container
 ng-controller="GDOAutoCompleteCtrl"
 ng-init='init(<?= $field->displayJSON(); ?>, "#<?= $id; ?>")'
 class="md-block md-float md-icon-left<?= $field->classError(); ?>"
 flex>
  <md-autocomplete
   md-clear-button="true"
   md-floating-label="<?= $field->displayLabel(); ?>"
   md-search-text="data.searchText"
   md-items="item in query(data.searchText)"
   md-item-text="item.text"
   md-selected-item="selectedItem"
   md-selected-item-change="objectSelected(selectedItem)"
   md-min-length="0"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>>
	<div ng-bind-html="selectedItem.display"></div>
	<md-item-template>
	  <div ng-bind-html="item.display"></div>
	</md-item-template>
	<md-not-found><?= t('no_match'); ?></md-not-found>
  </md-autocomplete>
  <input
   type="hidden"
   id="<?= $id; ?>"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->getVar(); ?>" />
 <?= $field->htmlError()?>
</md-input-container>
