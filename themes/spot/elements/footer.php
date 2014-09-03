<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

    <div id="r">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
                    <p>We always aim to deliver quality software products that seamlessly integrates clients businesses as they grow. We achieve beyond expectations!</p>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><! -- r wrap -->

    <!-- FOOTER -->
    <div id="f">
        <div class="container">
            <div class="row centered">
                <a href="#"><i class="fa fa-twitter"></i></a><a href="https://www.facebook.com/tsiadmin/info"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>

            </div><!-- row -->
        </div><!-- container -->
    </div><!-- Footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?= $this->getThemePath() ?>/assets/js/bootstrap.min.js"></script>

    <?php Loader::element('footer_required'); ?>

    <script>

        jQuery(function($) {
            // to avoid flickering menu
            $('#nav-list').removeClass('hidden');
            $('#nav-list').css('margin-top', '10px');
            $('#nav-list .nav').addClass('navbar-nav navbar-right');
            $('#nav-list .nav-selected').addClass('active');
        });

    </script>

</body>
</html>
