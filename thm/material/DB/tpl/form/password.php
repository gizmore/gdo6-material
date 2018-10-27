<?php /** @var $field \GDO\User\GDT_Password **/ ?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex>
  <?= $field->icon; ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <input
   type="password"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->getVar(); ?>" />
  <?=$field->htmlError()?>
</md-input-container>
