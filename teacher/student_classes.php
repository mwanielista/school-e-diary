
<?php
require 'head.php';
require 'includes/connect.inc.php';
session_start();


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

                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">Klasy:</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                <tr>
                                    <td>Nr klasy:</td>
                                    <td>Ilość uczniów:</td>
                                </tr>
                                <?php
                                    $quest = "select class, count(DISTINCT(idUsers)) as count from users where class is not null group by class ;";
                                    $query = mysqli_query($conn, $quest);
                                    while($row = mysqli_fetch_array($query)) {
                                        echo '<tr> <td>';
                                        echo $row['class'].'</td><td>';
                                        echo $row['count'];
                                        echo '</td></tr>';
                                    }

                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--  END TOP CAMPAIGN-->

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
    require 'footer_pages.php';
?>