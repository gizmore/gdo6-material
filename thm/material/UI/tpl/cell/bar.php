<?php /** @var $bar \GDO\UI\GDT_Bar **/ ?>
<section layout-wrap flex
 class="gdo-bar gdo-bar-<?= $bar->htmlDirection(); ?>"
 layout="<?= $bar->htmlDirection(); ?>"
 layout-align="space-around center">
<?php if ($bar->fields) : ?>
  <?php foreach ($bar->fields as $field) : ?>
    <?= $field->renderCell(); ?>
  <?php endforeach; ?>
<?php endif;?>
</section>
