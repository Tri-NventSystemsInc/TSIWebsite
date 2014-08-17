<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

	<div id="main-content-inner">
		
			<?php 
			if (true) {
			?>
				<div id="content">  
					<div id="container">
						<div id="carousel"  >
							<div id="slide01" class="slide" >  
								<div class="text">
									<h2>We always aim to deliver quality software products that seamlessly integrates clients businesses as they grow</h2> 
								</div>
							</div>
							
							<div id="slide03" class="slide">
								<img src="<?= $this->getThemePath(); ?>/images/html_slides/horizontalvertical.png" alt="horizontal and vertical carousel" />
								<div class="text">
									<h4>We invision a globally recognized premier customer oriented software development company.</h4> 
								</div>
							</div>
							
							<div id="slide04" class="slide">
								<img src="<?= $this->getThemePath(); ?>/images/html_slides/multi.png" alt="multi carousels" />
								<div class="text">
									<h1>We achieve beyond expectations!</h1> 
								</div>
							</div>

							<div id="slide02" class="slide">
								<img src="<?= $this->getThemePath(); ?>/images/html_slides/anycontent.png" alt="any content" />
								<div class="text">
									<h1>any content</h1>
									<p>from images to any HTML element</p>
								</div>
							</div> 
							
							<div id="slide05" class="slide">
								<img src="<?= $this->getThemePath(); ?>/images/html_slides/customization.png" alt="customization" />
								<div class="text">
									<h1>highly<br />customizable</h1>
									<p>style it whatever you like</p>
								</div>
							</div>
							
							<div id="slide06" class="slide">
								<img src="<?= $this->getThemePath(); ?>/images/html_slides/browsers.png" alt="multi browser support" />
								<div class="text">
									<h1>multi browser<br />support</h1>
									<p>supports even old browsers</p>
								</div>
							</div>					
						</div> 
						<a href="#" id="ui-carousel-next"><span>next</span></a>
					    <a href="#" id="ui-carousel-prev"><span>prev</span></a> 
						<div id="pages"></div>
					</div>
				</div>
			<?php
			} else {
				$a = new Area('Main');
				$a->display($c);
			}
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