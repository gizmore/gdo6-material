<?php /** @var $field \GDO\DB\GDT_Int **/ ?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <?=$field->htmlIcon()?>
  <input
   type="number"
   <?=$field->htmlFormName()?>
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</md-input-container>
