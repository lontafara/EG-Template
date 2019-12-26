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

<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->
<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;">
	<span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span>
</a>
<?php endif; ?>

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<!-- Main -->
<div class="container pt-5 pb-5" data-aos="fade-up">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<article>
				<?php if($this->item->params->get('itemIntroText')): ?>
			<h1><?php echo $this->item->introtext; ?></h1>
			  <?php endif; ?>
			<figure class="text-center mt-4 mb-4 full-width" data-aos="fade-up">
			<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="figure-img" alt="">
			<figcaption class="figure-caption"><?php echo $this->item->image_caption; ?>&nbsp;<?php echo $this->item->image_credits; ?></figcaption>
			</figure>
			<?php echo $this->item->fulltext; ?>
			
			</article>
		</div>
	</div>
</div>
<!-- End Main -->
<!-- End K2 Item Layout -->
