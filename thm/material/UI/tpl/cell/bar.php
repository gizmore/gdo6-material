<?php /** @var $bar \GDO\UI\GDT_Bar **/ ?>
<section  
 class="gdo-bar gdo-bar-<?= $bar->htmlDirection(); ?>"
 layout="<?= $bar->htmlDirection(); ?>"
 layout-align="space-around center"
 layout-fill
 layout-wrap
 >
<?php if ($bar->fields) : ?>
  <?php foreach ($bar->fields as $field) : ?>
    <?= $field->render(); ?>
  <?php endforeach; ?>
<?php endif;?>
</section>
