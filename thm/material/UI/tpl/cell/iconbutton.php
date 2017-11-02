<?php
use GDO\UI\GDT_IconButton;
$field instanceof GDT_IconButton;
?>
<?php if ($href) : ?>
<md-button href="<?= $href; ?>" class="md-secondary md-icon-button" aria-label="<?= html($field->label); ?>" <?= $field->htmlDisabled(); ?>><?= $field->htmlIcon(); ?></md-button>
<?php endif; ?>
