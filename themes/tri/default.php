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
$this->addFooterItem($html->javascript($this->getThemePath().'/widget/lib/jquery.ui.core.js')); 
$this->addFooterItem($html->javascript($this->getThemePath().'/widget/lib/jquery.ui.widget.js')); 
$this->addFooterItem($html->javascript($this->getThemePath().'/widget/lib/jquery.ui.rcarousel.js'));   
$this->addFooterItem($html->javascript($this->getThemePath().'/main.js'));  
$this->inc('elements/footer.php');  
?> 