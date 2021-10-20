<?php /** @var $field \GDO\Table\GDT_Table **/
use GDO\Util\Common;
$headers = $field->getHeaderFields();
if ($pagemenu = $field->getPageMenu())
{
	echo $pagemenu->render();
}
$result = $field->getResult();
?>
<div
 class="gdt-table"
 flex layout-fill layout-align="center"
 ng-controller="GDOTableCtrl"
 ng-init='init(<?=json_encode($field->configJSON())?>)'>
<form method="get" action="<?= $field->href; ?>" class="b">
  <input type="hidden" name="mo" value="<?= html(Common::getGetString('mo','')); ?>" />
  <input type="hidden" name="me" value="<?= html(Common::getGetString('me','')); ?>" />
  <?php if ($field->hasTitle()) : ?>
  <h3><?= $field->renderTitle(); ?></h3>
  <?php endif; ?>
  <table id="gwfdt-<?= $field->name; ?>" class="table">
	<thead>
	  <tr>
	  <?php foreach($headers as $gdoType) : ?>
		<th class="<?= $gdoType->htmlClass(); ?>">
		  <label>
			<?= $gdoType->renderHeader(); ?>
			<?php if ($field->ordered) : ?>
			<?= $gdoType->displayTableOrder($field); ?>
			<?php endif; ?>
		  </label>
		  <?php if ($field->filtered) : ?>
		  <br/><?= $gdoType->renderFilter($headers->name); ?>
		  <?php endif; ?>
		</th>
	  <?php endforeach; ?>
	  </tr>
	</thead>
	<tbody>
	<?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
	<tr data-gdo-id="<?=$gdo->getID()?>">
	  <?php foreach($headers as $gdoType) :
	  $col = $field->getField($gdoType->name);
	  $gdoType = $col ? $col : $gdoType;
	  $gdoType->gdo($gdo); ?>
		<td class="<?= $gdoType->htmlClass(); ?>"><?= $gdoType->gdo($gdo)->renderCell(); ?></td>
	  <?php endforeach; ?>
	</tr>
	<?php endwhile; ?>
	</tbody>
	<tfoot>
	  <?=$field->actions()->render()?>
	</tfoot>
  </table>
  <input type="submit" class="n" />
</form>
</div>
<!-- END of GDT_Table -->
