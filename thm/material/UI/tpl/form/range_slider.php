<?php
use GDO\UI\GDT_RangeSlider;
$field instanceof GDT_RangeSlider;
$fieldId = 'gdorangeslider_' . $field->name;
$options = [];
$options['ceil'] = $field->max;
$options['floor'] = $field->min;
$options['readOnly'] = !$field->writable;
$options['disabled'] = $field->disabled;
if ($field->maxRange > 0)
{
	$options['minRange'] = $field->minRange;
	$options['maxRange'] = $field->maxRange;
	$options['enforceRange'] = true;
}
if (is_array($field->step))
{
	$optArray = [];
	foreach ($field->step as $value => $label)
	{
		$optArray[] = ["value"=>$value, "label"=>$label];
	}
	$options['stepsArray'] = $optArray;
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
   for="form[<?= $field->name; ?>]"><?= $field->label; ?> </label>

  <div ng-init='init("#<?=$fieldId;?>", true); slidervalue=<?=$field->getLow();?>; sliderhigh=<?=$field->getHigh();?>;'>
	<rzslider
	 rz-slider-model="slidervalue"
	 rz-slider-high="sliderhigh"
	 rz-slider-options='<?= json_encode($options); ?>'>
	</rzslider>
  </div>

  <input
   type="hidden"
   id="<?= $fieldId; ?>"
   name="form[<?= $field->name?>]"
   value='<?= $field->getVar(); ?>' />

  <div class="gdo-form-error"><?= $field->error; ?></div>

</md-input-container>
