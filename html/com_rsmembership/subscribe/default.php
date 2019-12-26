<?php
/**
 * @package	RSMembership!
 * @copyright	(c) 2009 - 2016 RSJoomla!
 * @link		https://www.rsjoomla.com
 * @license	GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');


// Add the javascript text variables
if (!empty($this->membershipterms)) {
	JText::script('COM_RSMEMBERSHIP_PLEASE_AGREE_MEMBERSHIP');
}
if ($this->choose_username && !$this->logged) {
	JText::script('COM_RSMEMBERSHIP_PLEASE_TYPE_USERNAME');
	JText::script('COM_RSMEMBERSHIP_USERNAME_IS_OK');
	JText::script('COM_RSMEMBERSHIP_USERNAME_NOT_OK');
}
if ($this->choose_password && !$this->logged) {
	JText::script('COM_RSMEMBERSHIP_PLEASE_TYPE_PASSWORD');
	JText::script('COM_RSMEMBERSHIP_PLEASE_TYPE_PASSWORD_6');
	JText::script('COM_RSMEMBERSHIP_PLEASE_CONFIRM_PASSWORD');
}
if (!$this->logged) {
	JText::script('COM_RSMEMBERSHIP_PLEASE_TYPE_NAME');
	JText::script('COM_RSMEMBERSHIP_PLEASE_TYPE_EMAIL');
}

JText::script('COM_RSMEMBERSHIP_THERE_WAS_AN_ERROR');

?>
<div class="container pt-5 pb-5 aos-init aos-animate" data-aos="fade-up">
	<div class="row justify-content-center">
		<div class="col-md-8">
<div class="item-page">
	<?php if ($this->params->get('show_page_heading', 1)) { ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->membership->name); ?></h1>
		</div>
	<?php } ?>

<?php if (!$this->logged && $this->show_login) { ?>
	<?php echo $this->loadTemplate('login'); ?>
<?php } ?>

<?php if (!$this->logged) { ?>
<h2><strong><?php echo JText::_('COM_RSMEMBERSHIP_NEW_CUSTOMER'); ?></strong></h2>
<?php } ?>
<?php if (!$this->logged && $this->show_login) { ?>
	<p><?php echo JText::_('COM_RSMEMBERSHIP_SUBSCRIBE_PLEASE_ELSE'); ?></p>
<?php } ?>
	<form method="post" class="rsmembership_form" action="<?php echo JRoute::_('index.php?option=com_rsmembership&task=validatesubscribe'); ?>" name="membershipForm" onsubmit="return RSMembership.subscribe.validate_subscribe(this);" id="rsm_subscribe_default_form">
		<div class="item-page">
			<h3 class="page-header"><?php echo JText::_('COM_RSMEMBERSHIP_ACCOUNT_INFORMATION'); ?></h3>
			<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
				<?php if ($this->choose_username) { ?>
				<tr>
					<td width="30%" height="40" valign="middle"><label for="rsm_username"><?php echo JText::_('COM_RSMEMBERSHIP_USERNAME'); ?>:</label></td>
					<?php if (!$this->logged) { ?>
					<td>
						<input type="text" name="username" id="rsm_username" size="40" value="<?php echo !empty($this->data->username) ? $this->escape($this->data->username) : ''; ?>" onkeyup="return RSMembership.subscribe.check_username(this)" onkeydown="RSMembership.subscribe.ajax_flag()" autocomplete="off" class="form-control input-xlarge" maxlength="50" /><?php echo JText::_('COM_RSMEMBERSHIP_REQUIRED'); ?> <?php echo JHtml::image('com_rsmembership/load.gif', 'Loading', 'id="rsm_loading" style="display: none;"', true); ?>
						<div class="clearfix"></div>
						<div id="rsm_username_message" style="display: none"></div>
						<div class="clearfix"></div>
						<div id="rsm_suggestions" style="display: none">
							<p><strong><?php echo JText::_('COM_RSMEMBERSHIP_HERE_ARE_SOME_USERNAME_SUGGESTIONS'); ?></strong><br /><a href="javascript: void(0);" onclick="rsm_check_username(document.getElementById('rsm_username'))"><strong><?php echo JText::_('COM_RSMEMBERSHIP_CHECK_OTHER_SUGGESTIONS'); ?></strong></a></p>
							<ol id="rsm_suggestions_ol"></ol>
						</div>
					</td>
					<?php } else { ?>
					<td><?php echo $this->escape($this->user->get('username')); ?></td>
					<?php } ?>
				</tr>
				<?php } ?>
				<?php if ($this->choose_password) { ?>
				<tr>
					<td width="30%" height="40" valign="middle"><label for="rsm_password"><?php echo JText::_('COM_RSMEMBERSHIP_PASSWORD'); ?>:</label></td>
					<?php if (!$this->logged) { ?>
					<td><input class="form-control input-xlarge" type="password" name="password" id="rsm_password" size="40" value="" autocomplete="off" /><?php echo JText::_('COM_RSMEMBERSHIP_REQUIRED'); ?></td>
					<?php } else { ?>
					<td>**********</td>
					<?php } ?>
				</tr>
				<?php if (!$this->logged) { ?>
				<tr>
					<td width="30%" height="40" valign="middle"><label for="rsm_password2"><?php echo JText::_('COM_RSMEMBERSHIP_CONFIRM_PASSWORD'); ?>:</label></td>
					<td><input class="form-control input-xlarge" type="password" name="password2" id="rsm_password2" size="40" value="" autocomplete="off" /><?php echo JText::_('COM_RSMEMBERSHIP_REQUIRED'); ?></td>
				</tr>
				<?php } ?>
				<?php } ?>
				<tr>
					<td width="30%" height="40"><label for="name"><?php echo JText::_('COM_RSMEMBERSHIP_NAME'); ?>:</label></td>
					<?php if (!$this->logged) { ?>
					<td><input class="form-control input-xlarge" type="text" name="name" id="name" size="40" value="<?php echo !empty($this->data->name) ? $this->escape($this->data->name) : ''; ?>" maxlength="50" autocomplete="off" /><?php echo JText::_('COM_RSMEMBERSHIP_REQUIRED'); ?></td>
					<?php } else { ?>
					<td><?php echo $this->escape($this->user->get('name')); ?></td>
					<?php } ?>
				</tr>
				<tr>
					<td height="40"><label for="email"><?php echo JText::_( 'COM_RSMEMBERSHIP_EMAIL' ); ?>:</label></td>
					<?php if (!$this->logged) { ?>
					<td><input class="form-control input-xlarge" type="text" id="email" name="email" size="40" value="<?php echo !empty($this->data->email) ? $this->escape($this->data->email) : ''; ?>" maxlength="100" autocomplete="off" /><?php echo JText::_('COM_RSMEMBERSHIP_REQUIRED'); ?></td>
					<?php } else { ?>
					<td><?php echo $this->escape($this->user->get('email')); ?></td>
					<?php } ?>
				</tr>
			</table>
		</div>
		
	<?php if (count($this->fields)) { ?>
		<div class="item-page">
			<h3 class="page-header text-muted">Información de facturación</h3>
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
				<?php foreach ($this->fields as $field) { 
				$hidden = (isset($field[2]) && $field[2] == 'hidden') ? true : false;
				?>
				<tr<?php echo ($hidden ? ' style="display:none"':'')?>>
					<td width="30%" height="40"><?php echo $field[0]; ?></td>
					<td><?php echo $field[1]; ?></td>
				</tr>
				<?php } ?>
				</table>
		</div>
	<?php } ?>
	
	<?php if (count($this->membership_fields)) { ?>
		<div class="item-page">
			<h3 class="page-header text-muted">Cuéntame sobre tu proyecto</h3>
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="rsmembership_form_table">
				<?php foreach ($this->membership_fields as $field) { 
				$hidden = (isset($field[2]) && $field[2] == 'hidden') ? true : false;
				?>
				<tr<?php echo ($hidden ? ' style="display:none"':'')?>>
					<td width="30%" height="40"><?php echo $field[0]; ?></td>
					<td><?php echo $field[1]; ?></td>
				</tr>
				<?php } ?>
				</table>
		</div>
	<?php } ?>

	<?php if ($this->use_captcha) { ?>
	<div class="item-page">
	<h6 class="text-muted">Introduce el captcha</h6>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
		<tr>
			<?php if ($this->use_recaptcha_new) { ?>
				<td>
					<div class="g-recaptcha"
						data-sitekey="<?php echo $this->escape($this->config->recaptcha_new_site_key); ?>"
						data-theme="<?php echo $this->escape($this->config->recaptcha_new_theme); ?>"
						data-type="<?php echo $this->escape($this->config->recaptcha_new_type); ?>"
					></div>
				</td>
			<?php } else { ?>
			<td width="30%">
				<label for="submit_captcha"><span class="hasTooltip" title="<?php echo JText::_('COM_RSMEMBERSHIP_CAPTCHA_DESC'); ?>"><?php echo JText::_($this->captcha_case_sensitive ? 'COM_RSMEMBERSHIP_CAPTCHA_CASE_SENSITIVE' : 'COM_RSMEMBERSHIP_CAPTCHA'); ?></span></label>
			</td>
			<td>
				<?php if ($this->use_builtin) { ?>
				<img src="<?php echo JRoute::_('index.php?option=com_rsmembership&task=captcha&sid='.uniqid('captcha')); ?>" id="submit_captcha_image" alt="Antispam" />
				<span class="hasTooltip" title="<?php echo JText::_('COM_RSMEMBERSHIP_REFRESH_CAPTCHA_DESC'); ?>"><a style="border-style: none" href="javascript: void(0)" onclick="return RSMembership.subscribe.refresh_captcha();"><?php echo JHtml::image('com_rsmembership/refresh.gif', JText::_('COM_RSMEMBERSHIP_REFRESH_CAPTCHA'), 'border="0" onclick="this.blur()" align="top"', true); ?></a></span><br />
				<input type="text" name="captcha" id="submit_captcha" size="40" value="" class="form-control" />
				<?php } elseif ($this->use_recaptcha) { ?>
					<?php echo $this->show_recaptcha; ?>
				<?php } ?>
			</td>
			<?php } ?>
		</tr>
	</table>
	</div>
	<?php } ?>

	<?php echo $this->extrasview; ?>
	
	<?php if ($this->has_coupons) { ?>
	<div class="item-page">
		<h3 class="page-header"><?php echo JText::_('COM_RSMEMBERSHIP_DISCOUNTS'); ?></h3>
		<table cellpadding="0" cellspacing="0" border="0" width="100%" class="rsmembership_form_table">
			<tr>
				<td colspan="2"><?php echo JText::_('COM_RSMEMBERSHIP_COUPON_DESC'); ?></td>
			</tr>
			<tr>
				<td width="30%" height="40"><label for="coupon"><?php echo JText::_('COM_RSMEMBERSHIP_COUPON'); ?>:</label></td>
				<td><input type="text" name="coupon" class="form-control" id="coupon" size="40" value="" maxlength="64" /></td>
			</tr>
		</table>
	</div>
	<?php } ?>

	<?php if ($this->one_page_checkout) { ?>
		<?php echo $this->loadTemplate('payment'); ?>
	<?php } ?>

	<?php if (!empty($this->membershipterms)) { ?>
	<div class="item-page">
		<h3 class="page-header"><?php echo JText::_('COM_RSMEMBERSHIP_TERM'); ?></h3>
		<div id="rsm_terms_frame">
			<div class="item-page">
				<div id="rsm_terms_container">
					<h1><?php echo $this->escape($this->membershipterms->name); ?></h1>
					<?php
					if (RSMembershipHelper::getConfig('trigger_content_plugins')) {
						$this->membershipterms->description = JHtml::_('content.prepare', $this->membershipterms->description);
					}
					echo $this->membershipterms->description;
					?>
				</div> <!-- rsm_terms_container -->
			</div>
		</div>
		<input type="checkbox" id="rsm_checkbox_agree" class="pull-left" name="i_agree_to_terms" value="1" /> <label for="rsm_checkbox_agree"><?php echo JText::_('COM_RSMEMBERSHIP_I_AGREE'); ?> (<?php echo $this->escape($this->membershipterms->name); ?>)</label>
	</div>
	<?php } ?>

	<div class="form-actions">
		<button type="submit" class="button btn btn-success pull-right"><?php echo $this->one_page_checkout ? JText::_('COM_RSMEMBERSHIP_SUBSCRIBE') : JText::_('COM_RSMEMBERSHIP_NEXT'); ?></button>
	</div>
	<?php echo JHtml::_('form.token');?>
	<input type="hidden" name="option" value="com_rsmembership" />
	<input type="hidden" name="view" value="subscribe" />
	<input type="hidden" name="task" value="validatesubscribe" />
	<input type="hidden" name="cid" value="<?php echo $this->membership->id; ?>" />
	</form>
</div>
</div>
</div>
</div>
<?php
	echo RSMembershipHelper::renderMagnificPopup('rsmembershipModal', array(
		'url' 	   => false,
		'height'   => 400
	));
?>