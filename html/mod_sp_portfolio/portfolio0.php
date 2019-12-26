<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>
<?php if($count>0) { ?>

<div class="row justify-content-center">
  <div class="col-lg-11">
<div class="pb-5 pt-3 text-center"><h2>Mi trabajo</h2>
        
        <p class="text-muted">Realizo proyectos web para clientes de todo el mundo.</p>
    </div>
    </div>
    </div>
                
    <?php if($show_filter){ ?>
      <nav aria-label="Trabajos">
    <ul class="pagination">
      <li class="page-item"><a class="active" href="#" data-filter="*"><?php echo JText::_('all'); ?></a></li>
      <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
      <li class="page-item"><a href="#" data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>"><?php echo ucfirst(trim($value)) ?></a></li>
      <?php } ?>
    </ul>
  </nav>
    <?php } ?>
    <div class="card-columns">
      <?php foreach($items as $index=>$item){ 
      ?>
      <div class="card <?php echo modSPPortfolioJHelper::slug($item->tag); ?>">
          <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="card-img">
          <div class="card-img-overlay d-flex align-items-center text-center">
              <div class="card-body">
                  <h3 class="card-title"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
                  <span></span>
                  <p class="card-text text-muted"><?php echo $item->tag; ?></p>
              </div>
          </div>
      </div>
      <?php } ?>
    </div>
  

<?php } else { ?>
<p class="alert">No hay nada!</p>
<?php } ?>
