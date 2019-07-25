
<?php
$this->inc('elements/header_top.php');
$s = Stack::getByName("Header Logo");
?>

<!--::menu part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                        <?php
                        if (is_object($s)) {
                            $s->display();
                        }
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                        <?php
                        $ga = new GlobalArea("Header Navigation");
                        $ga->disableControls();
                        $ga->display();
                        ?>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--::menu part end::-->
