<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord();

?>

<div class="container pt-3 pb-5 mb-5 aos-init aos-animate" data-aos="fade-up">
	<div class="pb-4 text-center">
		<h2><span class="text-secondary font-weight-bold">Buscar</span> en esta<strong>Web</strong></h2>
		<p class="text-muted">
			 Este Gráfico. Programador web senior en Bogotá.
		</p>
	</div>



<form id="searchForm" action="<?php echo JRoute::_('index.php?option=com_search'); ?>" method="post" class="row justify-content-center">
	

		<div class="col-md-6">
			<input type="text" name="searchword" title="<?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>" placeholder="<?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>" id="search-searchword" size="30" maxlength="<?php echo $upper_limit; ?>" value="<?php echo $this->escape($this->origkeyword); ?>" class="form-control input-round w-100 form-control-l" />
		</div>
		<div class="col-md-6">
			<input type="hidden" name="task" value="search" />
			<button name="Search" onclick="this.form.submit()" class="btn btn-info btn-round btn-lg w-100 hasTooltip" title="<?php echo JHtml::_('tooltipText', 'COM_SEARCH_SEARCH');?>">
				<i class="fas fa fa-search"></i> 
				<?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?>
			</button>	
		</div>
	<div class="col-md-12 justify-content-center <?php echo $this->params->get('pageclass_sfx'); ?>">
		<?php if (!empty($this->searchword)) : ?>
			<code class="text-muted">
				<?php echo JText::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', '<span class="badge badge-info">' . $this->total . '</span>'); ?>
			</code>
		<?php endif; ?>
	</div>
	<div class="row">
	<?php if ($this->params->get('search_phrases', 1)) : ?>
		<div class="col-md-6 card p-4">
		<fieldset class="phrases">
			
			<legend>
				<?php echo JText::_('COM_SEARCH_FOR'); ?>
			</legend>
			<div class="phrases-box">
				<?php echo $this->lists['searchphrase']; ?>
			</div>
			<div class="ordering-box">
				<label for="ordering" class="ordering">
					<?php echo JText::_('COM_SEARCH_ORDERING'); ?>
				</label>
				<?php echo $this->lists['ordering']; ?>
			</div>
		
		</fieldset>
		</div>
	<?php endif; ?>
	<?php if ($this->params->get('search_areas', 1)) : ?>
		<div class="col-md-6 card p-4">
		<fieldset class="only">
			
			<legend>
				<?php echo JText::_('COM_SEARCH_SEARCH_ONLY'); ?>
			</legend>
			<?php foreach ($this->searchareas['search'] as $val => $txt) : ?>
				<?php $checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="checked"' : ''; ?>
				<label for="area-<?php echo $val; ?>" class="checkbox">
					<input type="checkbox" name="areas[]" value="<?php echo $val; ?>" id="area-<?php echo $val; ?>" <?php echo $checked; ?> />
					<?php echo JText::_($txt); ?>
				</label>
			<?php endforeach; ?>
		
		</fieldset>
	</div>
	<?php endif; ?>

</div>
	<?php if ($this->total > 0) : ?>
		<div class="form-limit">
			<label for="limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
			</label>
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
		<p class="counter">
			<?php echo $this->pagination->getPagesCounter(); ?>
		</p>
	<?php endif; ?>
</form>

</div>
