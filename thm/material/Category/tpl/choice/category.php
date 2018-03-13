<?php
use GDO\Category\GDT_Category;
$field instanceof GDT_Category;
?>
<?php
$category = $field->gdo;
echo str_repeat('+', $category->getDepth()) . $category->displayName();

