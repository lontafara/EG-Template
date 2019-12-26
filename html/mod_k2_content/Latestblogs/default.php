<?php
/**
 * @version    2.9.x
 * @package    K2
 * @author     JoomlaWorks https://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2018 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;
?>
<?php if($params->get('itemPreText')): ?>

<?php echo $params->get('itemPreText'); ?>
<?php endif; ?>
<?php if(count($items)): ?>
<div class="row mb-5">
<?php foreach ($items as $key=>$item):	?>
<div class="col-lg-4  mt-5">
  <div class="card shadow-sm border-0">
    
      <?php if($params->get('itemImage') && isset($item->image)): ?>
      <a href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;"> <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" title="<?php echo K2HelperUtilities::cleanHtml($item->introtext); ?>"class="card-img-top"/> </a>
      <?php endif; ?>
    
    <div class="card-body">
      <?php if($params->get('itemTitle')): ?>
      <h5 class="card-title"><a class="linkSEO" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;"><?php echo $item->title; ?></a></h5>
      <?php endif; ?>

      
        <?php if($params->get('itemIntroText')): ?>
      <p class="card-text text-muted"><small><?php echo JHTML::_('date', $item->created, JText::_('K2_DATE_FORMAT_LC')); ?></small></p>
      <?php echo $item->introtext; ?>
      
      <?php endif; ?>
      <a href="<?php echo $item->link; ?>" class="btn btn-danger btn-round">Leer más</a>

      </div>

     
    
  </div>
</div>
<?php endforeach; ?>
</div>
<div class="pb-5 pt-3 text-center">
<?php if($params->get('itemCustomLink')): ?>
  <a class="btn btn-outline-danger btn-round" href="<?php echo $itemCustomLinkURL; ?>" title="<?php echo K2HelperUtilities::cleanHtml($itemCustomLinkTitle); ?>"><?php echo $itemCustomLinkTitle; ?></a>
  <?php endif; ?>
</div>

<?php endif; ?>
