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

<!-- Start K2 Tag Layout -->
	<?php if(count($this->items)): ?>
	<section id="blog-section">
       <div class="container">
       <div class="blog-box list-style">
		<?php foreach($this->items as $item): ?>

		<!-- Start K2 Item Layout -->
        <div class="blog-post">
  <?php if($item->params->get('tagItemImage',1) && !empty($item->imageGeneric)): ?>
    <!-- Item Image --> 
    <img src="<?php echo $item->imageLarge; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>" style="width:100%;" />
    <?php endif; ?>
  <div class="post-content">
    <?php if($item->params->get('tagItemTitle')): ?>
    <!-- Item title -->
    <h2>
      <?php if(isset($item->editLink)): ?>
      <!-- Item edit link --> 
      <span class="tagItemEditLink"> <a data-k2-modal="edit" href="<?php echo $item->editLink; ?>"> <?php echo JText::_('K2_EDIT_ITEM'); ?> </a> </span>
      <?php endif; ?>
      <?php if ($item->params->get('tagItemTitleLinked')): ?>
      <a href="<?php echo $item->link; ?>"> <?php echo $item->title; ?> </a>
      <?php else: ?>
      <?php echo $item->title; ?>
      <?php endif; ?>
      <?php if($item->params->get('tagItemFeaturedNotice') && $item->featured): ?>
      <!-- Featured flag --> 
      <span> <sup> <?php echo JText::_('K2_FEATURED'); ?> </sup> </span>
      <?php endif; ?>
    </h2>
    <?php endif; ?>
    <ul class="post-tags">
      <li><i class="fa fa-clock-o"></i><span><?php echo JHTML::_('date', $item->created , JText::_('d F')); ?></span></li>
      <?php if($item->params->get('tagItemCommentsAnchor') && ( ($item->params->get('comments') == '2' && !$this->user->guest) || ($item->params->get('comments') == '1')) ): ?>
      <li> <i class="fa fa-comments-o"></i> 
        <!-- Anchor link to comments below -->
        <?php if(!empty($item->event->K2CommentsCounter)): ?>
        <!-- K2 Plugins: K2CommentsCounter --> 
        <span><?php echo $item->event->K2CommentsCounter; ?></span>
        <?php else: ?>
        <?php if($item->numOfComments > 0): ?>
        <span><a href="<?php echo $item->link; ?>#itemCommentsAnchor"> <?php echo $item->numOfComments; ?> <?php echo ($item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </a></span>
        <?php else: ?>
        <span><a href="<?php echo $item->link; ?>#itemCommentsAnchor"> <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?> </a></span>
        <?php endif; ?>
        <?php endif; ?>
      </li>
      <?php endif; ?>
    </ul>
    <?php if($item->params->get('tagItemIntroText')): ?>
    <!-- Item introtext --> 
    <?php echo $item->introtext; ?>
    <?php endif; ?>
    <?php if ($item->params->get('tagItemReadMore')): ?>
    <!-- Item "read more..." link --> 
    <a class="button no-rad primaryskinBg small" href="<?php echo $item->link; ?>"> <?php echo JText::_('K2_READ_MORE'); ?> </a>
    <?php endif; ?>
  </div>
</div>
		<!-- End K2 Item Layout -->

		<?php endforeach; ?>

	<!-- Pagination -->
	<?php if($this->pagination->getPagesLinks()): ?>
	<ul class="pagination-list">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</ul>
	<?php endif; ?>
    </div>
    </div>
    </section>
	<?php endif; ?>

<!-- End K2 Tag Layout -->
