<?php
use GDO\DB\GDT_Object;
$field instanceof GDT_Object;
?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <?= $field->htmlIcon(); ?>
  <input
   type="number"
   step="1"
   <?=$field->htmlFormName()?>
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <div class="gdo-form-error"><?= $field->error; ?></div>
</md-input-container>
