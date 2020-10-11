<?php
use GDO\UI\GDT_Slider;
$field instanceof GDT_Slider;
$fieldId = 'gdoslider_' . $field->name;
$options = [];
$options['ceil'] = $field->max;
$options['floor'] = $field->min;
if (is_array($field->step))
{
	$optArray = [];
	foreach ($field->step as $value => $label)
	{
		$optArray[] = ["value"=>$value, "legend"=>$label];
	}
	$options['stepsArray'] = $optArray;
	$options['showTicks'] = true;
}
elseif ($field->step > 0)
{
	$options['step'] = $field->step;
	if ($field->step < 1)
	{
		$options['precision'] = ceil(log10(1 / $field->step));
	}
}
?>
<md-input-container
 flex
 class="md-block md-icon-left<?= $field->classError(); ?>"
 ng-controller="GDOSliderCtrl">

  <?= $field->htmlIcon(); ?>

  <label
   class="md-no-float md-container-ignore"
   for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>

  <div ng-init='init("#<?=$fieldId;?>"); slidervalue=<?= $field->getVar(); ?>'>
	<rzslider
	 rz-slider-model="slidervalue"
	 rz-slider-options='<?= json_encode($options); ?>'>
	</rzslider>
  </div>

  <input
   type="hidden"
   id="<?= $fieldId; ?>"
   <?=$field->htmlFormName()?>
   value="<?= $field->getVar(); ?>" />

  <div class="gdo-form-error"><?= $field->error; ?></div>

</md-input-container>
