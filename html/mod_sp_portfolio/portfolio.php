<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>
<?php if($count>0) { ?>

<section id="portfolio-section">
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
          <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>">
          <div class="hover-box">
              <div class="inner-hover">
                  <h2><a href="index.php/component/content/article/<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
                  <span></span>
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
