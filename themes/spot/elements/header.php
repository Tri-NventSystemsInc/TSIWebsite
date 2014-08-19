<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo LANGUAGE?>" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php Loader::element('header_required'); ?>

<link rel="stylesheet" type="text/css" href="<?=$this->getThemePath()?>/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?=$this->getThemePath()?>/assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?=$this->getThemePath()?>/assets/css/font-awesome.css" />

</head>
<body>

<div id="page">
	<div id="headerSpacer"></div>
	<div id="header">
		
		<?php if ($c->isEditMode()) { ?>
		<div style="min-height: 80px">
		<?php } ?>

        <?php $user = new User();
            if (!$user->isLoggedIn()) { ?>

            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">TRI-NVENT</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/solution">Solutions</a></li>
                            <li><a href="/tri-nvent-culture">Tri-nvent Culture</a></li>
                            <li><a href="/our-tools">Out Tools</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/about">About Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        <?php } ?>
		<div class="spacer" style="margin-top: 80px;"></div>

		<?php if ($c->isEditMode()) { ?>
		</div>
		<?php } ?>
		
		<div id="header-area"> 
			<div id="header-area-inside">
			<?php			
			$ah = new Area('Header');
			$ah->display($c);			
			?>	
			</div>	
			
			<?php if ($ah->getTotalBlocksInArea() > 0) { ?>
				
			<?php } ?>
		</div>
	</div>			