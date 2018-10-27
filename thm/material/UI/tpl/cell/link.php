<?php /** @var $link \GDO\UI\GDT_Link **/ ?>
<?php
// $link->addClass("md-button md-secondary md-raised gdt-link");
?>
<a <?=$link->htmlAttributes()?> href="<?=$link->href?>">
<?=$link->displayLabel()?>
<?=$link->htmlIcon()?>
</a>
