<?php
use GDO\Captcha\GDT_Captcha;
$field instanceof GDT_Captcha;
?>
<md-input-container class="md-block md-float md-icon-left" flex>
  <label for="form[<?= $field->name; ?>]"><?= t('captcha'); ?></label>
  <?= $field->htmlIcon(); ?>
  <input
   autocomplete="off"
   type="text"
   pattern="[a-zA-Z]{5}"
   required="required"
   style="width:120px; clear: both;"
   name="form[<?= $field->name; ?>]"
   value="<?= html($field->getVar()); ?>"/>
  <br/>
  <br/>
  <br/>
  <img
   class="gdo-captcha-img"
   src="<?= $field->hrefCaptcha(); ?>"
   onclick="this.src='<?= $field->hrefNewCaptcha(); ?>'+(new Date().getTime())" />
  <div class="gdo-form-error"><?= $field->error; ?></div>
</md-input-container>
