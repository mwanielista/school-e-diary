<?php
session_start();
require 'head.php';
require 'includes/connect.inc.php'
?>

    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!--                <img src="images/icon/logo.png" alt="Cool Admin" />-->
                    <h1>e-diary</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Zarządzanie</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="management_frequency.php">Frekwencja</a>
                            </li>
                            <li>
                                <a href="management_marks.php">Oceny</a>
                            </li>
                            <li>
                                <a href="management_projects.php">Projekty</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Uczniowie</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="student_add.php">Dodaj ucznia</a>
                            </li>
                            <li>
                                <a href="student_manage.php">Zarządzaj uczniami</a>
                            </li>
                            <li>
                                <a href="student_classes.php">Klasy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>Twój plan lekcji</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>O aplikacji</a>
                    </li>
                </ul>
            </nav>
        </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <!-- USER ACCOUNT NAME-->
                                    <?php
                                    require 'includes/get_username.inc.php';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-data__tool">

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Dodaj</strong> Projekt:
                            </div>
                            <div class="card-body card-block">
                            <form method="POST" action="includes/add_project.inc.php"  class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-class" class=" form-control-label">Nazwa</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="name" placeholder="Wprowadź nazwę..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-name" name="class"class=" form-control-label">Max ilość uczestników</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-name" name="max_users" placeholder="Wprowadź maksymalną liczbę uczestników..." class="form-control">
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Dodaj" class="btn btn-primary btn-sm">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 wanielista.eu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php
require 'footer_pages.php'
?>