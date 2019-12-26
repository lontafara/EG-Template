
<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$path = $this->baseurl.'/templates/'.$this->template;
$app = JFactory::getApplication();

//factory
$document = JFactory::getDocument();

//General
$app->getCfg('sitename');
$siteName = $this->params->get('siteName');
$templateparams	= $app->getTemplate(true)->params;

//Logo Options
$logo = $this->params->get('logo');
 
 
//Home Versions
$homepage_layout = $this->params->get('homepage_layout');


?>