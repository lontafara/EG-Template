<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>
<?php if($count>0) { ?>

<section id="portfolio-section2">
  <div class="container">
    <div class="title-section">
        <h1>some of our best works</h1>
        <span></span>
        <p>we have more than 120 items in our portfolio, here are some of the most amazings</p>
    </div>
                
    <?php if($show_filter){ ?>
    <ul class="filter">
      <li><a class="active" href="#" data-filter="*"><?php echo JText::_('all'); ?></a></li>
      <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
      <li><a href="#" data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>"><?php echo ucfirst(trim($value)) ?></a></li>
      <?php } ?>
    </ul>
    <?php } ?>
    <div class="portfolio-box iso-call">
      <?php foreach($items as $index=>$item){ 
      ?>
      <div class="project-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?>">
          <div class="image-box">
              <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>">
              <div class="hover-image">
                  <a href="<?php echo $item->image_full; ?>" class="zoom"><i class="fa fa-search"></i></a>
              </div>
          </div>
          <div class="content-box">
              <div class="inner-content">
                  <h2><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
                  <p><?php echo $item->tag; ?></p>
              </div>
          </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php } else { ?>
<p class="alert">No item found!</p>
<?php } ?>
