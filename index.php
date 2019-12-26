<?php
/*
* @package EsteGrafico
*/
?>
<?php ini_set("display_errors","0");
//Preset Options

$homepage_layout = $this->params->get('homepage_layout');

if($homepage_layout=='home1')
{
	require("preset/home1.php");	
}
else if($homepage_layout == 'home2')
{
	require("preset/home2.php");	
}
else if($homepage_layout == 'home3')
{
	require("preset/home3.php");	
}
else if($homepage_layout == 'home4')
{
	require("preset/home4.php");	
}
else if($homepage_layout == 'home5')
{
	require("preset/home5.php");	
}
else if($homepage_layout == 'home6')
{
	require("preset/home6.php");	
}
else if($homepage_layout == 'home7')
{
	require("preset/home7.php");	
}
else 
{
	require("preset/home2.php");	
}
?>
