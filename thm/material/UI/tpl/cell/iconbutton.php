<?php
/** @var $field \GDO\UI\GDT_IconButton **/
$field->addClass('md-icon-button');
?>
<?php if ($href) : ?>
<md-button href="<?=$href?>"<?=$field->htmlAttributes()?>aria-label="<?=html($field->label)?>" <?=$field->htmlDisabled()?>><?=$field->htmlIcon()?><?=$field->label?></md-button>
<?php endif; ?>
