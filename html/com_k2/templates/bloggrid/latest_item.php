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

<!-- Start K2 Item Layout -->
<div class="card flex-md-row mb-4 box-shadow h-xl-300">

	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>

	<div class="card-body d-flex flex-column align-items-start">
		<strong class="d-inline-block mb-2 text-purple"><?php echo $this->item->category->name; ?></strong>
	
	  <!-- Item title -->
	  <h3 class="mb-0">
			<a class="text-dark" href="<?php echo $this->item->link; ?>">
	  		<?php echo $this->item->title; ?>
	  	</a>
	  	
	  </h3>



	<!-- Date created -->
	<div class="mb-1 text-muted">
		<?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC')); ?>
	</div>
	

  <!-- Plugins: AfterDisplayTitle -->
  <?php echo $this->item->event->AfterDisplayTitle; ?>

  <!-- K2 Plugins: K2AfterDisplayTitle -->
  <?php echo $this->item->event->K2AfterDisplayTitle; ?>

  <p class="card-text mb-auto"><?php echo $this->item->introtext; ?></p>
  <a class="text-gray" href="<?php echo $this->item->link; ?>">
			Continúa leyendo...
		</a>





  </div>
  

	  <!-- Plugins: BeforeDisplayContent -->
	  <?php echo $this->item->event->BeforeDisplayContent; ?>

	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  <?php echo $this->item->event->K2BeforeDisplayContent; ?>

	 
	  <!-- Item Image -->
		    	<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="card-img-right flex-auto d-none d-md-block" style="width:<?php echo $this->item->imageWidth; ?>px;height:auto;" />
		   

	 



	  <!-- Plugins: AfterDisplayContent -->
	  <?php echo $this->item->event->AfterDisplayContent; ?>

	  <!-- K2 Plugins: K2AfterDisplayContent -->
	  <?php echo $this->item->event->K2AfterDisplayContent; ?>

	 

  


  <!-- Plugins: AfterDisplay -->
  <?php echo $this->item->event->AfterDisplay; ?>

  <!-- K2 Plugins: K2AfterDisplay -->
  <?php echo $this->item->event->K2AfterDisplay; ?>

	
</div>
<!-- End K2 Item Layout -->
