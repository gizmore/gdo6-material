<?php
use GDO\Core\GDT_Success;
use GDO\UI\GDT_Icon;
$field instanceof GDT_Success;
$icon = $field->getValue() ? 'yes' : 'no'; 
echo GDT_Icon::iconS($icon);
