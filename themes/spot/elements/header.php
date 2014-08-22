<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= $this->getThemePath() ?>/assets/img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="<?= $this->getThemePath() ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= $this->getThemePath() ?>/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= $this->getThemePath() ?>/assets/css/main.css" rel="stylesheet">

    <?php Loader::element('header_required'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
$user = new User();

?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse <?php echo ($user->isSuperUser() && $user->isLoggedIn()) ? '' : 'navbar-fixed-top'?>">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="padding: 0px;" class="navbar-brand" href="/"><img src="<?= $this->getThemePath() ?>/assets/img/tsi.png" height="70" width="290"></a>

        </div>
        <div class="navbar-collapse collapse">
            <div id="nav-list" class="hidden">
                <?php
                $a = new GlobalArea('Navigation');
                $a->display();
                ?>

            </div>
        </div><!--/.nav-collapse -->
    </div>
</div>