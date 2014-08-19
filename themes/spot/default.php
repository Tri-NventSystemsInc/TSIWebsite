<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

	<div id="container">

        <?php
        $p = Page::getCurrentPage();
        if ($p->cID == HOME_CID) {
            ?>
            <div id="headerwrap">
                <div class="container">
                    <div class="row centered">
                        <div class="col-lg-8 col-lg-offset-2">
                            <h1>We achieve beyond <b>expectations!</b></h1>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- headerwrap -->
        <?php
        } else {
            $a = new Area('Main');
            $a->display($c);
        }
        ?>

			
	</div>

<?php
$html = Loader::helper('html');

$this->addFooterItem($html->javascript($this->getThemePath().'/assets/js/bootstrap.min.js'));
$this->addFooterItem($html->javascript($this->getThemePath().'/assets/js/Chart.js'));

$this->inc('elements/footer.php');
?> 
