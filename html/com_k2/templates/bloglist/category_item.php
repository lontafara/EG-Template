<?php
// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>

<!-- Start K2 Item Layout -->

<div class="col-lg-4 col-md-6">
  <div class="card">
    <?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
    <div class="img-card-top"> <a href="<?php echo $this->item->link; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"> <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" /> </a> </div>
    <?php endif; ?>
    <div class="card-body">
      <?php if($this->item->params->get('catItemTitle')): ?>
      <!-- Item title -->
      <h5 class="card-title text-dark">
        <?php if(isset($this->item->editLink)): ?>
        <!-- Item edit link --> 
        <span class="catItemEditLink"> <a data-k2-modal="edit" href="<?php echo $this->item->editLink; ?>"> <?php echo JText::_('K2_EDIT_ITEM'); ?> </a> </span>
        <?php endif; ?>
        <?php if ($this->item->params->get('catItemTitleLinked')): ?>
        <a class="text-dark" href="<?php echo $this->item->link; ?>"> <?php echo $this->item->title; ?> </a>
        <?php else: ?>
        <?php echo $this->item->title; ?>
        <?php endif; ?>
        <?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
        <!-- Featured flag --> 
        <span> <sup> <?php echo JText::_('K2_FEATURED'); ?> </sup> </span>
        <?php endif; ?>
      </h5>
      <?php endif; ?>
      <span class="card-text text-muted"><i class="fas fa-clock-o"></i><span><?php echo JHTML::_('date', $this->item->created , JText::_('d F')); ?></span></span>
        <?php if($this->item->params->get('catItemCommentsAnchor') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1')) ): ?>
        <i class="fas fa-comments-o"></i> 
          <!-- Anchor link to comments below -->
          <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
          <!-- K2 Plugins: K2CommentsCounter --> 
          <span><?php echo $this->item->event->K2CommentsCounter; ?></span>
          <?php else: ?>
          <?php if($this->item->numOfComments > 0): ?>
          <span><a href="<?php echo $this->item->link; ?>#itemCommentsAnchor"> <?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </a></span>
          <?php else: ?>
          <span><a href="<?php echo $this->item->link; ?>#itemCommentsAnchor"> <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?> </a></span>
          <?php endif; ?>
          <?php endif; ?>
        
        <?php endif; ?>
      
      <?php if($this->item->params->get('catItemIntroText')): ?>
      <!-- Item introtext --> 
      <?php echo $this->item->introtext; ?>

      <?php endif; ?>
      <?php if($this->item->params->get('catItemTags') && count($this->item->tags)): ?>
    <!-- Item tags -->
    <p>
      
      
        <?php foreach ($this->item->tags as $tag): ?>
        <span class="badge badge-pill badge-warning"><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></span>&nbsp;
        <?php endforeach; ?>
      
      
    </p>
    <?php endif; ?>
    </div>
  </div>
</div>

<!-- End K2 Item Layout --> 
