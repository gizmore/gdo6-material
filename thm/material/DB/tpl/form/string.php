<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex>
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   type="text"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   <?=$field->htmlFormName()?>
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</md-input-container>
