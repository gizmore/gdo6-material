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
	public static function iconS($icon, $iconText, $style)
	{
		static $map = array(
			'add' => 'add',
			'alert' => 'add_alarm',
			'all' => 'storage',
			'arrow_down' => 'arrow_drop_down',
			'arrow_left' => 'chevron_left',
			'arrow_right' => 'chevron_right',
			'arrow_up' => 'arrow_drop_up',
			'back' => 'undo',
			'captcha' => 'lock',
			'create' => 'add_circle',
			'credits' => 'money',
			'delete' => 'delete',
			'done' => 'check',
			'down' => 'caret-down',
			'edit' => 'create',
			'email' => 'email',
			'error' => 'report_problem',
			'file' => 'attachment',
			'group' => 'group',
			'help' => 'help',
			'image' => 'image',
			'left' => 'chevron-left',
			'level' => 'enhanced_encryption',
			'like' => 'thumb_up',
			'link' => 'chain',
			'menu' => 'menu',
			'message' => 'line_style',
			'pause' => 'pause',
			'person_add' => 'person_add',
			'quote' => 'message',
			'remove' => 'minus',
			'refresh' => 'refresh',
			'reply' => 'forum',
			'right' => 'chevron-right',
			'search' => 'search',
			'settings' => 'settings',
			'star' => 'star',
			'success' => 'check-square',
			'tags' => 'tags',
			'time' => 'hourglass_empty',
			'title' => 'short_text',
			'tooltip' => 'info-circle',
			'up' => 'caret-up',
			'upload' => 'upload',
			'url' => 'language',
			'view' => 'play_arrow',
			'wait' => 'hourglass_empty',
		);
		if (!isset($map[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $iconText, $style);
		}
		$icon = $map[$icon];
		return "<md-icon class=\"material-icons icon-$icon\">$icon<md-tooltip>$iconText</md-tooltip></md-icon></a>";
	}
	
}
