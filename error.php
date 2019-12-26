<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentError $this */

if (!isset($this->error))
{
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false;
}

$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>


<?php $doc->setHtml5(true); ?> 
<meta content='width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no' name='viewport'/>

<?php if($idactual=='108'){?> 
<meta name="google-site-verification" content="Pqx4ay762VYuiEj_vLwhffTrt-W2V4Mn5wA79PJB9OQ" />
<?php } ?>
    

<jdoc:include type="head" />
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet" media="screen">

    
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/all.min.css" media="screen">
    
<!-- Main CSS -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/main.css" rel="stylesheet" media="screen"/>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/print.css" media="print" />
   
<!-- Animation CSS -->

<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/vendor/aos.css" rel="stylesheet" media="screen"/>
<!--endcss-->

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-28916569-2', 'auto');  
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
<style>
.svg1{-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;enable-background:new 0 0 1440 126;}
.svg2{enable-background:new 0 0 1440 126;}
</style>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />   
</head>
<body class="<?php echo $pageclass;echo' ';echo $idactual; ?>">

<!-- Container -->
<div id="container"> 
  <!-- Header -->
  <header>
    <nav class="topnav navbar navbar-expand-lg navbar-dark bg-cyan fixed-top">
      <div class="container"> 
      <?php if($this->params->get('logo')==NULL) { ?> 
      <a class="navbar-brand" href="/"><i class="fad fa-code mr-2"></i>Este <strong>Gráfico</strong> </a>
      <?php } else { ?>
      <a class="navbar-brand" href="/"><i class="fad fa-code mr-2"></i>Este <strong>Gráfico</strong></a>
      <?php } ?>
          
      <?php if($this->countModules('eg-menu')) { ?>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor02" >
          <ul class="navbar-nav mr-auto d-flex align-items-center">
            <jdoc:include type="modules" name="eg-menu" style="nomoduletablediv" />
          </ul>
          <ul class="navbar-nav ml-auto d-flex align-items-center">
      <li class="nav-item">
      <span class="nav-link" >
        <jdoc:include type="modules" name="eg-ctatop" style="nomoduletablediv" />
     
      
      </span>
      </li>
    </ul>
        </div>
       <?php } ?>
      </div>
    </nav>
  </header>
<section class="pt-5 pb-5 aos-init aos-animate" data-aos="fade-down">
<div class="container">

	<div class="error alert alert-danger">
		<div id="outline">
		<div id="errorboxoutline">
			<div id="errorboxheader"><?php echo $this->error->getCode(); ?> - <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></div>
			<div id="errorboxbody">
			<p><strong><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></strong></p>
			<ol>
				<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
				<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
				<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
				<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
				<li><?php echo JText::_('JERROR_LAYOUT_REQUESTED_RESOURCE_WAS_NOT_FOUND'); ?></li>
				<li><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></li>
			</ol>
			<p><strong><?php echo JText::_('JERROR_LAYOUT_PLEASE_TRY_ONE_OF_THE_FOLLOWING_PAGES'); ?></strong></p>
			<ul>
				<li><a href="<?php echo JUri::root(true); ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></li>
			</ul>
			<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
			<div id="techinfo">
			<p>
				<?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>
				<?php if ($this->debug) : ?>
					<br/><?php echo htmlspecialchars($this->error->getFile(), ENT_QUOTES, 'UTF-8');?>:<?php echo $this->error->getLine(); ?>
				<?php endif; ?>
			</p>
			<?php if ($this->debug) : ?>
				<div>
					<?php echo $this->renderBacktrace(); ?>
					<?php // Check if there are more Exceptions and render their data as well ?>
					<?php if ($this->error->getPrevious()) : ?>
						<?php $loop = true; ?>
						<?php // Reference $this->_error here and in the loop as setError() assigns errors to this property and we need this for the backtrace to work correctly ?>
						<?php // Make the first assignment to setError() outside the loop so the loop does not skip Exceptions ?>
						<?php $this->setError($this->_error->getPrevious()); ?>
						<?php while ($loop === true) : ?>
							<p><strong><?php echo JText::_('JERROR_LAYOUT_PREVIOUS_ERROR'); ?></strong></p>
							<p>
								<?php echo htmlspecialchars($this->_error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>
								<br/><?php echo htmlspecialchars($this->_error->getFile(), ENT_QUOTES, 'UTF-8');?>:<?php echo $this->_error->getLine(); ?>
							</p>
							<?php echo $this->renderBacktrace(); ?>
							<?php $loop = $this->setError($this->_error->getPrevious()); ?>
						<?php endwhile; ?>
						<?php // Reset the main error object to the base error ?>
						<?php $this->setError($this->error); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			</div>
			</div>
		</div>
		</div>
	</div>

</div>
</section>


</div>

</body>
</html>
