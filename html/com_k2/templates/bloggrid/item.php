<?php

// no direct access
defined('_JEXEC') or die;
//$link = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].$_SERVER['PATH_INFO'];
?>
<?php

session_start();

$_SESSION['k2itemimage'] = $this->item->imageXLarge;

global $k2itemimage;
$k2itemimage = $this->item->imageXLarge;
?>

<!-- Start K2 Item Layout -->
<!-- Main -->

      <!-- Plugins: BeforeDisplay -->
  <?php echo $this->item->event->BeforeDisplay; ?>

  <!-- K2 Plugins: K2BeforeDisplay -->
  <?php echo $this->item->event->K2BeforeDisplay; ?>
      
<article>
        <?php if($this->item->params->get('itemDateCreated')): ?>
  <!-- Date created -->
  <small class="text-muted mb-0">
    <?php echo JHTML::_('date', $this->item->created, JText::_('K2_DATE_FORMAT_LC2')); ?>
  </small>
  <?php endif; ?>
        <?php if($this->item->params->get('itemIntroText')): ?>
      <div class="h1 mt-0"><?php echo $this->item->introtext; ?></div>
        <?php endif; ?>
        <?php if($this->item->params->get('itemImage')): ?>
      <figure class="text-center mt-4 mb-4 full-width aos-init aos-animate" data-aos="fade-up">
      <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="figure-img">
      <figcaption class="figure-caption"><?php echo $this->item->image_caption; ?>&nbsp;<?php echo $this->item->image_credits; ?></figcaption>
      </figure>
        <?php endif; ?>
      <div class="row">
      <?php if(
    $this->item->params->get('itemFontResizer') ||
    $this->item->params->get('itemPrintButton') ||
    $this->item->params->get('itemEmailButton') ||
    $this->item->params->get('itemSocialButton') ||
    ($this->item->params->get('itemVideoAnchor') && !empty($this->item->video)) ||
    ($this->item->params->get('itemImageGalleryAnchor') && !empty($this->item->gallery)) ||
    ($this->item->params->get('itemCommentsAnchor') && $this->item->params->get('itemComments') && $this->item->params->get('comments'))
  ): ?>
  <div class="itemToolbar col-md-6 col-sm-6">
    <ul>
      <?php if($this->item->params->get('itemFontResizer')): ?>
      <!-- Font Resizer -->
      <li>
        <span class="itemTextResizerTitle"><?php echo JText::_('K2_FONT_SIZE'); ?></span>
        <a href="#" id="fontDecrease">
          <span><?php echo JText::_('K2_DECREASE_FONT_SIZE'); ?></span>
        </a>
        <a href="#" id="fontIncrease">
          <span><?php echo JText::_('K2_INCREASE_FONT_SIZE'); ?></span>
        </a>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemPrintButton') && !JRequest::getInt('print')): ?>
      <!-- Print Button -->
      <li>
        <a class="itemPrintLink text-muted pr-2" rel="nofollow" href="<?php echo $this->item->printLink; ?>" onclick="window.open(this.href,'printWindow','width=900,height=600,location=no,menubar=no,resizable=yes,scrollbars=yes'); return false;">
          <span><i class="fa fa-print"></i></span>
        </a>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemEmailButton') && !JRequest::getInt('print')): ?>
      <!-- Email Button -->
      <li>
        <a class="itemEmailLink text-muted pr-2" rel="nofollow" href="<?php echo $this->item->emailLink; ?>" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;">
          <span><i class="fa fa-envelope"></i></span>
        </a>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemSocialButton') && !is_null($this->item->params->get('socialButtonCode', NULL))): ?>
      <!-- Item Social Button -->
      <li>
        <?php echo $this->item->params->get('socialButtonCode'); ?>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemVideoAnchor') && !empty($this->item->video)): ?>
      <!-- Anchor link to item video below - if it exists -->
      <li>
        <a class="itemVideoLink k2Anchor" href="<?php echo $this->item->link; ?>#itemVideoAnchor"><?php echo JText::_('K2_MEDIA'); ?></a>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemImageGalleryAnchor') && !empty($this->item->gallery)): ?>
      <!-- Anchor link to item image gallery below - if it exists -->
      <li>
        <a class="itemImageGalleryLink k2Anchor" href="<?php echo $this->item->link; ?>#itemImageGalleryAnchor"><?php echo JText::_('K2_IMAGE_GALLERY'); ?></a>
      </li>
      <?php endif; ?>

      <?php if($this->item->params->get('itemCommentsAnchor') && $this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1')) ): ?>
      <!-- Anchor link to comments below - if enabled -->
      <li>
        <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
        <!-- K2 Plugins: K2CommentsCounter -->
        <?php echo $this->item->event->K2CommentsCounter; ?>
        <?php else: ?>
        <?php if($this->item->numOfComments > 0): ?>
        <a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
          <span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
        </a>
        <?php else: ?>
        <a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor"><?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?></a>
        <?php endif; ?>
        <?php endif; ?>
      </li>
      <?php endif; ?>
    </ul>
    <div class="clr"></div>
  </div>
  <?php endif; ?>

  <?php if($this->item->params->get('itemRating')): ?>
  <!-- Item Rating -->
  <div class="itemRatingBlock col-md-6 col-sm-6">
    <span class="text-muted">Valora Este Artículo!</span>
    <div class="itemRatingForm">
      <ul class="itemRatingList">
        <li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
        <li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
        <li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
        <li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
        <li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
        <li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
      </ul>
      <div id="itemRatingLog<?php echo $this->item->id; ?>" class="text-muted"><?php echo $this->item->numOfvotes; ?></div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php endif; ?>
</div>
  <div class="clr"></div>
      <div id="articuloSEO" class="container text-justify">
      <?php echo $this->item->fulltext; ?>
      </div>
      
    <?php if($this->item->params->get('itemSocialButton') && !is_null($this->item->params->get('socialButtonCode', NULL))): ?>
      <!-- Item Social Button -->
      <p class="alert alert-salmon">Si este artículo te pareció <strong>interesante</strong>, compártelo en las redes sociales!</p>
        <?php echo $this->item->params->get('socialButtonCode'); ?>
      
      <?php endif; ?>


      <?php if($this->item->params->get('itemTags') && count($this->item->tags)): ?>
    <!-- etiquetal tags -->
    <div class="itemTagsBlock mt-4 pt-4">
      
     
        <?php foreach ($this->item->tags as $tag): ?>
        <a href="<?php echo $tag->link; ?>"><span class="badge badge-pill badge-danger"><?php echo $tag->name; ?></span></a>
        <?php endforeach; ?>
      
      
    </div>
    <?php endif; ?>

    <?php if($this->item->params->get('itemRelated') && isset($this->relatedItems)): ?>
  <!-- Relacionados items by tag -->
    <div class="itemRelated mt-4 pt-4">
      <h4>Artículos relacionados:</h4>
      
        <?php foreach($this->relatedItems as $key=>$item): ?>



<div class="card flex-md-row mb-4 box-shadow h-xl-300">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-purple"><?php //echo $item->category->name; ?></strong>
        <h5 class="mb-0">
        <?php if($this->item->params->get('itemRelatedTitle', 1)): ?>
          <a class="text-dark" href="<?php echo $item->link ?>"><?php echo $item->title; ?></a>
          <?php endif; ?>
        </h5>
        <div class="mb-1 text-muted">
            <small><?php echo $item->author->name; ?></small>
        </div>
        
            <?php if($this->item->params->get('itemRelatedIntrotext')): ?>
          <div class="card-text mb-auto"><?php echo $item->introtext; ?></div>
          <?php endif; ?>
        
        
    </div>
    <?php if($this->item->params->get('itemRelatedImageSize')): ?>
          <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" />
          <?php endif; ?>
          </div>






        

      
        <?php endforeach; ?>
      
    
    
      </div>
  <?php endif; ?>


  <?php if($this->item->params->get('itemAuthorBlock') && empty($this->item->created_by_alias)): ?>
  <!-- Author Block -->
  <div class="jumbotron p-4 mt-4 jumbotron-fluid">
    
    
    <div class="row justify-content-between align-items-top text-md-center text-lg-left">
      <div class="col-lg-3">
    <?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
    <img class="rounded-circle shadow float-right" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>" />
    <?php endif; ?>
       </div>
    <div class="col-lg-9">
      <div class="itemAuthorDetails">
        <h5 class="itemAuthorName">
          <a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
        </h5>

        <?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
        <p><?php echo $this->item->author->profile->description; ?></p>
        <?php endif; ?>

        <?php if($this->item->params->get('itemAuthorURL') && !empty($this->item->author->profile->url)): ?>
        <span class="itemAuthorUrl"><i class="icon-globe"></i> <a rel="me" href="<?php echo $this->item->author->profile->url; ?>" target="_blank"><?php echo str_replace('http://','',$this->item->author->profile->url); ?></a></span>
        <?php endif; ?>

        <?php if($this->item->params->get('itemAuthorURL') && !empty($this->item->author->profile->url) && $this->item->params->get('itemAuthorEmail')): ?>
        <span class="k2HorizontalSep">|</span>
        <?php endif; ?>

        <?php if($this->item->params->get('itemAuthorEmail')): ?>
        <span class="itemAuthorEmail"><i class="icon-envelope"></i> <?php echo JHTML::_('Email.cloak', $this->item->author->email); ?></span>
        <?php endif; ?>
      </div>


    </div>
      <div class="clr"></div>

      <!-- K2 Plugins: K2UserDisplay -->
      <?php echo $this->item->event->K2UserDisplay; ?>

      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php endif; ?>
</article>







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
              <h5><?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </h5>
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
         
          <?php endif;
           ?>
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

        <!-- End K2 Item Layout --> 
     