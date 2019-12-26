<?php
/**
 * @package	RSMembership!
 * @copyright	(c) 2009 - 2016 RSJoomla!
 * @link		https://www.rsjoomla.com
 * @license	GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');
?>

<h1><?php echo JText::_('COM_RSMEMBERSHIP_RETURNING_CUSTOMER'); ?></h1>
<p><?php echo JText::_('COM_RSMEMBERSHIP_SUBSCRIBE_PLEASE_LOGIN'); ?></p>
<form class="rsmembership_form form-horizontal" method="post" action="<?php echo JRoute::_('index.php'); ?>" id="rsm_subscribe_login_form">
<div class="item-page">
	<h3 class="page-header"><?php echo JText::_('COM_RSMEMBERSHIP_LOGIN_INFORMATION'); ?></h3>
	
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-bordered">
	<tr>
		<td width="30%" height="40"><label for="username"><?php echo JText::_('COM_RSMEMBERSHIP_USERNAME') ?></label></td>
		<td><input name="username" id="username" type="text" class="form-control input-xlarge" alt="username" size="18" /></td>
	</tr>
	<tr>
		<td width="30%" height="40"><label for="passwd"><?php echo JText::_('COM_RSMEMBERSHIP_PASSWORD') ?></label></td>
		<td><input type="password" id="passwd" name="password" class="form-control input-xlarge" size="18" alt="password" /></td>
	</tr>
	<?php if(JPluginHelper::isEnabled('system', 'remember')) { ?>
	<tr>
		<td width="30%" height="40"><label for="remember"><?php echo JText::_('COM_RSMEMBERSHIP_REMEMBER_ME') ?></label></td>
		<td><input type="checkbox" id="remember" name="remember" class="inputbox" value="yes" title="<?php echo JText::_('COM_RSMEMBERSHIP_REMEMBER_ME'); ?>" /></td>
	</tr>
	<?php } ?>
	</table>
	<div class="form-actions">
		<button type="submit" class="button btn btn-info"><?php echo JText::_('COM_RSMEMBERSHIP_LOGIN') ?></button>
	</div>
	<?php echo JHtml::_('form.token');?>
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $this->return; ?>" />
</div>
</form>