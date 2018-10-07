<?php
use GDO\Category\GDO_Category;
use GDO\Category\Module_Category;
use GDO\Table\GDT_Table;
use GDO\UI\GDT_Button;

$gdo = GDO_Category::table();
$module = Module_Category::instance();
echo $module->renderAdminTabs()->render(); 

# Render table with this query
$query = $gdo->select('*');
$table = GDT_Table::make();
$table->addHeaders(array(
	$gdo->gdoColumn('cat_id'),
	$gdo->gdoColumn('cat_name'),
	GDT_Button::make('edit'),
));
$table->query($query);
$table->paginate(true, 50);
echo $table->render();
