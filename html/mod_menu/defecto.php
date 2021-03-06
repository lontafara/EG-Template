<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<?php
	$tag = '';

	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id') . '';
		echo ' id="' . $tag . '"';
	}
?>
<?php
foreach ($list as $i => &$item)
{
	$class = 'nav-item item-' . $item->id;

	if (($item->id == $active_id) OR ($item->type == 'alias' AND $item->params->get('aliasoptions') == $active_id))
	{
		$class .= ' current';
	}

	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	elseif ($item->type == 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');

		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-active';
		}
	}

	if ($item->type == 'separator')
	{
		$class .= ' dropdown-divider';
	}

	if ($item->deeper)
	{
		$class .= ' deeper';
	}

	if ($item->parent)
	{
		$class .= ' parent dropdown';
	}

	if (!empty($class))
	{
		$class = ' class="' . $class . '"';
	}
	
	if($item->level=1 && $item->level_diff!=1) {
		echo '<li class="nav-item">';
    $item->anchor_css = 'nav-link '.$item->anchor_css ;
	
	}
	//echo"<pre>";print_r($item);
	

	if($item->level > $params->get('startLevel')) {

		$item->anchor_css = 'dropdown-item';
	}
	
	// The next item is deeper.
	if ($item->deeper)
	{
		echo '<li' . $class . '>';

		$item->anchor_css = 'dropdown-toggle '.$item->anchor_css ;
		$item->data = 'id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
	//echo"<pre>";print_r($item->data);
	}

	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;

	// The next item is deeper.
//echo"<pre>";print_r($item->level);print_r($item->level_diff);

	if ($item->deeper)
	{
		echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">
';
	}
	elseif ($item->shallower)
	{
		// The next item is shallower.
			
		if($item->level = 0) {
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
			}
		
		if($item->level = 1) {
		//echo '</li>';
		echo str_repeat('</div></li>', $item->level_diff);
			}
	}
	elseif ($item->level=1 && $item->level_diff!=1){
	
		// The next item is on the same level.
		echo '</li>';
	}
}
?>
