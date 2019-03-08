<?php
/** @var $gdt \GDO\UI\GDT_ListItem **/
$gdt->addClass('md-3-line');
?>
<md-list-item <?=$gdt->htmlAttributes()?>>
<?php if ($gdt->image) : ?>
	<div class="gdt-li-image md-avatar"><?=$gdt->image->renderCell()?></div>
<?php endif; ?>
  <div class="md-list-item-text" layout="column">
	<?=$gdt->title->renderCell()?>
	<?=$gdt->subtitle->renderCell()?>
	<?=$gdt->subtext->renderCell()?>
  </div>
  <div class="md-secondary">
  <?=$gdt->actions()->render()?>
  </div>
</md-list-item>
