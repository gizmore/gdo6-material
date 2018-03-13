<?php /** @var $field \GDO\Category\GDT_Tree **/
use GDO\Category\GDO_Tree;
$id = 'gwftreecbx_'.$field->name;
$gdo = $field->gdo;
$gdo instanceof GDO_Tree;

# Build  Tree JSON
$json = [];
list($tree, $roots) = $gdo->full();
/** @var $roots \GDO\Forum\GDO_ForumBoard[] **/
foreach ($roots as $root)
{
	$json[] = $root->toJSON();
}

if (!function_exists('_gwfTreeRecurse'))
{
    function _gwfTreeRecurse(GDO_Tree $leaf)
    {
        $r2 = str_repeat('&nbsp;', $leaf->getDepth()*6);
        if ($leaf->children)
        {
            $lid = $leaf->getID();
            $r = '<i ng-show="isCollapsed('.$lid.')" ng-click="expand('.$lid.')" class="material-icons">chevron_right</i>';
            $r .= '<i ng-hide="isCollapsed('.$lid.')" ng-click="shrink('.$lid.')" class="material-icons">expand_more</i>';
        }
        else
        {
            $r = '<i class="material-icons">remove</i>';
        }
        printf('<div ng-class="{\'n\': !isShown(%1$s)}"><b>'.$r2.$r.'<md-checkbox ng-model="all[%1$s].selected" ng-click="onToggled($event, %1$s);" md-indeterminate="all[%1$s].selected === null" >%2$s</md-checkbox></b></div>', $leaf->getID(), $leaf->displayName());
        foreach ($leaf->children as $child)
        {
            _gwfTreeRecurse($child);
        }
    }
}
?>
<div class="gdo-tree"
 layout="column" layout-fill layout-padding flex="100" layout-align="start start"
 ng-controller="GDOTreeCtrl"
 ng-init='init("#<?= $id; ?>" , <?= json_encode($json); ?>)'>
<?php
foreach ($roots as $root)
{
	_gwfTreeRecurse($root);
}
?>
<input type="hidden" id="<?= $id; ?>" />
</div>

