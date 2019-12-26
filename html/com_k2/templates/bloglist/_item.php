<?php

// no direct access
defined('_JEXEC') or die;
$link = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].$_SERVER['PATH_INFO'];
?>

<!-- Start K2 Item Layout -->
<section id="content-section">
<div class="container">

<div class="single-post">
  <?php if($this->item->params->get('itemTitle')): ?>
	<!-- Item title -->
	<h1>
		<?php if(isset($this->item->editLink)): ?>
		<!-- Item edit link -->
		<span class="itemEditLink">
			<a data-k2-modal="edit" href="<?php echo $this->item->editLink; ?>"><?php echo JText::_('K2_EDIT_ITEM'); ?></a>
		</span>
		<?php endif; ?>

		<?php echo $this->item->title; ?>

		<?php if($this->item->params->get('itemFeaturedNotice') && $this->item->featured): ?>
		<!-- Featured flag -->
		<span>
			<sup>
				<?php echo JText::_('K2_FEATURED'); ?>
			</sup>
		</span>
		<?php endif; ?>
	</h1>
	<?php endif; ?>

  <ul class="post-tags">
      <li><?php echo JHTML::_('date', $this->item->created, JText::_('K2_DATE_FORMAT_LC2')); ?></li>
  </ul>
  <div class="share-post-box">
      <ul class="share-box">
          <li><a class="facebook" data-toggle="tooltip" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $link; ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="<?php echo $link; ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
          <li><a class="twitter" data-toggle="tooltip" href="https://twitter.com/share" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
          <li><a class="google" data-toggle="tooltip" onclick="window.open('https://plus.google.com/share?url=<?php echo $link; ?>','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=<?php echo $link; ?>" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="linkedin" data-toggle="tooltip" onclick="window.open('https://www.linkedin.com/sharer.php?u=<?php echo $link; ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="<?php echo $link; ?>" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
  </div>
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
  
  
  
  <?php echo $this->item->fulltext; ?> 
  
  <?php if($this->item->params->get('itemTags') && count($this->item->tags)): ?>
		<!-- Item tags -->
			<h2><?php echo JText::_('K2_TAGGED_UNDER'); ?></h2>
			<ul class="tags-list">
				<?php foreach ($this->item->tags as $tag): ?>
				<li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
  
</div>


<!-- Plugins: AfterDisplay --> 
<?php echo $this->item->event->AfterDisplay; ?> 

<!-- K2 Plugins: K2AfterDisplay --> 
<?php echo $this->item->event->K2AfterDisplay; ?>
<?php if(
$this->item->params->get('itemComments') &&
(($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))
): ?>
<!-- K2 Plugins: K2CommentsBlock --> 
<?php echo $this->item->event->K2CommentsBlock; ?>
<?php endif; ?>
<?php if(
$this->item->params->get('itemComments') &&
($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)
): ?>
<!-- Item comments --> 
<a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>
<?php if($this->item->params->get('commentsFormPosition')=='above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
  <!-- Item comments form -->
  <div class="contact-form-box"> <?php echo $this->loadTemplate('comments_form'); ?> </div>
  <?php endif; ?>
<div class="comment-area-box">
  
  <?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
  <!-- Item user comments -->
  <div class="title-section">
      <h1><?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </h1>
      <span></span>
  </div>
                    
    
  
  <ul class="comment-tree">
    <?php foreach ($this->item->comments as $key=>$comment): ?>
    <li class="<?php echo ($key%2) ? "odd" : "even"; echo (!$this->item->created_by_alias && $comment->userID==$this->item->created_by) ? " authorResponse" : ""; echo($comment->published) ? '':' unpublishedComment'; ?>">
      <div class="comment-box">
        <?php if($comment->userImage): ?>
        <img src="<?php echo $comment->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comment->userName); ?>" />
        <?php endif; ?>
        <div class="comment-content">
          <h4><?php echo $comment->userName; ?></h4>
          <span><?php echo JHTML::_('date', $comment->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?></span>
          <p><?php echo $comment->commentText; ?></p>
        </div>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  
  <!-- Comments Pagination -->
  <div class="itemCommentsPagination"> <?php echo $this->pagination->getPagesLinks(); ?>
  </div>
  <?php endif; ?>
 
  <?php endif; ?>
</div>
 <?php if(
$this->item->params->get('commentsFormPosition')=='below' &&
$this->item->params->get('itemComments') &&
!JRequest::getInt('print') &&
($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))
): ?>
  <!-- Item comments form -->
  <div class="contact-form-box itemCommentsForm"> <?php echo $this->loadTemplate('comments_form'); ?> </div>
  <?php endif; ?>
  <?php $user = JFactory::getUser(); if($this->item->params->get('comments') == '2' && $user->guest): ?>
  <div class="itemCommentsLoginFirst"><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
<?php endif; ?>
</div>

</div>
</section>
<!-- End K2 Item Layout --> 
