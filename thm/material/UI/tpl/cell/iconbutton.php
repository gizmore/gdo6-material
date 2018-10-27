<?php
/** @var $field \GDO\UI\GDT_IconButton **/
$field->addClass('md-icon-button');
?>
<?php if ($href) : ?>
<md-button href="<?=$href?>"<?=$field->htmlAttributes()?>aria-label="<?=html($field->displayLabel())?>" <?=$field->htmlDisabled()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></md-button>
<?php endif; ?>
