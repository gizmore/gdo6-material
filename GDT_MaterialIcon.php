<?php
namespace GDO\Material;

use GDO\UI\GDT_IconUTF8;

/**
 * Material Design Icon Provider.
 * 
 * @author gizmore
 * 
 */
final class GDT_MaterialIcon
{
	public static function iconS($icon, $style)
	{
		static $map = array(
			'add' => 'add',
			'alert' => 'add_alarm',
			'back' => 'undo',
			'captcha' => 'lock',
			'create' => 'add_circle',
			'credits' => 'money',
			'delete' => 'minus-circle',
			'done' => 'check',
			'down' => 'caret-down',
			'edit' => 'create',
			'email' => 'email',
			'error' => 'exclamation-triangle',
			'file' => 'attachment',
			'left' => 'chevron-left',
			'like' => 'thumb_up',
			'link' => 'chain',
			'menu' => 'menu',
			'message' => 'line_style',
			'pause' => 'pause',
			'remove' => 'minus',
			'refresh' => 'refresh',
			'right' => 'chevron-right',
			'search' => 'search',
			'settings' => 'gear',
			'star' => 'star',
			'success' => 'check-square',
			'tags' => 'tags',
			'title' => 'short_text',
			'tooltip' => 'info-circle',
			'up' => 'caret-up',
			'upload' => 'upload',
		);
		if (!isset($map[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $style);
		}
		$icon = $map[$icon];
		return "<md-icon class=\"material-icons icon-$icon\">$icon</md-icon>";
	}
	
}
