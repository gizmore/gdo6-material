<?php
/** @var $field \GDO\UI\GDT_Card **/
$field->addClass('gdt-card');
?>
<div layout-padding layout-fill <?=$field->htmlAttributes()?>>

<?php if ($field->gdo) : ?>
  <a id="card-<?=$field->gdo->getID()?>" class="n"></a>
<?php endif; ?>

  <md-card class="gdo-card" layout-fill>

<?php if ($field->avatar || $field->title || $field->subtitle) : ?>
    <md-card-header>
<?php if ($field->avatar) : ?>
      <md-card-avatar><?=$field->avatar->renderCell()?></md-card-avatar>
<?php endif; ?>
<?php if ($field->title || $field->subtitle) : ?>
      <md-card-header-text>
<?php if ($field->title) : ?>
        <span class="md-title"><?=$field->title->renderCell()?></span>
<?php endif; ?>
<?php if ($field->subtitle) : ?>
        <span class="md-subhead"><?=$field->subtitle->renderCell()?></span>
<?php endif; ?>
      </md-card-header-text>
<?php endif; ?>
    </md-card-header>
<?php endif; ?>

<?php if ($field->image || $field->content || $field->fields) : ?>
  <md-card-content>
<?php if ($field->image) : ?>
    <div class="gdt-card-image"><?=$field->image->renderCell()?></div>
<?php endif; ?>
<?php if ($field->content) : ?>
    <div class="gdt-card-content"><?=$field->content->renderCell()?></div>
<?php endif; ?>
<?php if ($field->fields) : ?>
    <div class="gdt-card-fields">
    <?php foreach ($field->fields as $gdt) : ?>
      <?=$gdt->renderCard()?>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
  </md-card-content>
<?php endif; ?>

<?php if ($field->footer || $field->actions) : ?>
  <div class="gdt-card-lower">
<?php if ($field->footer) : ?>
    <div class="gdt-card-footer"><?=$field->footer->renderCell()?></div>
<?php endif; ?>
<?php if ($field->actions) : ?>
  <md-card-actions layout="row" layout-align="end center">
    <?=$field->actions()->renderCell()?>
  </md-card-actions>
<?php endif; ?>
  </div>
<?php endif; ?>

  </md-card>
</div>
