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
			'create' => 'add-circle',
			'edit' => 'create',
			'menu' => 'menu',
			'delete' => 'minus-circle',
			'like' => 'thumb_up',
			'remove' => 'minus',
			'up' => 'caret-up',
			'down' => 'caret-down',
			'left' => 'chevron-left',
			'right' => 'chevron-right',
			'done' => 'check',
			'success' => 'check-square',
			'error' => 'exclamation-triangle',
			'email' => 'email',
			'title' => 'short_text',
			'message' => 'paragraph',
			'captcha' => 'lock',
			'tooltip' => 'info-circle',
			'star' => 'star',
			'tags' => 'tags',
			'file' => 'paperclip',
			'settings' => 'gear',
			'refresh' => 'refresh',
			'credits' => 'money',
			'back' => 'undo',
			'link' => 'chain',
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
