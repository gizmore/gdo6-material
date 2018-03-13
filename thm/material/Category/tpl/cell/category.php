<?php
use GDO\Category\GDT_Category;
$field instanceof GDT_Category;
?>
<?php
if ($category = $field->getCategory())
{
	echo $category->displayName();
}
else
{
	echo t('no_category');
}
