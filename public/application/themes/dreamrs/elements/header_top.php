<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Real_state || Home</title>
        <link rel="icon" href="<?= $view->getThemePath() ?>/img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/flaticon.css">
        <!-- magnific-popup CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/magnific-popup.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/fontawesome/css/all.min.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/style.css">
        <?php
        $u = new User();
        /* $u = $app->make(\Concrete\Core\User\User::class); */
        if ($u->checkLogin()) {
        ?>
            <style type="text/css">
             .main_menu { top: 48px !important; }
            </style>
        <?php
        }
        ?>

        <!-- Concrete5 Stuff -->
        <?php View::element('header_required') ?>
    </head>

    <body>

        <div class="<?= $c->getPageWrapperClass() ?>">
