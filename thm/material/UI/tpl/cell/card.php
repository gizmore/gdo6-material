<?php
/** @var $field \GDO\UI\GDT_Card **/
use GDO\Profile\GDT_ProfileLink;
?>
<?php if ($field->gdo) : ?>
<a name="card-<?=$field->gdo->getID()?>"></a>
<?php endif; ?>
<div layout-padding layout-fill>
<md-card class="gdo-card" layout-fill>
  <md-card-header>
<?php if ($field->withCreator) : ?>
    <md-card-avatar><?=GDT_ProfileLink::make()->forUser($field->gdoCreator())->render()?></md-card-avatar>
<?php endif; ?>  
    <md-card-header-text>
<?php if ($field->title) : ?>
      <span class="md-title"><?=$field->title?></span>
<?php endif; ?>
<?php if ($field->subtitle) : ?>
      <span class="md-subhead"><?=$field->subtitle?></span>
<?php endif; ?>
    </md-card-header-text>
  </md-card-header>
  <md-card-content>
<?php foreach ($field->getFields() as $gdt) : ?>
    <?=$gdt->render()?>
<?php endforeach; ?>
  </md-card-content>
  <gdo-div></gdo-div>
  <md-card-actions layout="row" layout-align="end center">
    <?=$field->getActions()->render()?>
  </md-card-actions>
</md-card>
</div>
