<?php
use GDO\Form\GDT_AntiCSRF;
$field instanceof GDT_AntiCSRF;
?>
<input
 type="hidden"
 <?=$field->htmlFormName()?>
 value="<?= $field->csrfToken(); ?>"></input>
<div class="gdo-form-error"><?= $field->error; ?></div>
