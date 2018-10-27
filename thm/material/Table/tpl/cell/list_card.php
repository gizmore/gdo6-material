<?php /** @var $field \GDO\Table\GDT_List **/
use GDO\Util\Common;
use GDO\UI\GDT_Icon;
$result = $field->getResult();
?>
<section
 class="gdo-list"
 layout="column" flex layout-fill
 ng-controller="GDOListCtrl"
 ng-init='init(<?= json_encode($field->initJSON()); ?>)'>

  <md-toolbar layout="row" class="md-hue-3">
	<div class="md-toolbar-tools">
	  <span><?= $field->title; ?></span>
	  <span flex></span>
	  <a class="md-icon-button md-button" ng-click="showDialogId('#gdo-filter-dialog', $event)">
		<?=GDT_Icon::iconS('settings')?>
	  </a>
	</div>
  </md-toolbar>

<!--   <md-virtual-repeat-container id="vertical-container" flex> -->
<!--	 <div md-virtual-repeat="item in infiniteItems" md-on-demand flex> -->
<!--	   {{item.id}} -->
<!--	 </div> -->
<!--   </md-virtual-repeat-container> -->
<?php
$template = $field->getItemTemplate();
while ($gdo = $result->fetchObject())
{
	echo $template->gdo($gdo)->renderCard();
}
?>
  
</section>

<?php if ($fields = $field->getHeaderFields()) : ?>
<!-- Filter Dialog -->
<div style="visibility: hidden">
  <div class="md-dialog-container" id="gdo-filter-dialog">
	<md-dialog aria-label="Mango (Fruit)">
	  <md-dialog-content style="max-width:800px;max-height:810px; ">
		<md-tabs md-dynamic-height md-border-bottom>
		  <md-tab label="Filters">
			<md-content class="md-padding">
			  <form method="get" action="<?= $field->href ?>">
<?php foreach ($fields as $gdoType) : ?>
				<md-input-container>
				  <label><?= $gdoType->displayLabel(); ?></label>
				  <?= $gdoType->renderFilter(); ?>
				</md-input-container>
<?php endforeach; ?>
				<input type="hidden" name="mo" value="<?= html(Common::getGetString('mo')); ?>">
				<input type="hidden" name="me" value="<?= html(Common::getGetString('me')); ?>">
				<input type="submit" class="n" />
			  </form>
			</md-content>
		  </md-tab>
		  <md-tab label="Sorting">
			<md-content class="md-padding">
<?php foreach ($fields as $gdoType) : ?>
			  <label><?= $gdoType->displayLabel(); ?></label>
			  <?= $gdoType->displayTableOrder($field)?>
<?php endforeach; ?>
			</md-content>
		  </md-tab>
		</md-tabs>
	  </md-dialog-content>
	</md-dialog>
  </div>
</div>
<!-- End Filter Dialog -->
<?php endif; ?>
