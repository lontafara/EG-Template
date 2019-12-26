<?php
    // no direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<div class="owl-wrapper">
  <div class="owl-carousel" data-num="1">
    <?php foreach($data as $i=>$value) { ?>
    <div class="item">
      <div class="tweet-post">
        <h1>
        <a target="<?php echo $target ?>" href="http://twitter.com/<?php echo $value['user']['screen_name'] ?>"><?php echo $value['user']['name'] ?></a>: <?php echo $helper->prepareTweet($value['text'])?>
        </h1>
        <?php if($tweet_time) { ?>
        <span><?php echo  JText::_('ABOUT') . '&nbsp;' . $helper->timeago( $value['created_at'] ) . '&nbsp;' . JText::_('AGO');    ?></span>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
