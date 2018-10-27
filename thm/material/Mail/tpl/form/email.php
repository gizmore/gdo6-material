<?php
use GDO\Mail\GDT_Email;
use GDO\UI\GDT_Icon;
$field instanceof GDT_Email;
?>
<md-input-container class="md-block md-float md-icon-left<?= $field->classError(); ?>">
  <?=$field->htmlIcon()?>
  <label for="form[<?= $field->name; ?>]"><?=$field->displayLabel()?></label>
  <input
   type="email"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlDisabled(); ?> />
  <div class="gdo-form-error"><?= $field->error; ?></div>
</md-input-container>
