<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

	<div id="main-content-inner">
		
			<?php   
			$a = new Area('Main');
			$a->display($c); 
			?> 
			
	</div>

<?php    

$html = Loader::helper('html'); 
$this->addFooterItem($html->javascript($this->getThemePath().'/assets/js/bootstrap.min.js'));    
$this->addFooterItem($html->javascript($this->getThemePath().'/assets/js/Chart.js'));   

$this->inc('elements/footer.php');  

?> 