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
<form method="get" action="<?=html($field->action)?>" class="b">
  <input type="hidden" name="mo" value="<?= html(Common::getRequestString('mo','')); ?>" />
  <input type="hidden" name="me" value="<?= html(Common::getRequestString('me','')); ?>" />
  <?php if ($field->hasTitle()) : ?>
  <h3><?= $field->renderTitle(); ?></h3>
  <?php endif; ?>
  <table id="gwfdt-<?= $field->name; ?>" class="table">
	<thead>
	  <tr>
	  <?php foreach($headers as $gdt) : ?>
		<th class="<?= $gdt->htmlClass(); ?>">
		  <label>
			<?= $gdt->renderHeader(); ?>
			<?php if ($field->ordered) : ?>
			<?= $gdt->displayTableOrder($field); ?>
			<?php endif; ?>
		  </label>
		  <?php if ($field->filtered) : ?>
		  <br/><?= $gdt->renderFilter($field->headers->name); ?>
		  <?php endif; ?>
		</th>
	  <?php endforeach; ?>
	  </tr>
	</thead>
	<tbody>
	<?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
	<tr data-gdo-id="<?=$gdo->getID()?>">
	  <?php foreach($headers as $gdt) :
// 	  $col = $field->getField($gdt->name);
// 	  $gdt = $col ? $col : $gdt;
	  $gdt->gdo($gdo); ?>
		<td class="<?= $gdt->htmlClass(); ?>"><?= $gdt->gdo($gdo)->renderCell(); ?></td>
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
