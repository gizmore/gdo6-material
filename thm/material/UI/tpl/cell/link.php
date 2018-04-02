<?php /** @var $link \GDO\UI\GDT_Link **/ ?>
<?php
// $link->addClass("md-button md-secondary md-raised gdt-link");
?>
<a <?=$link->htmlAttributes()?> href="<?=$link->href?>">
<?=$link->label?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="left:-28px;position:relative;display:inline-block;"><?=$link->htmlIcon()?></span>
</a>
