<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


    <div>
        <?php
        $a = new Area('Map');
        $a->display($c);
        ?>
	</div>


	<div class="container desc">
		<div class="row">
            <div class="col-lg-6">
                <h4>Send a message</h4>
                <?php
                $a = new Area('Form');
                $a->display($c);
                ?>
            </div>

            <div class="col-lg-6">
                <h4>Contact Info</h4>
                <p>
                    <i class="fa fa-phone"></i> +639164078384<br>
                    <i class="fa fa-envelope"></i> tri.nventsystemsinc@gmail.com<br>
                    <i class="fa fa-home"></i> Baldado Compound Villa Amada Subd., Dumaguete City Philippines 6200<br>
                </p>
            </div>
		</div><!-- row -->
		<br><br>
	</div><!-- container -->

<?php $this->inc('elements/footer.php'); ?>