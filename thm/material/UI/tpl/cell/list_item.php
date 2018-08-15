<?php
/** @var $gdt \GDO\UI\GDT_ListItem **/
$gdt->addClass('md-3-line');
?>
<md-list-item <?=$gdt->htmlAttributes()?>>
<?php if ($gdt->image) : ?>
	<div class="gdt-li-image"><?=$gdt->image->renderCell()?></div>
<?php endif; ?>
  <div class="md-list-item-text" layout="column">
	<?=$gdt->title->renderCell()?>
	<?=$gdt->subtitle->renderCell()?>
	<?=$gdt->subtext->renderCell()?>
  </div>
  <?=$gdt->actions()->render()?>
</md-list-item>
