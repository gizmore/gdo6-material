<?php use GDO\Form\GDT_Submit; $field instanceof GDT_Submit; ?>
<input
 type="submit"
 class="md-button md-primary md-raised"
 name="<?= $field->name; ?>"
 value="<?= $field->label; ?>"
 <?= $field->htmlDisabled(); ?> /></input>
