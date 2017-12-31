<?php /** @var $field \GDO\UI\GDT_Card **/ ?>
<div layout-padding layout-fill>
<md-card class="gdo-card" layout-fill>
  <md-card-title>
    <?=$field->title?>
  </md-card-title>
  <gdo-div></gdo-div>
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
