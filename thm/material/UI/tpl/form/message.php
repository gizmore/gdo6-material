<?php /** @var $field \GDO\UI\GDT_Message **/
?>
<md-input-container class="md-block md-float <?= $field->classError(); ?>" flex>
  <label for="form[<?= $field->name; ?>]"><?= $field->htmlIcon(); ?><?= $field->displayLabel(); ?></label>
  <textarea
   novalidate
   class="<?=$field->classEditor()?>"
   name="form[<?= $field->name; ?>]"
   rows="6"
   maxRows="6"
   <?= $field->htmlDisabled(); ?>><?= $field->getVar(); ?></textarea>
  <?=$field->htmlError()?>
</md-input-container>
