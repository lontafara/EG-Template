<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


/*
 * xhtml (divs and font headder tags)
 */
function modChrome_nomoduletable($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>

<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php if ((bool) $module->showtitle) : ?>
  <h2><?php echo $module->title; ?></h2>
  <?php endif; ?>
  <?php echo $module->content; ?> </div>
<?php endif;
}

function modChrome_nomoduletablediv($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<?php if ((bool) $module->showtitle) : ?>
<h2><?php echo $module->title; ?></h2>
<?php endif; ?>
<?php echo $module->content; ?>
<?php endif;
}
?>
