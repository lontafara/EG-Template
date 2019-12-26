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
       <div class="container pt-5 pb-5 aos-init aos-animate">
        <div class="row justify-content-center">
       <div class="col-md-6">
		<?php foreach($this->items as $item): ?>

		<!-- Start K2 Item Layout -->
<div class="card mt-4">
  <?php if($item->params->get('tagItemImage',1) && !empty($item->imageGeneric)): ?>
    <!-- Item Image --> 
    <div class="img-card-top"><img src="<?php echo $item->imageLarge; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>"  /></div>
    <?php endif; ?>
  <div class="card-body">
    <?php if($item->params->get('tagItemTitle')): ?>
    <!-- Item title -->
    <h5 class="card-title text-dark">
      <a href="<?php echo $item->link; ?>"> <?php echo $item->title; ?> </a>
    </h5>
    <?php endif; ?>
   
      <p class="card-text text-muted"><i class="fas fa fa-clock-o"></i><span><?php echo JHTML::_('date', $item->created , JText::_('d F')); ?></span>
      </p>
      
    
    <?php if($item->params->get('tagItemIntroText')): ?>
    <!-- Item introtext --> 
    <?php echo $item->introtext; ?>
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
    </div>
    </section>
	<?php endif; ?>

<!-- End K2 Tag Layout -->
