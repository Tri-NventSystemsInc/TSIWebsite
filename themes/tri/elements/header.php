<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo LANGUAGE?>" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php Loader::element('header_required'); ?>
	
<!-- Site Header Content //-->
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('typography.css')?>" />

<link href='http://fonts.googleapis.com/css?family=Anton|Ubuntu' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $this->getStyleSheet('reset.css')?>"/>				
<link type="text/css" rel="stylesheet" href="<?php echo $this->getStyleSheet('style.css')?>" />			
<link type="text/css" rel="stylesheet" href="<?php echo $this->getStyleSheet('widget/css/rcarousel.css')?>" />

<style type="text/css">
	#container {
		width: 100%;
		position: relative;
		margin: 0 auto;
	}

	#carousel {
		width: 100%;
		margin: 0 auto;
	}

	#ui-carousel-next, #ui-carousel-prev {
		width: 60px;
		height: 240px;
		background: url(<?= $this->getThemePath(); ?>/images/arrow-left.png) #fff center center no-repeat;
		display: block;
		position: absolute;
		top: 0;
		z-index: 100;
	}

	#ui-carousel-next {
		right: 0;
		background-image: url(<?= $this->getThemePath(); ?>/images/arrow-right.png);
	}

	#ui-carousel-prev {
		left: 0;
	}

	#ui-carousel-next > span, #ui-carousel-prev > span {
		display: none;
	}

	.slide {
		margin: 0;
		position: relative; 
	}

	.slide  h1 {
		font: 72px/1 Anton, sans-serif;
		color: #ff5c43;
		margin: 0;
		padding: 0;
	}

	.slide h2 {
		font: 50px/1 Anton, sans-serif;
		color: #ff5c43;
		margin: 0;
		padding: 0;
	}

	.slide h4 {
		font: 40px/1 Anton, sans-serif;
		color: #ff5c43;
		margin: 0;
		padding: 0;
	}

	.slide  p {
		font: 32px/1 Ubuntu, sans-serif;	
		color: #4d4d4d;
		margin: 0;
		padding: 0;
	}

	#slide01 > img {
		position: absolute;
		bottom: 35px;
		left: 30px;
	}

	#slide01 > .text {
		position: absolute;
		left: 10px;
		bottom: 35px;
	}

	#slide02 > img {
		position: absolute;
		bottom: 35px;
		left: 30px;
	}

	#slide02 > .text {
		position: absolute;
		left: 290px;
		bottom: 65px;
	}

	#slide03 > img {
		position: absolute;
		bottom: 25px;
		left: 30px;
	}

	#slide03 > .text {
		position: absolute;
		left: 270px;
		bottom: 25px;
	}

	#slide04 > img {
		position: absolute;
		bottom: 50px;
		left: 60px;
	}

	#slide04 > .text {
		position: absolute;
		left: 290px;
		bottom: 25px;
	}

	#slide05 > img {
		position: absolute;
		bottom: 35px;
		left: 60px;
	}

	#slide05 > .text {
		position: absolute;
		left: 240px;
		bottom: 35px;
	}

	#slide06 > img {
		position: absolute;
		bottom: 10px;
		left: 20px;
	}

	#slide06 > .text {
		position: absolute;
		left: 290px;
		bottom: 35px;
	}

	#pages {
		width: 150px;
		margin: 0 auto;
	}

	.bullet {
		background: url(<?= $this->getThemePath(); ?>/images/page-off.png) center center no-repeat;
		display: block;
		width: 18px;
		height: 18px;
		margin: 0;
		margin-right: 5px;
		float: left;				
	} 

</style>

</head>
<body>

<div id="page">
	<div id="headerSpacer"></div>
	<div id="header">
		
		<?php if ($c->isEditMode()) { ?>
		<div style="min-height: 80px">
		<?php } ?>
		
		<div id="headerNav">
			<?php
			$a = new Area('Header Nav');
			$a->display($c);
			?>
		</div>
		
		<h1 id="logo"><!--
			--><a href="<?php  echo DIR_REL?>/"><?php  
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo h(SITE);
			?></a><!--
		--></h1>

		<?php
		// we use the "is edit mode" check because, in edit mode, the bottom of the area overlaps the item below it, because
		// we're using absolute positioning. So in edit mode we add a bit of space so everything looks nice.
		?>

		<div class="spacer"></div>

		<?php if ($c->isEditMode()) { ?>
		</div>
		<?php } ?>
		
		<div id="header-area">
			<div class="divider"></div>
			<div id="header-area-inside">
			<?php			
			$ah = new Area('Header');
			$ah->display($c);			
			?>	
			</div>	
			
			<?php if ($ah->getTotalBlocksInArea() > 0) { ?>
				<div class="divider"></div>
			<?php } ?>
		</div>
	</div>			