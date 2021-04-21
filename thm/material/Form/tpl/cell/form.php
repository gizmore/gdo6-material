<?php $form instanceof GDO\Form\GDT_Form; ?>
<!-- Begin Form -->
<div
 id="form_<?=$form->name;?>"
 class="gdo-form"
 layout="column"
 flex
 layout-fill
 layout-padding
 ng-controller="GDOFormCtrl"
 ng-init='init("#form_<?=$form->name;?>");'>
  
  <div class="md-whiteframe-8dp">
	<div class="gdo-form-head">
<?php if ($form->hasTitle()) : ?>
	  <h2 class="gdo-form-title"><?= $form->renderTitle(); ?></h2>
<?php endif; ?>
<?php if ($form->info) : ?>
	  <p><?= $form->info; ?></p>
<?php endif; ?>
	</div>

	<div class="gdo-form-inner md-inline-form" layout="column" layout-fill flex layout-padding>
	  <form
	   action="<?= $form->action; ?>"
	   method="<?= $form->method; ?>"
	   enctype="<?= $form->encoding; ?>">
	  <?php if ($form->method === 'GET') : ?>
		<input type="hidden" name="mo" value="<?=html(mo())?>" />
		<input type="hidden" name="me" value="<?=html(me())?>" />
	  <?php endif; ?>
	  <?php foreach ($form->fields as $field) : ?>
		<?php # if ($field->writable) : ?>
		  <?= $field->renderForm(); ?>
		<?php # endif; ?>
	  <?php endforeach; ?>
        <?=$form->actions()->renderCell()?>
	  </form>
	</div>
  </div>
</div>
<!-- End of Form -->
