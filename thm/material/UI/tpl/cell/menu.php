<?php /** @var $field \GDO\UI\GDT_Menu **/
use GDO\UI\GDT_Icon;
?>
<md-menu class="gdt-menu">
  <md-button aria-label="Open action menu" class="md-icon-button" ng-click="$mdMenu.open($event)"><?=GDT_Icon::iconS('menu')?></md-button>
  <md-menu-content width="4">
<?php foreach ($field->getFields() as $gdoType) : ?>
    <md-menu-item><?=$gdoType->render()?></md-menu-item>
<?php endforeach; ?>
  </md-menu-content>
</md-menu>
