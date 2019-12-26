<?php //ini_set("display_errors","0");
$app = JFactory::getApplication();
$idactual = $app->getMenu()->getActive()->id;
$itemid = JRequest::getVar('Itemid');
$menu   = $app->getMenu();
$active = $menu->getActive($itemid);
$params = $menu->getParams( $active->id );
$pageclass = $params->get( 'pageclass_sfx' );
$pagehead = $params->get('page_heading');
$this->setTitle( $this->getTitle());
$doc = JFactory::getDocument();
$user = JFactory::getUser();
$this->language  = $doc->language;
$lang = JFactory::getLanguage();
$pagetitle=$doc->getTitle();
$_SESSION['language']=$this->language;
 $this->setGenerator('Programador Web Freelance en Bogotá'); 
require("php/variables.php");

// Borrar Scripts
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="<?php echo $this->language; ?>" class="no-js" prefix="og: http://ogp.me/ns#">
<!-- head -->
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
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/print.css" rel="stylesheet" media="print" />
   
<!-- Animation CSS -->

<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/vendor/aos.css" rel="stylesheet" media="screen"/>
<!--endcss-->
<meta property="fb:pages" content="255011717916005" />
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
<!-- /head -->
<body class="<?php echo $pageclass;echo' ';echo $idactual; ?>">

<!-- Container -->
<div id="container"> 
  <!-- Header -->
  <header>
    <nav class="topnav navbar navbar-expand-lg navbar-dark bg-orange fixed-top">
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
      <a class="btn btn-info btn-round text-white shadow" href="https://wa.me/573188459871" target="_blank"><i class="fab fa-whatsapp"></i> Contáctame! </a><a href="https://wa.me/573188459871" class="downloadzip"></a>
      
      </span>
      </li>
    </ul>
        </div>
       <?php } ?>
      </div>
    </nav>
  </header>
  
  
  <?php if($this->countModules('eg1')) { ?>
  <!-- PAGINA DE INICIO -->
  <section  class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-3 bg-orange position-relative">
    <div class="container-fluid text-white h-100">
      <div class="d-lg-flex align-items-center justify-content-between text-center ">
        <jdoc:include type="modules" name="eg1" style="nomoduletablediv" />
      </div>
    </div>
  </section>
  <svg class="svg1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1440 126" xml:space="preserve">
<path class="bg-orange" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>
  <!-- End INICIO --> 
  <?php }else{ ?>
  
  <?php if ($menu->getActive() != $menu->getDefault($lang->getTag())) { ?>
  

<section class="jumbotron  jumbotron-fluid mb-3 bg-orange position-relative">
  <div class="container text-white h-100 tofront">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="display-5"><?php echo $pagetitle;?> <?php if($idactual=='190'){echo'<span class="subtituloSEO1">Este Gráfico. Diseño y programación web Freelance.</span>';}; ?></h1>
    
      </div>
    </div>
  </div>
</section>

  <!-- End banner-->
  <?php } ?>

   <?php } ?>
  
  <!-- CONTENIDO -->
  <?php
  if(($this->countModules('eg-left')) || ($this->countModules('eg-right')))
    { ?>
  <section class="blog-section single-post">
    <div class="container">
      <div class="row">
        <?php if($this->countModules('eg-left')) { ?>
        <div class="col-md-4">
          <div class="sidebar">
            <jdoc:include type="modules" name="js-left" style="leftright" />
          </div>
        </div>
        <?php } ?>
        <div class="col-md-8">
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
        <?php if($this->countModules('eg-right')) { ?>
        <div class="col-md-4">
          <div class="sidebar">
            <jdoc:include type="modules" name="js-right" style="leftright" />
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } else { ?>
  <jdoc:include type="message" />
<?php if($this->countModules('migas')) { ?>
  <!-- migas  -->
  <div id="migas" class="container pt-0 pb-0">
      <jdoc:include type="modules" name="migas" style="nomoduletablediv" />
  </div>
  <!-- End migas --> 
  <?php } ?>

  <?php if($idactual!='108'){?>
<section class="pt-2 pb-5 aos-init aos-animate" data-aos="fade-up">
<div id="mainSEO" class="container">

  
  <jdoc:include type="component" />


</div>
</section>

<?php } ?>

  <?php } ?>
  <!-- CONTENIDO -->
  
  
  <?php if($this->countModules('eg2')) { ?>
  <!-- eg2 -->
  
      <jdoc:include type="modules" name="eg2" style="nomoduletablediv" />
  
  <!-- End eg2 --> 
  <?php } ?>
  <?php if($this->countModules('eg3')) { ?>
  <!-- eg3 -->
  
      <jdoc:include type="modules" name="eg3" style="nomoduletablediv" />
  
  <!-- End eg3 --> 
  <?php } ?>
  <?php if($this->countModules('eg4')) { ?>
  <!-- eg4 -->
  <div id="trabajos" class="container pt-5 pb-5 aos-init aos-animate" data-aos="fade-up">
      <jdoc:include type="modules" name="eg4" style="nomoduletablediv" />
  </div>
  <!-- End eg4 --> 
  <?php } ?>
  <?php if($this->countModules('eg5')) { ?>
  <!-- eg5 -->
  
      <jdoc:include type="modules" name="eg5" style="nomoduletablediv" />
  
  <!-- End eg5 --> 
  <?php } ?>
  <?php if($this->countModules('eg-blog')) { ?>
  <!-- egblog -->
    <div id="blog" class="container pt-5 pb-5 aos-init aos-animate" data-aos="fade-up">
      <jdoc:include type="modules" name="eg-blog" style="nomoduletablediv" />
    </div>
  <!-- End eblog --> 
  <?php } ?>
 
  <?php if($this->countModules('eg-map')) { ?>
  <!-- eg mapa -->
  
      <jdoc:include type="modules" name="eg-map" style="nomoduletablediv" />
  
  <!-- End egmap --> 
  <?php } ?>
  <?php if($this->countModules('eg-contact')) { ?>
  <!-- eg1 contacto -->
    <div id="contacto" class="container pt-5 pb-5 aos-init aos-animate" data-aos="fade-up">
      <jdoc:include type="modules" name="eg-contact" style="nomoduletablediv" />
    </div>
  <!-- End eg contact --> 
  <?php } ?>

  <?php if($this->countModules('eg-footer')) { ?>
  <!-- footer -->
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve" viewbox="0 0 1440 126" class="svg2">
        <path class="bg-dark" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
        </svg>
        <footer class="bg-dark pb-5">
      <jdoc:include type="modules" name="eg-footer" style="nomoduletablediv" />
        </footer>
  <!-- End eg1 --> 
  <?php } ?>

</div>
<!-- End CONTENEDOR -->







<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/vendor/popper.min.js" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/vendor/bootstrap.min.js" ></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/functions.js" ></script>
    
<!-- ANIMACION -->
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/vendor/aos.js" ></script>


<script>
    AOS.init({
        duration: 700
    });
</script>
 
<!-- sin animación menos de 1200px, -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>


</body>
<!-- /body -->
</html>
<!-- /html -->