<?php
session_start();
require 'head.php';
require 'includes/connect.inc.php'
?>

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

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
                                <div class="noti-wrap">

                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <h1>Oceny:</h1>
                            <div class="table-data__tool-left">
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="mark_add.php"><i class="zmdi zmdi-plus"></i>Dodaj ocenę</a></button>   //zmienić kolor

                            </div>
                        </div>
                        <?php

                            $quest = "select * from classes";
                            $query = mysqli_query($conn, $quest);
                            echo'<form class="select" method="POST">';
                            echo '<h4>Wybierz klasę</h4>';
                            echo '<select name="select_class">';
                            while($row = mysqli_fetch_array($query)){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                            }
                            echo "</select>";
                            echo'<input type="submit" class="au-btn" name="sbm_class">';
                            echo '</form>';
                            $klasa = null;
                            if(isset($_POST['sbm_class'])){
                                $class = $_POST['select_class'];
                                $quest_users = "select * from users where class like '$class'";
                                $query = mysqli_query($conn, $quest_users);
                                echo'<form class="select" method="POST">';
                                echo '<h4>Wybierz ucznia</h4>';
                                echo '<select name="select_user">';
                                while($row = mysqli_fetch_array($query)){
                                    echo '<option value="'.$row['idUsers'].'">'.$row['uidUsers'].'</option>';
                                }
                                echo "</select>";

                                echo '<h4>Wybierz przedmiot:</h4>';
                                echo '<select name="select_subject">';
                                $quest_subject = "select * from przedmioty";
                                $query2 = mysqli_query($conn, $quest_subject);
                                while($row2 = mysqli_fetch_array($query2)){
                                    echo '<option value="'.$row2['name'].'">'.$row2['name'].'</option>';
                                }
                                echo "</select>";
                                echo'<input type="submit" class="au-btn" name="show_marks">';
                                echo '</form>';
                            }

                            if(isset($_POST['show_marks'])){
                                echo '<style>.select{visibility: hidden}</style>';
                                $user = $_POST['select_user'];
                                $select_username = "select * from users where idUsers like $user";
                                $query_username = mysqli_query($conn, $select_username);
                                while($row = mysqli_fetch_array($query_username)){
                                    $username = $row['uidUsers'];
                                }
                                $subject = $_POST['select_subject'];
                                echo '<h4>Wybrano użytkownika <b> '.$username . '</b> i przedmiot <b>'. $klasa.'</b></h4>';
                                $select_marks = "select * from oceny where uczen = $user and przedmiot = '$subject'";
                                $query_marks = mysqli_query($conn, $select_marks);
                                if(!$query_marks){
                                    echo"nie masz ocen";
                                }

                                echo '<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>';

                                while($row = mysqli_fetch_array($query_marks)){
                                    echo ' <tr>
                                                <td>'.$row['ocena'].'</td>
                                                <td class="text-right">'.$row['przedmiot'].'</td>
                                           </tr>';
                                }
                                echo '</tbody></table></div></div></div>';
                            }
                        ?>
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