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
 class="gdo-table ce"
 flex layout-fill layout-align="center"
 ng-controller="GDOTableCtrl"
 ng-init='init(<?=json_encode($field->configJSON())?>)'>
<form method="get" action="<?= $field->href; ?>" class="ib">
  <input type="hidden" name="mo" value="<?= html(Common::getGetString('mo','')); ?>" />
  <input type="hidden" name="me" value="<?= html(Common::getGetString('me','')); ?>" />
  <?php if ($field->title) : ?>
  <h3><?= $field->title; ?></h3>
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
          <br/><?= $gdoType->renderFilter(); ?>
          <?php endif; ?>
        </th>
      <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
    <?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
    <tr gdo-id="<?= $gdo->getID()?>">
      <?php foreach($headers as $gdoType) : ?>
        <td class="<?= $gdoType->htmlClass(); ?>"><?= $gdoType->gdo($gdo)->renderCell(); ?></td>
      <?php endforeach; ?>
    </tr>
    <?php endwhile; ?>
    </tbody>
    <tfoot></tfoot>
  </table>
  <input type="submit" class="n" />
</form>
</div>
<?= $field->actions()->renderCell(); ?>
<!-- END of GDT_Table -->
