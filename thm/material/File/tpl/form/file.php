<?php
use GDO\File\GDT_File;
use GDO\Form\GDT_Submit;
use GDO\UI\GDT_IconButton;
$field instanceof GDT_File;
?>
<div class="gdo-file-controls">
<?php foreach ($field->getInitialFiles() as $file) : $file instanceof \GDO\File\GDO_File; ?>
<?php $deleteButton = sprintf('<input type="submit" name="delete_%s[%s]" value="Remove File" />', $field->name, $file->getID()); #->href($_SERVER['REQUEST_URI']); ?>
<?php if ($field->preview && $file->isImageType()) : ?>
<?php printf('<div class="gdo-file-preview"><img src="%s" />%s (%s)</div>', $field->displayPreviewHref($file), $deleteButton, html($file->getName())); ?>
<?php else : ?>
<?php printf('<div class="gdo-file-preview">%s %s</div>', html($file->getName()), $deleteButton); ?>
<?php endif; ?>
<?php endforeach; ?>
</div>
<div
 ng-controller="GDOUploadCtrl"
 flow-init="{target: '<?= $field->getAction(); ?>', singleFile: <?= $field->multiple?'false':'true'; ?>, fileParameterName: '<?= $field->name; ?>', testChunks: false}"
 flow-file-progress="onFlowProgress($file, $flow, $message);"
 flow-file-success="onFlowSuccess($file, $flow, $message);"
 flow-file-removed="onRemoveFile($file, $flow);"
 flow-file-error="onFlowError($file, $flow, $message);"
 flow-files-submitted="onFlowSubmitted($flow);"
 ng-init='initGDOConfig(<?= $field->displayJSON(); ?>, "#gwffile_<?= $field->name; ?>");'>
<md-input-container
 class="md-block md-float md-icon-left<?php echo $field->classError(); ?>"
 md-no-float
 flex>
  <label for="form[<?php echo $field->name; ?>]"><?php echo $field->displayLabel(); ?></label>
  <?php echo $field->htmlIcon(); ?>
  <lf-ng-md-file-input
   <?php if ($field->multiple) : ?>multiple<?php endif; ?>
   lf-files="lfFiles"
   lf-caption="{{displayFileName()}}"
   lf-placeholder="{{displayFileName()}}"
   ng-change="lfFilesChanged($event)"
   <?php if ($field->preview) : ?>XXXpreview<?php endif; ?>
   <?php echo $field->htmlDisabled(); ?>
   <?php echo $field->htmlRequired(); ?>></lf-ng-md-file-input>
  <br/>
  <div class="gdo-form-error"><?= $field->error; ?></div>
  <input
   type="hidden"
   id="gwffile_<?php echo $field->name; ?>"
   name="form[<?php echo $field->name; ?>]" />
</md-input-container>
</div>
