<?php
use GDO\Mail\GDT_Email;
$field instanceof GDT_Email;
?>
<a
 href="mailto:<?= $field->displayVar(); ?>">
  <?= $field->displayVar(); ?>
</a>
 