<?php
use GDO\Date\GDT_Timestamp;
$field instanceof GDT_Timestamp;
$id = 'date_'.$field->name;
?>
<md-input-container
 class="md-block md-float md-icon-left<?= $field->classError(); ?>" flex
 ng-controller="GDODatepickerCtrl">
  <?= $field->htmlIcon(); ?>
  <label><?= $field->label; ?></label>
  <input
   mdc-datetime-picker=""
   ng-model="pickDate"
   ng-init="pickDate='<?= $field->displayVar(); ?>'"
   ng-change="datePicked('#<?= $id ?>')"
   date="true"
   time="false"
   placeholder="<?= $field->label; ?>"
   minutes="true"
   min-date="'<?= $field->minDate; ?>'"
   max-date="'<?= $field->maxDate; ?>'"
   type="text"
   short-time="false"
   class="md-input" />
  <div class="gdo-form-error"><?= $field->error; ?></div>
  <input
   id="<?= $id; ?>"
   type="hidden"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->getVar(); ?>" />
</md-input-container>
 